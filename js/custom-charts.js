  var nvd3Charts = function() {

        var myColors = ["#33414E","#8DCA35","#00BFDD","#FF702A","#DA3610",
                        "#80CDC2","#A6D969","#D9EF8B","#FFFF99","#F7EC37","#F46D43",
                        "#E08215","#D73026","#A12235","#8C510A","#14514B","#4D9220",
                        "#542688", "#4575B4", "#74ACD1", "#B8E1DE", "#FEE0B6","#FDB863",
                        "#C51B7D","#DE77AE","#EDD3F2"];
        d3.scale.myColors = function() {
            return d3.scale.ordinal().range(myColors);
        };
        var colorArray = ['#DA5D74', '#8DC63F', '#005180','#7AB1C6', '#8DC63F', '#8DC63F' ,'#E0D751','#ADADAD'];

        colorFunction = function() {
            return function(d, i) {
            return colorArray[i];
        };
      };

