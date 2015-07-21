
var morrisCharts = function() {

   var months = ['jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
    Morris.Line({
      element: 'morris-line-example',

      data: [
        { month: '01', a: 50, b: 150 },
        { month: '02', a: 56,  b: 100 },
        { month: '03', a: 47,  b: 80 },
        { month: '04', a: 77,  b: 77 },
        { month: '05', a: 186,  b: 120 },
        { month: '06', a: 185,  b: 210 },
        { month: '07', a: 177, b: 220 }
      ],
      xkey: 'month',
      ykeys: ['a', 'b'],
      labels: ['Accredited', 'Non accredited'],
      resize: true,
      xLabels: 'month',
      lineColors: ['#7A92A3', '#0B62A4'],
      xLabelFormat : function (x) {
        return months[x.getMonth()];
        }
    });


    Morris.Area({
        element: 'morris-area-example',
        data: [
            { y: '2006', a: 100, b: 90 },
            { y: '2007', a: 75,  b: 65 },
            { y: '2008', a: 50,  b: 40 },
            { y: '2009', a: 75,  b: 65 },
            { y: '2010', a: 50,  b: 40 },
            { y: '2011', a: 75,  b: 65 },
            { y: '2012', a: 100, b: 90 }
        ],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['Series A', 'Series B'],
        resize: true,
        lineColors: ['#5bbbff', '#003459']
    });






    Morris.Donut({
        element: 'morris-donut-example',
        data: [
            {label: "Download Sales", value: 12},
            {label: "In-Store Sales", value: 30},
            {label: "Mail-Order Sales", value: 20}
        ],
        colors: ['#95B75D', '#3FBAE4', '#FEA223']
    });

}();

