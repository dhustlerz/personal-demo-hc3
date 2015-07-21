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

	var startChart1 = function() {
		/*These lines are all chart setup.  Pick and choose which chart features you want to utilize. */
		nv.addGraph(function() {
			var chart = nv.models.lineChart().margin({
				left : 100
			})//Adjust chart margins to give the x-axis some breathing room.
			.useInteractiveGuideline(true)//We want nice looking tooltips and a guideline!
			.transitionDuration(350)//how fast do you want the lines to transition?
			.showLegend(true)//Show the legend, allowing users to turn on/off line series.
			.showYAxis(true)//Show the y-axis
			.showXAxis(true)//Show the x-axis
			.color(d3.scale.myColors().range());;

			chart.xAxis//Chart x-axis settings
			.axisLabel('Time (ms)').tickFormat(d3.format(',r'));

			chart.yAxis//Chart y-axis settings
			.axisLabel('Voltage (v)').tickFormat(d3.format('.02f'));

			/* Done setting the chart up? Time to render it!*/
			var myData = sinAndCos();
			//You need data...

			d3.select('#chart-1 svg')//Select the <svg> element you want to render the chart in.
			.datum(myData)//Populate the <svg> element with chart data...
			.call(chart);
			//Finally, render the chart!

			//Update the chart when window resizes.
			nv.utils.windowResize(function() {
                            chart.update();
			});
			return chart;
		});

		/**************************************
		 * Simple test data generator
		 */
		function sinAndCos() {
			var sin = [], sin2 = [], cos = [];

			//Data is represented as an array of {x,y} pairs.
			for (var i = 0; i < 100; i++) {
				sin.push({
					x : i,
					y : Math.sin(i / 10)
				});
				sin2.push({
					x : i,
					y : Math.sin(i / 10) * 0.25 + 0.5
				});
				cos.push({
					x : i,
					y : .5 * Math.cos(i / 10)
				});
			}

			//Line chart data should be sent as an array of series objects.
			return [{
				values : sin, //values - represents the array of {x,y} data points
				key : 'Sine Wave' //key  - the name of the series.
			}, {
				values : cos,
				key : 'Cosine Wave'
			}, {
				values : sin2,
				key : 'Another sine wave',
				area : true //area - set to true if you want this line to turn into a filled area chart.
			}];
		}

	};
	var startChart2 = function() {
		nv.addGraph(function() {
			var chart = nv.models.scatterChart().showDistX(true)//showDist, when true, will display those little distribution lines on the axis.
			.showDistY(true).transitionDuration(350).color(d3.scale.myColors().range());;

			//Configure how the tooltip looks.
			chart.tooltipContent(function(key) {
                            return '<h3>' + key + '</h3>';
			});

			//Axis settings
			chart.xAxis.tickFormat(d3.format('.02f'));
			chart.yAxis.tickFormat(d3.format('.02f'));

			//We want to show shapes other than circles.
			chart.scatter.onlyCircles(false);

			var myData = randomData(4, 40);
			d3.select('#chart-2 svg').datum(myData).call(chart);

			nv.utils.windowResize(chart.update);

			return chart;
		});

		/**************************************
		 * Simple test data generator
		 */
		function randomData(groups, points) {//# groups,# points per group
			var data = [], shapes = ['circle', 'cross', 'triangle-up', 'triangle-down', 'diamond', 'square'], random = d3.random.normal();

			for ( var i = 0; i < groups; i++) {
				data.push({
					key : 'Group ' + i,
					values : []
				});

				for ( var j = 0; j < points; j++) {
					data[i].values.push({
						x : random(),
						y : random(),
						size : Math.random()//Configure the size of each scatter point
						,
						shape : (Math.random() > 0.95) ? shapes[j % 6] : "circle" //Configure the shape of each scatter point.
					});
				}
			}

			return data;
		}

	};
	var startChart3 = function() {

		d3.json('assets/plugins/nvd3/stackedAreaData.json', function(data) {
			nv.addGraph(function() {

				var chart = nv.models.stackedAreaChart().margin({
					top : 30,
					right : 10,
					bottom : 20,
					left : 25
				}).x(function(d) {
					return d[0];
				}).y(function(d) {
					return d[1];
				}).forceY([0, 8000]).useInteractiveGuideline(true).color(d3.scale.myColors().range());;
				var options = {
					showControls : false,
					showLegend : true
				};
				chart.options(options);
				chart.xAxis.tickFormat(function(d) {
					return d3.time.format('%x')(new Date(d));
				}).showMaxMin(false);

				chart.yAxis.tickFormat(d3.format(',f'));
				d3.select('#chart-3 svg').datum(data).call(chart);

				nv.utils.windowResize(chart.update);

				return chart;
			});
		});
	};
	var startChart4 = function() {
		nv.addGraph(function() {
			var chart = nv.models.discreteBarChart().x(function(d) {
				return d.label;
			})//Specify the data accessors.
			.y(function(d) {
				return d.value;
			}).staggerLabels(true)//Too many bars and not enough room? Try staggering labels.
			.tooltips(false)//Don't show tooltips
			.showValues(true)//...instead, show the bar value right on top of each bar.
			.transitionDuration(350)
                        .color(d3.scale.myColors().range());;

			d3.select('#chart-4 svg').datum(exampleData()).call(chart);

			nv.utils.windowResize(chart.update);

			return chart;
		});

		//Each bar represents a single discrete quantity.
		function exampleData() {
			return [{
				key : "Cumulative Return",
				values : [{
					"label" : "A Label",
					"value" : -29.765957771107
				}, {
					"label" : "B Label",
					"value" : 0
				}, {
					"label" : "C Label",
					"value" : 32.807804682612
				}, {
					"label" : "D Label",
					"value" : 196.45946739256
				}, {
					"label" : "E Label",
					"value" : 0.19434030906893
				}, {
					"label" : "F Label",
					"value" : -98.079782601442
				}, {
					"label" : "G Label",
					"value" : -13.925743130903
				}, {
					"label" : "H Label",
					"value" : -5.1387322875705
				}]
			}];

		}

	};

	var startChart5 = function() {
		d3.json('assets/plugins/nvd3/multiBarHorizontalData.json', function(data) {
			nv.addGraph(function() {
				/*
			   * Chart one start
				 */
				var chart1 = nv.models.multiBarHorizontalChart()

				.x(function(d) {return d.label;})
				.y(function(d) {return d.value;})

				.margin({
					top : 30,
					right : 20,
					bottom : 50,
					left :100
				}).showValues(true)//Show bar value next to each bar.
				.tooltips(true)//Show tooltips on hover.

				.transitionDuration(350)
        .showControls(false)
        .color(['#aec7e8', '#7b94b5'])
        .stacked(false);
				//Allow user to switch between "Grouped" and "Stacked" mode.

				chart1.yAxis.tickFormat(d3.format(',f'));
				/*
			   * Chart one ends
				 */
				 /*----------------------------------------------------------------------------------*/
				 /*
			    * Chart two start
				  */
				var chart2 = nv.models.multiBarHorizontalChart()

				.x(function(d) {return d.label2;})
				.y(function(d) {return d.value2;})

				.margin({
					top : 30,
					right : 20,
					bottom : 50,
					left :100
				}).showValues(true)//Show bar value next to each bar.
				.tooltips(true)//Show tooltips on hover.

				.transitionDuration(350)
        .showControls(false)
        .color(['#aec7e8', '#7b94b5'])
        .stacked(true);
				//Allow user to switch between "Grouped" and "Stacked" mode.


				chart2.yAxis.tickFormat(d3.format(','));
				/*
			   * Chart two ends
				 */
				  /*----------------------------------------------------------------------------------*/
			 /*
		    * Chart three start
			  */
				var chart3 = nv.models.multiBarHorizontalChart()

				.x(function(d) {return d.x;})
				.y(function(d) {return d.y;})

				.margin({
					top : 40,
					right : 20,
					bottom : 50,
					left :150
				}).showValues(true)//Show bar value next to each bar.
				.tooltips(true)//Show tooltips on hover.

				.transitionDuration(350)
        .showControls(false)
        .color(['#aec7e8', '#7b94b5'])
        .stacked(false);
				//Allow user to switch between "Grouped" and "Stacked" mode.


				chart3.yAxis.tickFormat(d3.format(','));
				/*
				 * Chart three ends
				 */
				/*----------------------------------------------------------------------------------*/
				/*
				 * Chart Four start
				 */
				var chart4 = nv.models.multiBarHorizontalChart()

				.x(function(d) {return d.x;})
				.y(function(d) {return d.y;})

				.margin({
					top : 40,
					right : 20,
					bottom : 50,
					left :150
				}).showValues(true)//Show bar value next to each bar.
				.tooltips(true)//Show tooltips on hover.

				.transitionDuration(350)
        .showControls(false)
        .color(['#aec7e8', '#7b94b5'])

        //Allow user to switch between "Grouped" and "Stacked" mode.
        .stacked(false);
				chart4.yAxis.tickFormat(d3.format(','));
				/*
			   * Chart Four ends
				 */

				d3.select('#chart-5 svg').datum(data[0].data1).call(chart1);

				//Define the Potential impact of new approaches to patient care, as proposed by the latest clinical trials

				d3.select('#chart-5pt2 svg').datum(data[2].data3).call(chart4);

				//

				d3.select('#chart-5pt4 svg').datum(data[1].data2).call(chart2);

				// Summarize the key trials / trial outcome that were presented ASH 2014 from the Canadian Oncology Pharmacist perspective

				d3.select('#chart-5pt3 svg').datum(data[2].data3).call(chart3);


				//return chart;
			});
		});
	  // jQuery(window).resize(function(){
   //  	startChart5();
   //  });
	};

	// var startChartTest = function() {

	// 	var chart = nv.models.multiBarHorizontalChart();
	// 	d3.select('#chart-test svg').datum([
	// 	  {
	// 	    key: "S1",
	// 	    visible: true,
	// 	    color: "#5bbbff",
	// 	    values:
	// 	       [
 //          {
 //            "x" : "I am Not interested" ,
 //            "y" : 60
 //          } ,
 //          {
 //            "x" : "I see the need but..." ,
 //            "y" : 80
 //          } ,
 //          {
 //            "x" : "I would like to learn more" ,
 //            "y" : 90
 //          } ,
 //          {
 //            "x" : "I am ready to do this" ,
 //            "y" : 70
 //          } ,
 //          {
 //            "x" : "I do this consistently" ,
 //            "y" : 50
 //          }

 //        ]
	// 	  },
	// 	  {
	// 	    key: "S2",
	// 	    color: "#003459",
	// 	    visible: false,
	// 	    values:
	// 	     [
 //          {
 //            "x" : "I am Not interested" ,
 //            "y" : 100
 //          } ,
 //          {
 //            "x" : "I see the need but..." ,
 //            "y" : 90
 //          } ,
 //          {
 //            "x" : "I would like to learn more" ,
 //            "y" : 95
 //          } ,
 //          {
 //            "x" : "I am ready to do this" ,
 //            "y" : 85
 //          } ,
 //          {
 //            "x" : "I do this consistently" ,
 //            "y" : 70
 //          }

 //        ]
	// 	  }
	// 	]).transition().duration(500)

	// 	    .call(chart)

	// 	    .each("end", function() {
	// 	        d3.select("g.nv-legendWrap").selectAll("g.nv-series")
	// 	            .filter(function(data) { return data.visible == false; })
	// 	            .each(function(data) {
	// 	                this.dispatchEvent(new Event("click"));
	// 	            });
	// 	    });


	//}
	var startChart6 = function() {
		d3.json("assets/plugins/nvd3/linePlusBarData.json", function(error, data) {
			nv.addGraph(function() {
				var chart = nv.models.linePlusBarChart().margin({
					top : 30,
					right : 60,
					bottom : 50,
					left : 70
				})
				//We can set x data accessor to use index. Reason? So the bars all appear evenly spaced.
				.x(function(d, i) {
					return i;
				}).y(function(d, i) {
					return d[1];
				}).color(d3.scale.myColors().range());


				chart.xAxis.tickFormat(function(d) {
					var dx = data[0].values[d] && data[0].values[d][0] || 0;
					return d3.time.format('%x')(new Date(dx));
				});

				chart.y1Axis.tickFormat(d3.format(',f'));

				chart.y2Axis.tickFormat(function(d) {
					return '$' + d3.format(',f')(d);
				});

				chart.bars.forceY([0]);

				d3.select('#chart-6 svg').datum(data).transition().duration(0).call(chart);

				nv.utils.windowResize(chart.update);

				return chart;
			});

		});

	};
	var startChart7 = function() {
		d3.json('assets/plugins/nvd3/cumulativeLineData.json', function(data) {
			nv.addGraph(function() {
				var chart = nv.models.cumulativeLineChart().x(function(d) {
					return d[0];
				}).y(function(d) {
					return d[1] / 100;
				})//adjusting, 100% is 1.00, not 100 as it is in the data
				.color(d3.scale.myColors().range()).useInteractiveGuideline(true);

				chart.xAxis.tickValues([1078030800000, 1122782400000, 1167541200000, 1251691200000]).tickFormat(function(d) {
					return d3.time.format('%x')(new Date(d));
				});

				chart.yAxis.tickFormat(d3.format(',.1%'));

				d3.select('#chart-7 svg').datum(data).call(chart);

				//TODO: Figure out a good way to do this automatically
				nv.utils.windowResize(chart.update);

				return chart;
			});
		});

	};
	var startChart8 = function() {
		nv.addGraph(function() {
			var chart = nv.models.lineWithFocusChart().color(d3.scale.myColors().range());;

			chart.xAxis.tickFormat(d3.format(',f'));

			chart.yAxis.tickFormat(d3.format(',.2f'));

			chart.y2Axis.tickFormat(d3.format(',.2f'));

			d3.select('#chart-8 svg').datum(testData()).transition().duration(500).call(chart);

			nv.utils.windowResize(chart.update);

			return chart;
		});
		/**************************************
		 * Simple test data generator
		 */

		function testData() {
			return stream_layers(3, 128, .1).map(function(data, i) {
				return {
					key : 'Stream' + i,
					values : data
				};
			});
		}

	};
	var startChart9 = function() {
		//Regular pie chart example
		nv.addGraph(function() {
			myColors = ["#5bbbff", "#cae9ff", "#005fa3"];
			var tooltip = function(key, y, e, graph) {
        return '<h3>' + key + '</h3>' +
               '<p>' +  y + ' % </p>'
      }
	    d3.scale.myColors = function() {
	    	return d3.scale.ordinal().range(myColors);
	    };
			var chart = nv.models.pieChart()
			.x(function(d) {return d.label;})
			.y(function(d) {return d.value;})
			.tooltips(false)        //Don't show tooltips
			//.showLabels(true)
      .labelType("percent")
			.showLabels(true).color(d3.scale.myColors().range());

			d3.select("#chart-9 svg").datum(exampleDataPie()).transition().duration(350).call(chart);
			d3.select("#chart-9-diabetes svg").datum(exampleDataPieDiabetes()).transition().duration(350).call(chart);

			return chart;

		});

		//Donut chart example
		nv.addGraph(function() {
		var myColors = ["#5bbbff", "#cae9ff", "#005fa3"];
	    d3.scale.myColors = function() {
	    	return d3.scale.ordinal().range(myColors);
	    };
  var chart = nv.models.pieChart()
      .x(function(d) { return d.label })
      .y(function(d) { return d.value })
      .showLabels(true)
      .labelType("percent")
      .tooltips(false)        //Don't show tooltips
      .donut(true)          //Turn on Donut mode. Makes pie chart look tasty!
      .donutRatio(0.55)     //Configure how big you want the donut hole size to be.
      .showLabels(true).color(d3.scale.myColors().range());

			d3.select("#chart-10 svg").datum(exampleDataDonut()).transition().duration(350).call(chart);
			d3.select("#chart-10-diabetes svg").datum(exampleDataDonutDiabetes()).transition().duration(350).call(chart);

			return chart;
		});

	var startChart11 = function() {
		d3.json('assets/plugins/nvd3/multiBarHorizontalData.json', function(data) {
			nv.addGraph(function() {
				var chart = nv.models.multiBarHorizontalChart()

				.x(function(d) {return d.label;})
				.y(function(d) {return d.value;})

				.margin({
					top : 30,
					right : 20,
					bottom : 50,
					left :100
				}).showValues(true)//Show bar value next to each bar.
				.tooltips(true)//Show tooltips on hover.

				.transitionDuration(350)
        .showControls(false)
        .color(['#aec7e8', '#7b94b5'])
        .stacked(true);
				//Allow user to switch between "Grouped" and "Stacked" mode.

				chart.yAxis.tickFormat(d3.format(',f'));

				d3.select('#chart-11 svg').datum(data).call(chart).data(stackedData);

				nv.utils.windowResize(chart.update);

				return chart;
			});
		});


	};
/*jQuery(window).resize(function(){
    	startChart9();

    });*/
		//Pie chart example data. Note how there is only a single array of key-value pairs.
		function exampleDataDonut() {
			return  [
      {
        "label": "OLA",
        "value" : 20
      } ,

      {
        "label": "HCP initiated",
        "value" : 50
      } ,
      {
        "label": "Others",
        "value" : 30
      }];
		}
		function exampleDataDonutDiabetes() {
			return  [
      {
        "label": "OLA",
        "value" : 50
      } ,

      {
        "label": "HCP initiated",
        "value" : 39
      } ,
      {
        "label": "Others",
        "value" : 11
      }];
		}
		function exampleDataPie() {
			return  [
      {
        "label": "CFPC",
        "value" : 81
      } ,

      {
        "label": "FMOQ",
        "value" : 12.4
      } ,
      {
        "label": "Main Pro c",
        "value" : 10
      }];
		}


	function exampleDataPieDiabetes() {
			return  [
      {
        "label": "CFPC",
        "value" : 62.5
      } ,

      {
        "label": "FMOQ",
        "value" : 25
      } ,
      {
        "label": "Main Pro c",
        "value" : 12.5
      }];
		}

	};

	function stream_layers(n, m, o) {
		if (arguments.length < 3)
			o = 0;
		function bump(a) {
			var x = 1 / (.1 + Math.random()), y = 2 * Math.random() - .5, z = 10 / (.1 + Math.random());
			for (var i = 0; i < m; i++) {
				var w = (i / m - y) * z;
				a[i] += x * Math.exp(-w * w);
			}
		}

		return d3.range(n).map(function() {
			var a = [], i;
			for ( i = 0; i < m; i++)
				a[i] = o + o * Math.random();
			for ( i = 0; i < 5; i++)
				bump(a);
			return a.map(stream_index);
		});
	}

	function stream_index(d, i) {
		return {
			x : i,
			y : Math.max(0, d)
		};
	}

	return {
		init : function() {
			startChart1();
			startChart2();
			startChart3();
			startChart4();
			startChart5();
			startChart6();
			startChart7();
			startChart8();
			startChart9();

		}
	};

}();

nvd3Charts.init();
