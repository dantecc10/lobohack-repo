import cv2
import torch
import numpy as np
import matplotlib.path as mplPath
import SQLConnect

zone = np.array([
    [124,289],
    [1564,278],
    [1807,951],
    [27,830],
])

def get_center(bbox):
    center = ((bbox[0] + bbox[2]) // 2, (bbox[1] + bbox[3]) //2)
    return center

def load_model():
    model = torch.hub.load('ultralytics/yolov5', 'yolov5s', force_reload=True)
    return model

def get_bboxes(preds: object):
    #xmin,ymix,xmax,ymax
    df = preds.pandas().xyxy[0]
    df = df[df["confidence"] >= 0.3]
    df = df[df["name"] == "car"]

    return df[["xmin","ymin","xmax","ymax"]].values.astype(int)

def is_valid_detection(xc, yc):
    return mplPath.Path(zone).contains_point((xc,yc))

def detector(cap: object):

    model = load_model()

    while cap.isOpened():
        status, frame = cap.read()
        if not status:
            break
        
        preds = model(frame)
        bboxes = get_bboxes(preds)
        
        detections = 0
        
        for box in bboxes:
            xc, yc = get_center(box)
            if is_valid_detection(xc, yc):
                detections += 1
                SQLConnect.update_cars_quantity(2,detections)

            cv2.circle(img=frame, center=(xc,yc), radius=5, color=(0,255,0), thickness=-1)
            cv2.rectangle(img=frame, pt1=(box[0], box[1]), pt2=(box[2], box[3]), color=(255,0,0), thickness=1)

        cv2.putText(img=frame, text=f"Cars: {detections}", org=(100, 100), fontFace=cv2.FONT_HERSHEY_PLAIN, fontScale=3, color=(0,0,0), thickness=3)
        cv2.polylines(img=frame, pts=[zone], isClosed=True, color=(0,0,255), thickness=4)

        cv2.imshow("frame", frame)

        if cv2.waitKey(10) & 0xFF == ord('q'):
            break

    cap.release()

if __name__ == '__main__':
    cap = cv2.VideoCapture("Siu/carflow.mov")

    detector(cap)