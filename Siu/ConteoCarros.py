import cv2

def detector(cap: object):

    while cap.isOpened():
        status, frame = cap.read()
        if not status:
            break
        cv2.imshow("frame", frame)

        if cv2.waitKey(10) & 0xFF == ord('q'):
            break

    cap.release()

if __name__ == '__main__':
    cap = cv2.VideoCapture("autos.mp4")

    detector(cap)