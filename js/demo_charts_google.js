googlecharts();
function googlecharts() {


    /*
     * Google Bar Province Chart Start
     */
      function googleBarProvinceChart() {
          // just a normal ComboChart setup
          var data = google.visualization.arrayToDataTable([
              ['Province', '' ],
              ['AB', 0.12 ],
              ['B.C', 0.10],
              ['MB', 0.04],
              ['NB', 0.03],
              ['NFLD', 0.1],
              ['NS ', 0.07],
              ['ON', 0.30 ],
              ['P.E.I', 0.01],
              ['QC', 0.25 ],
              ['SASK', 0.07],


          ]);
          var formatter = new google.visualization.NumberFormat({ pattern:'#.#%' });
          formatter.format(data, 1);


          mydiv = $("#google-bar-province-chart");
          chart = new google.visualization.BarChart(mydiv[0]);
          chart.draw(data, {

              legend: {position: 'none'},
              vAxis: {format: "#.#%"},
              bar: {groupWidth: "85%"},
              vAxis:{gridlines: {count: 0}},
              chartArea: {left: 120, top: 10,height:300},
              focusTarget: 'category',
              colors:['#00528c']

          });

          /* Here comes the hack!
          We're going to add a svg text element to each column bar.
          This code will work for this data setup only. If you add/remove a series, this code must be adapted
          */
          rects = mydiv.find('svg > g > g > g > rect');
          var row = 0;
          for (i = 0; i < rects.length; i++) {
              // this selector also retrieves gridlines
              // we're excluding them by height
              el = $(rects[i]);
              if (parseFloat(el.attr("width")) <= 2) { continue; }
              aparent = el.parent();
              do { // skips 'null' values
                  text = data.getValue(row++, 1);
              } while (text == null && row < data.getNumberOfRows());

              if (text) {
                  text = formatter.formatValue(text);
                  // see below
                  pos = getElementPos(el);
                  attrs = {x: pos.x + pos.width / 1+18, y: pos.y + 14,
                           fill: 'black', 'font-family': 'Arial', 'font-size': 13, 'text-anchor': 'middle'};
                  aparent.append(addTextNode(attrs, text, aparent));
              }
          }
      }

      google.load('visualization', '1', {packages: ['corechart']});
      google.setOnLoadCallback(googleBarProvinceChart);

      function getElementPos($el) {
          // returns an object with the element position
          return {
              x: parseFloat($el.attr("x")),
              width: parseFloat($el.attr("width")),
              y: parseFloat($el.attr("y")),
              height: parseFloat($el.attr("height"))
          }
      }

      function addTextNode(attrs, text, _element) {
          // creates an svg text node
        var el = document.createElementNS('http://www.w3.org/2000/svg', "text");
        for (var k in attrs) { el.setAttribute(k, attrs[k]); }
        var textNode = document.createTextNode(text);
        el.appendChild(textNode);
        return el;
      }
      /*
     * Google Bar Province Chart End
     */


    /*
     * Google Pie Chart
     */
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(googlePieChart);
      function googlePieChart() {

        var data = google.visualization.arrayToDataTable([
          ['Fear of Needles', 'Hours per Day'],
          ['Initiation Treatment',     19],
          ['Patient Compliance',      14],
          ['Medication Choice',  25],
          ['Diet Exercise', 12],
          ['Sleep',    30]
        ]);

        var options = {
          height: 300,
          chartArea:{left:"20%",top:"10%",width:"90%",height:"90%"},
          colors:['#5bbbff', '#cae9ff', '#005fa3','#D9D9D9','#003459'],
          legend: {  alignment: 'center',textStyle: {fontSize: 12} }
        };

        var chart = new google.visualization.PieChart(document.getElementById('google-pie-chart'));

        chart.draw(data, options);
      }
    /*
     * Google Column chart
     */
     function drawVisualization() {
    // just a normal ComboChart setup
    var data = google.visualization.arrayToDataTable([
        ['Month', '' ],
        ['Self Learning', 0.25],
        ['Online Courses', 0.18],
        ['Symposia', 0.16],
        ['Interactive Cases', 0.15],
        ['Mixed topic education', 0.13],
        ['Webinars', 0.11],
        ['Others', 0.02],

    ]);
    var formatter = new google.visualization.NumberFormat({ pattern:'#.#%' });
    formatter.format(data, 1);


    mydiv = $("#google-column-bar-chart");
    chart = new google.visualization.ComboChart(mydiv[0]);
    chart.draw(data, {
         height: 300, seriesType: 'bars',
        legend: {position: 'none'},
        bar: {groupWidth: "55%"},
        vAxis: {format: "#.#%"},
        vAxis:{gridlines: {count: 0}},
        chartArea: {left: 60, top: 30, width: 650},
        focusTarget: 'category',
        colors:['#5bbbff']

    });

    /* Here comes the hack!
    We're going to add a svg text element to each column bar.
    This code will work for this data setup only. If you add/remove a series, this code must be adapted
    */
    rects = mydiv.find('svg > g > g > g > rect');
    var row = 0;
    for (i = 0; i < rects.length; i++) {
        // this selector also retrieves gridlines
        // we're excluding them by height
        el = $(rects[i]);
        if (parseFloat(el.attr("height")) <= 2) { continue; }
        aparent = el.parent();
        do { // skips 'null' values
            text = data.getValue(row++, 1);
        } while (text == null && row < data.getNumberOfRows());

        if (text) {
            text = formatter.formatValue(text);
            // see below
            pos = getElementPos(el);
            attrs = {x: pos.x + pos.width / 2, y: pos.y - 10,
                     fill: 'black', 'font-family': 'Arial', 'font-size': 13, 'text-anchor': 'middle'};
            aparent.append(addTextNode(attrs, text, aparent));
        }
    }
}

google.load('visualization', '1', {packages: ['corechart']});
google.setOnLoadCallback(drawVisualization);

function getElementPos($el) {
    // returns an object with the element position
    return {
        x: parseFloat($el.attr("x")),
        width: parseFloat($el.attr("width")),
        y: parseFloat($el.attr("y")),
        height: parseFloat($el.attr("height"))
    }
}

function addTextNode(attrs, text, _element) {
    // creates an svg text node
  var el = document.createElementNS('http://www.w3.org/2000/svg', "text");
  for (var k in attrs) { el.setAttribute(k, attrs[k]); }
  var textNode = document.createTextNode(text);
  el.appendChild(textNode);
  return el;
}
    /* Google Column chart end */

//var googleStackedChart = function() {
  google.load("visualization", "1", {packages:["corechart"]});
  google.setOnLoadCallback(drawGoogleStackedChart);
  function drawGoogleStackedChart() {
    // jQuery(window).resize(function(){
    //   drawGoogleStackedChart();
    // });
  var data = google.visualization.arrayToDataTable([
   ['B_UNIT', 'Cardiovascular', 'Asthama', 'CNS', 'Oncology',
       'Diabetes',  { role: 'annotation' } ],
      ['PEI', 10, 25, 45, 25, 18, ''],
      ['NFLD', 15, 35, 55, 45, 16, ''],
      ['NB', 20, 45, 65, 65, 55,  ''],
      ['NS', 25, 55, 75, 85, 65, ''],
      ['MB', 30, 65, 85, 102, 85, ''],
      ['SASK',35, 75, 95, 125, 96,  ''],
      ['BC', 40, 85, 105, 155, 99, ''],
      ['AB', 45, 95, 115, 185, 105, ''],
      ['OC', 50, 100, 125, 190, 115, ''],
      ['ON', 55, 105, 135, 200, 125,  ''],

    ]);
    var view = new google.visualization.DataView(data);


    var options = {

      height: 300,
      legend: { position: 'top', maxLines: 3 },
      bar: { groupWidth: '85%' },
      colors: ['#7A92A3','#0B62A4','#2DAAE1','#002840','#3C5B9B'],
      isStacked: true,
    };
    var chart = new google.visualization.ColumnChart(document.getElementById("google-stacked-chart"));
    chart.draw(view, options);
  }
//}
//var googleHorizontalStackedChart = function() {
  google.load("visualization", "1", {packages:["corechart"]});
  google.setOnLoadCallback(drawGoogleHorizontalStackedChart);
  function drawGoogleHorizontalStackedChart() {

    var data = google.visualization.arrayToDataTable([
            ['Meetings', 'Total Programs', 'Evaluation', { role: 'annotation' } ],
            ['Adding Meal-Time Insulin to Basal Insulin', 7, 10, ''],
            ['Different Pokes for Different Folks', 4, 22,  ''],
            ['Endocrine Emergencies', 4, 19,  ''],
            ['From Sliding Scale to Basal Bolus', 2, 40,  ''],
            ['Insulin Empowerment Program', 5, 20,  ''],
            ['Insulinothérapie: Mise à jour pour les infirmières en milieu ', 2, 30,  ''],
            ['Lapproche motivationelle chez le patient diabetique', 2, 70,  ''],
            ['La transition des patients DT1 en milieu adulte: Un cheminement', 1, 50,  ''],
            ['le traitement du diabète chez la personne âgée', 1, 12,  ''],
            ['Lignes directrices de pratique clinique 2013 de lACD: vole...', 1, 42,  ''],
            ['Passer à un régime basal-prandial : Parcourir le labyrinthe de l...', 3, 32,  ''],
            ['Practical Management of Diabetes in the Elderly', 3, 12,  ''],
            ['Premix Insulin and Type 2 Diabetes', 2, 12,  '']

    ]);

        var view = new google.visualization.DataView(data);


        var options = {
          height: 270,
          legend: { position: 'top', maxLines: 3 },
          bar: { groupWidth: '65%' },
          colors: ['#7A92A3','#0B62A4'],
          isStacked: true,

        };
        var chart = new google.visualization.BarChart(document.getElementById("google-stacked-chart-diabetes"));
        chart.draw(view, options);
    }

    google.load("visualization", "1", {packages:["corechart"]});
    google.setOnLoadCallback(drawGoogleHorizontalStackedChartDiabetesAccr);
    function drawGoogleHorizontalStackedChartDiabetesAccr() {

    var data = google.visualization.arrayToDataTable([
            ['Meetings', 'Total Programs', 'Evaluation', { role: 'annotation' } ],
            ['Adding Meal-Time Insulin to Basal Insulin', 7, 10, ''],
            ['Different Pokes for Different Folks', 4, 22,  ''],
            ['Endocrine Emergencies', 4, 19,  ''],
            ['From Sliding Scale to Basal Bolus', 2, 40,  ''],
            ['Insulin Empowerment Program', 5, 20,  ''],
            ['Insulinothérapie: Mise à jour pour les infirmières en milieu ', 2, 30,  ''],
            ['Lapproche motivationelle chez le patient diabetique', 2, 70,  ''],
            ['La transition des patients DT1 en milieu adulte: Un cheminement', 1, 50,  ''],
            ['le traitement du diabète chez la personne âgée', 1, 12,  '']

    ]);

        var view = new google.visualization.DataView(data);


        var options = {
          height: 270,
          legend: { position: 'top', maxLines: 3 },
          bar: { groupWidth: '65%' },
          colors: ['#7A92A3','#0B62A4'],
          isStacked: true,

        };
        var chart = new google.visualization.BarChart(document.getElementById("google-stacked-chart-diabetes-acc"));
        chart.draw(view, options);
    }

    google.load("visualization", "1", {packages:["corechart"]});
    google.setOnLoadCallback(drawGoogleHorizontalStackedChartDiabetesNonAccr);
    function drawGoogleHorizontalStackedChartDiabetesNonAccr() {
    var data = google.visualization.arrayToDataTable([
      ['Meetings', 'Total Programs', 'Evaluation', { role: 'annotation' } ],
      ['Lignes directrices de pratique clinique 2013 de lACD: vole...', 1, 42,  ''],
      ['Passer à un régime basal-prandial : Parcourir le labyrinthe de l...', 3, 32,  ''],
      ['Practical Management of Diabetes in the Elderly', 3, 12,  ''],
      ['Premix Insulin and Type 2 Diabetes', 2, 12,  '']



    ]);


        var view = new google.visualization.DataView(data);


        var options = {
          height: 270,
          legend: { position: 'top', maxLines: 3 },
          bar: { groupWidth: '65%' },
          colors: ['#7A92A3','#0B62A4'],
          isStacked: true,

        };
        var chart = new google.visualization.BarChart(document.getElementById("google-stacked-chart-diabetes-non-accr"));
        chart.draw(view, options);
//}
    }


}

