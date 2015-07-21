  /* gauge.js start */
if (window.location.pathname+window.location.search == '/hc3-demo/overview.php') {
  console.log('working');
  gaugejs("dashboard-gauge","dashboard-gauge-font",90);
}
if (window.location.pathname+window.location.search == '/hc3-demo/program-evaluation.php?p=diabetes&t=all') {
  gaugejs("diabetes-gauge","diabetes-gauge-font",90);
}
else if (window.location.pathname+window.location.search == '/hc3/diabetes.php?s=acceredited') {
  gaugejs("diabetes-gauge-accr","diabetes-gauge-accr-value",95);
}
else if (window.location.pathname+window.location.search == '/hc3/diabetes.php?s=non-acceredited') {
  gaugejs("diabetes-gauge-non-accr","diabetes-gauge-non-accr-value",85);
}

function gaugejs(GaugeId,GaugeTextId,GaugeValue) {

  var opts = {
      lines: 12, // The number of lines to draw
      angle: 0, // The length of each line
      lineWidth: 0.20, // The line thickness
      pointer: {
        length: 0.78, // The radius of the inner circle
        strokeWidth: 0.015, // The rotation offset
        color: '#000000' // Fill color
      },
      limitMax: 'false',   // If true, the pointer will not go past the end of the gauge
      colorStart: '#2DAAE1',   // Colors
      colorStop: '#2DAAE1',    // just experiment with them
      strokeColor: '#E0E0E0',   // to see which ones work best for you
      generateGradient: true
    };
    var target = document.getElementById(GaugeId); // your canvas element
    var gauge = new Gauge(target).setOptions(opts); // create sexy gauge!
    gauge.setTextField(document.getElementById(GaugeTextId));
    // document.getElementById('preview-textfield-gauge').innerHTML = "%";
    var textRenderer = new TextRenderer(document.getElementById(GaugeTextId))
    textRenderer.render = function(gauge) {
           percentage = gauge.displayedValue / gauge.maxValue
           this.el.innerHTML = (percentage * 100).toFixed(0) + "%"
        };
    gauge.setTextField(textRenderer);
    gauge.maxValue = 100; // set max gauge value
    gauge.animationSpeed = 6; // set animation speed (32 is default value)
    gauge.set(GaugeValue); // set actual value
}




