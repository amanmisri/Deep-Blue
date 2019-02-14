import urllib
import json
import requests
import webbrowser
import cv2
import numpy as np
import sys
# place=input("enter place")
# l="https://us1.locationiq.com/v1/search.php?key=6c97780cff7d27&format=json&q="
# l=l+place

# r = requests.get(url=l)
# r=r.json()
# lat=r[0]['lat']
# lon=r[0]['lon']
# boundingbox=r[0]['boundingbox'];
# add=r[0]['display_name'];


# ml="https://api.mapbox.com/styles/v1/mapbox/satellite-v9/static/"+lon+","+lat+",18,20/1280x1280?access_token=pk.eyJ1Ijoic2FqbWFydSIsImEiOiJjanFubmF4cmExdGR6NDlwb3IzaGpob2luIn0.FeK54zsZu7sICVbgL52z1A"
# webbrowser.open_new_tab(ml)

def file_read(ia):
        with open (la, "r") as myfile:
                data=myfile.readlines()
                print(data)
file_read(ia.txt')

# import cv2
# import numpy as np
def color_hsv(res,cap):
    # Convert BGR to HSV
    hsv = cv2.cvtColor(cap, cv2.COLOR_BGR2HSV)
    

    #lz=np.array([0,40,100])
    #uz=np.array([20,255,255])
    
    #lz=np.array([20,40,100])
    #uz=np.array([20,100,120])
    la=np.array([80,60,60])
    ua=np.array([110,255,255])
    lb=np.array([120,200,180])
    ub=np.array([140,255,255])
    lc=np.array([140,140,160])
    uc=np.array([160,255,255])
    ld=np.array([170,160,180])
    ud=np.array([180,255,255])
    le=np.array([160,160,180])
    ue=np.array([170,255,255])
    """lf=np.array([30,60,80])
    uf=np.array([40,255,255])
    lg=np.array([20,60,80])
    ug=np.array([25,255,255])
    lh=np.array([25,180,80])
    uh=np.array([30,225,255])
    li=np.array([120,180,60])
    ui=np.array([130,255,100])
    lj=np.array([50,180,180])
    uj=np.array([60,255,255])
    lk=np.array([50,70,180])
    uk=np.array([70,100,255])
    ll=np.array([170,70,180])
    ul=np.array([180,100,255])
    lm=np.array([10,220,180])   
    um=np.array([30,225,255])
    ln=np.array([100,100,180])
    un=np.array([150,150,255])
    lo=np.array([160,130,120])
    uo=np.array([170,150,140])
    lp=np.array([100,100,100])
    up=np.array([150,150,150])
    lq=np.array([0,200,200])
    uq=np.array([0,230,230])
    lr=np.array([0,230,230])
    ur=np.array([0,240,240])
    ls=np.array([20,20,180])
    us=np.array([40,255,255])
    lt=np.array([20,180,180])
    ut=np.array([40,255,255])
    lu=np.array([30,160,180])
    uu=np.array([60,180,255])
    lv=np.array([100,100,100])
    uv=np.array([110,255,255])
    lw=np.array([10,180,180])
    uw=np.array([40,255,255])
    lx=np.array([40,180,180])
    ux=np.array([100,255,255])
    ly=np.array([110,50,50])
    uy=np.array([130,255,255])"""
    lz=np.array([20,40,180])
    uz=np.array([20,200,180])
    
    """lyel=np.array([20,100,100])
    uyel=np.array([50,250,250])
    lbl=np.array([70,100,100])
    ubl=np.array([100,250,250])
    lgr=np.array([50,100,100])
    ugr=np.array([70,250,250])"""

    ly = np.array([5, 50, 50],np.uint8)
    uy = np.array([15, 255, 255],np.uint8)
    arr=np.array([ly])
    arr1=np.array([uy])
    for i in range(1) :
        # Threshold the HSV image to get only blue colors
        mask = cv2.inRange(hsv, arr[i], arr1[i])

       # Bitwise-AND mask and original image
        res = cv2.bitwise_and(cap,cap, mask= mask)

        image, contours, hierarchy = cv2.findContours(mask,cv2.RETR_TREE,cv2.CHAIN_APPROX_SIMPLE)
        img = cv2.drawContours(cap, contours , -1, (0,0,255), 3)
        cv2.imshow('couter',img)
        webbrowser.open_new_tab(img)
        k = cv2.waitKey(50000) & 0xFF
        cv2.destroyAllWindows()


cap=cv2.imread(data)
color_hsv(cap,cap)



#print("Lattitude: ",lat,"\nLongitude: ",lon,"\nboundingbox: ",boundingbox,"\nplace: ",add)
