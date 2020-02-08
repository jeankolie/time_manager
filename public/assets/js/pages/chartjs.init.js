/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 25);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/pages/chartjs.init.js":
/*!********************************************!*\
  !*** ./resources/js/pages/chartjs.init.js ***!
  \********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

/*
Template Name: Ubold - Responsive Bootstrap 4 Admin Dashboard
Author: CoderThemes
Version: 3.0.0
Website: https://coderthemes.com/
Contact: support@coderthemes.com
File: Chart js init
*/
!function ($) {
  "use strict";

  var ChartJs = function ChartJs() {
    this.$body = $("body"), this.charts = [];
  };

  ChartJs.prototype.respChart = function (selector, type, data, options) {
    // get selector by context
    var ctx = selector.get(0).getContext("2d"); // pointing parent container to make chart js inherit its width

    var container = $(selector).parent(); // this function produce the responsive Chart JS

    function generateChart() {
      // make chart width fit with its container
      var ww = selector.attr('width', $(container).width());
      var chart;

      switch (type) {
        case 'Line':
          chart = new Chart(ctx, {
            type: 'line',
            data: data,
            options: options
          });
          break;

        case 'Doughnut':
          chart = new Chart(ctx, {
            type: 'doughnut',
            data: data,
            options: options
          });
          break;

        case 'Pie':
          chart = new Chart(ctx, {
            type: 'pie',
            data: data,
            options: options
          });
          break;

        case 'Bar':
          chart = new Chart(ctx, {
            type: 'bar',
            data: data,
            options: options
          });
          break;

        case 'Radar':
          chart = new Chart(ctx, {
            type: 'radar',
            data: data,
            options: options
          });
          break;

        case 'PolarArea':
          chart = new Chart(ctx, {
            data: data,
            type: 'polarArea',
            options: options
          });
          break;
      }

      return chart;
    }

    ; // run function - render chart at first load

    return generateChart();
  }, // init various charts and returns
  ChartJs.prototype.initCharts = function () {
    var charts = [];

    if ($('#line-chart-example').length > 0) {
      var lineChart = {
        labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
        datasets: [{
          label: "Current Week",
          backgroundColor: 'rgba(26, 128, 156, 0.3)',
          borderColor: '#1abc9c',
          data: [32, 42, 42, 62, 52, 75, 62]
        }, {
          label: "Previous Week",
          fill: true,
          backgroundColor: 'transparent',
          borderColor: "#f1556c",
          borderDash: [5, 5],
          data: [42, 58, 66, 93, 82, 105, 92]
        }]
      };
      var lineOpts = {
        maintainAspectRatio: false,
        legend: {
          display: false
        },
        tooltips: {
          intersect: false
        },
        hover: {
          intersect: true
        },
        plugins: {
          filler: {
            propagate: false
          }
        },
        scales: {
          xAxes: [{
            reverse: true,
            gridLines: {
              color: "rgba(0,0,0,0.05)"
            }
          }],
          yAxes: [{
            ticks: {
              stepSize: 20
            },
            display: true,
            borderDash: [5, 5],
            gridLines: {
              color: "rgba(0,0,0,0)",
              fontColor: '#fff'
            }
          }]
        }
      };
      charts.push(this.respChart($("#line-chart-example"), 'Line', lineChart, lineOpts));
    } //barchart


    if ($('#bar-chart-example').length > 0) {
      var barChart = {
        // labels: ["01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12"],
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Sales Analytics",
          backgroundColor: "#4a81d4",
          borderColor: "#4a81d4",
          hoverBackgroundColor: "#4a81d4",
          hoverBorderColor: "#4a81d4",
          data: [65, 59, 80, 81, 56, 89, 40, 32, 65, 59, 80, 81]
        }, {
          label: "Dollar Rate",
          backgroundColor: "#e3eaef",
          borderColor: "#e3eaef",
          hoverBackgroundColor: "#e3eaef",
          hoverBorderColor: "#e3eaef",
          data: [89, 40, 32, 65, 59, 80, 81, 56, 89, 40, 65, 59]
        }]
      };
      var barOpts = {
        maintainAspectRatio: false,
        legend: {
          display: false
        },
        scales: {
          yAxes: [{
            gridLines: {
              display: false
            },
            stacked: false,
            ticks: {
              stepSize: 20
            }
          }],
          xAxes: [{
            barPercentage: 0.7,
            categoryPercentage: 0.5,
            stacked: false,
            gridLines: {
              color: "rgba(0,0,0,0.01)"
            }
          }]
        }
      };
      charts.push(this.respChart($("#bar-chart-example"), 'Bar', barChart, barOpts));
    }

    if ($('#pie-chart-example').length > 0) {
      //pie chart
      var pieChart = {
        labels: ["Direct", "Affilliate", "Sponsored", "E-mail"],
        datasets: [{
          data: [300, 135, 48, 154],
          backgroundColor: ["#6658dd", "#fa5c7c", "#4fc6e1", "#ebeff2"],
          borderColor: "transparent"
        }]
      };
      var pieOpts = {
        maintainAspectRatio: false,
        legend: {
          display: false
        }
      };
      charts.push(this.respChart($("#pie-chart-example"), 'Pie', pieChart, pieOpts));
    }

    if ($('#donut-chart-example').length > 0) {
      //donut chart
      var donutChart = {
        labels: ["Direct", "Affilliate", "Sponsored"],
        datasets: [{
          data: [128, 78, 48],
          backgroundColor: ["#6c757d", "#1abc9c", "#ebeff2"],
          borderColor: "transparent",
          borderWidth: "3"
        }]
      };
      var donutOpts = {
        maintainAspectRatio: false,
        cutoutPercentage: 60,
        legend: {
          display: false
        }
      };
      charts.push(this.respChart($("#donut-chart-example"), 'Doughnut', donutChart, donutOpts));
    }

    if ($('#polar-chart-example').length > 0) {
      //Ploar chart
      var polarChart = {
        labels: ["Direct", "Affilliate", "Sponsored", "E-mail"],
        datasets: [{
          data: [251, 135, 48, 154],
          backgroundColor: ["#4a81d4", "#fa5c7c", "#4fc6e1", "#ebeff2"],
          borderColor: "transparent"
        }]
      };
      charts.push(this.respChart($("#polar-chart-example"), 'PolarArea', polarChart));
    }

    if ($('#radar-chart-example').length > 0) {
      //radar chart
      var radarChart = {
        labels: ["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Cycling", "Running"],
        datasets: [{
          label: "Desktops",
          backgroundColor: "rgba(57,175,209,0.2)",
          borderColor: "#39afd1",
          pointBackgroundColor: "#39afd1",
          pointBorderColor: "#fff",
          pointHoverBackgroundColor: "#fff",
          pointHoverBorderColor: "#39afd1",
          data: [65, 59, 90, 81, 56, 55, 40]
        }, {
          label: "Tablets",
          backgroundColor: "rgba(161, 127, 224,0.2)",
          borderColor: "#a17fe0",
          pointBackgroundColor: "#a17fe0",
          pointBorderColor: "#fff",
          pointHoverBackgroundColor: "#fff",
          pointHoverBorderColor: "#a17fe0",
          data: [28, 48, 40, 19, 96, 27, 100]
        }]
      };
      var radarOpts = {
        maintainAspectRatio: false
      };
      charts.push(this.respChart($("#radar-chart-example"), 'Radar', radarChart, radarOpts));
    }

    return charts;
  }, //initializing various components and plugins
  ChartJs.prototype.init = function () {
    var $this = this; // font

    Chart.defaults.global.defaultFontFamily = '-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif'; // init charts

    $this.charts = this.initCharts(); // enable resizing matter

    $(window).on('resize', function (e) {
      $.each($this.charts, function (index, chart) {
        try {
          chart.destroy();
        } catch (err) {}
      });
      $this.charts = $this.initCharts();
    });
  }, //init flotchart
  $.ChartJs = new ChartJs(), $.ChartJs.Constructor = ChartJs;
}(window.jQuery), //initializing ChartJs
function ($) {
  "use strict";

  $.ChartJs.init();
}(window.jQuery); // Financial Chart - Demo only

