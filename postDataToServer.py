import time,bluetooth,requests,json

while True:
        print "Searching for Bluetooth enabled devices.....\n"
        result = bluetooth.discover_devices()
        jsonResult = json.dumps(result)
        print result
        if(result!=None):
                print "Posting information to Server"
                res = requests.post("http://192.168.0.3/bluetoothProject/receiv$
                print str(result)+"\n"
                print(res.text)
        time.sleep(10)
