    var selectedObjArr = [];
    var defaultDistance = 1000;
    var defaultCount = 0;
    var maxCount = defaultCount;

    function heatdata(data){
        selectedObjArr = [];
        var distance;
        for(var i = 0;i<data.length;i++){
            var count = defaultCount;
            for(var j = 0;j<data.length-1;j++){
				var point1 = new BMap.Point(data[j]);
				var point2 = new BMap.Point(data[j+1]);
                distance = map.getDistance(point1,point2);
                if( distance < defaultDistance){
                    count += (defaultDistance-distance)/defaultDistance;
                }
            }
            if(maxCount<count){
                maxCount = count;
            }
            var obj = {};
            obj["lng"] = data[i][0];
            obj["lat"] = data[i][1];
            obj["count"] = Math.round(count);
            selectedObjArr.push(obj);
        }

        return selectedObjArr;
    }