function randomNumber(min, max) {
  return Math.random() * (max - min) + min;
}

function randomBar(date, lastClose) {
  var open = randomNumber(lastClose * 0.95, lastClose * 1.05);
  var close = randomNumber(open * 0.95, open * 1.05);
  return {
    t: date.valueOf(),
    y: close
  };
}

var dateFormat = 'MMMM DD YYYY';
var date = moment('April 01 2017', dateFormat);
var data = [randomBar(date, 30)];
var labels = [date];

while (data.length < 24) {
  date = date.clone().add(1, 'd');

  if (date.isoWeekday() <= 5) {
    data.push(randomBar(date, data[data.length - 1].y));
    labels.push(date);
  }
}

var ctx = document.getElementById('financial-report').getContext('2d');
ctx.canvas.width = 1000;
ctx.canvas.height = 300;
var cfg = {
  type: 'bar',
  data: {
    labels: labels,
    datasets: [{
      label: 'CHRT - Chart.js Corporation',
      data: data,
      type: 'line',
      pointRadius: 0,
      fill: false,
      lineTension: 0,
      borderWidth: 2
    }]
  },
  options: {
    scales: {
      xAxes: [{
        type: 'time',
        distribution: 'series',
        ticks: {
          source: 'labels'
        }
      }],
      yAxes: [{
        scaleLabel: {
          display: true,
          labelString: 'Closing price ($)'
        }
      }]
    }
  }
};
var chart = new Chart(ctx, cfg);
document.getElementById('update').addEventListener('click', function () {
  var type = document.getElementById('type').value;
  chart.config.data.datasets[0].type = type;
  chart.update();
});

/***/ }),

/***/ 25:
/*!**************************************************!*\
  !*** multi ./resources/js/pages/chartjs.init.js ***!
  \**************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! F:\wamp\www\Ubold\laravel\ubold\resources\js\pages\chartjs.init.js */"./resources/js/pages/chartjs.init.js");


/***/ })

/******/ });