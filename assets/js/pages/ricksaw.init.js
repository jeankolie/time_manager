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
/******/ 	return __webpack_require__(__webpack_require__.s = 32);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/pages/ricksaw.init.js":
/*!********************************************!*\
  !*** ./resources/js/pages/ricksaw.init.js ***!
  \********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

/*
Template Name: Ubold - Responsive Bootstrap 4 Admin Dashboard
Author: CoderThemes
Version: 3.0.0
Website: https://coderthemes.com/
Contact: support@coderthemes.com
File: Ricksaw chart init js
*/
!function ($) {
  "use strict";

  var RickshawChart = function RickshawChart() {
    this.$body = $("body");
  }; //creates area graph


  RickshawChart.prototype.createAreaGraph = function (selector, seriesData, random, colors, labels) {
    var areaGraph = new Rickshaw.Graph({
      element: document.querySelector(selector),
      renderer: 'area',
      stroke: true,
      height: 250,
      preserve: true,
      series: [{
        color: colors[0],
        data: seriesData[0],
        name: labels[0]
      }, {
        color: colors[1],
        data: seriesData[1],
        name: labels[1]
      }]
    });
    areaGraph.render();
    setInterval(function () {
      random.removeData(seriesData);
      random.addData(seriesData);
      areaGraph.update();
    }, 700);
    $(window).resize(function () {
      areaGraph.render();
    });
  }, RickshawChart.prototype.createSimpleareaGraph = function (selector, simpleAdata, colors) {
    var Simplearea = new Rickshaw.Graph({
      element: document.querySelector(selector),
      renderer: 'area',
      stroke: true,
      series: [{
        data: simpleAdata,
        color: colors[0]
      }]
    });
    Simplearea.render();
  }, RickshawChart.prototype.createMultipleareaGraph = function (selector, multipleAdata1, multipleAdata2, colors) {
    var Multiplearea = new Rickshaw.Graph({
      element: document.querySelector(selector),
      renderer: 'area',
      stroke: true,
      series: [{
        data: multipleAdata1,
        color: colors[0],
        border: 0
      }, {
        data: multipleAdata2,
        color: colors[1]
      }]
    });
    Multiplearea.render();
  }, RickshawChart.prototype.createLinetoggleGraph = function (selector, height, colors, names) {
    // set up our data series with 50 random data points
    var seriesData = [[], [], []];
    var random = new Rickshaw.Fixtures.RandomData(150);

    for (var i = 0; i < 150; i++) {
      random.addData(seriesData);
    } // instantiate our graph!


    var graph = new Rickshaw.Graph({
      element: document.getElementById(selector),
      height: height,
      renderer: 'line',
      series: [{
        color: colors[0],
        data: seriesData[0],
        name: names[0]
      }, {
        color: colors[1],
        data: seriesData[1],
        name: names[1]
      }, {
        color: colors[2],
        data: seriesData[2],
        name: names[2]
      }]
    });
    graph.render();
    var hoverDetail = new Rickshaw.Graph.HoverDetail({
      graph: graph,
      formatter: function formatter(series, x, y) {
        var date = '<span class="date">' + new Date(x * 1000).toUTCString() + '</span>';
        var swatch = '<span class="detail_swatch" style="background-color: #000' + series.color + '"></span>';
        var content = swatch + series.name + ": " + parseInt(y) + '<br>' + date;
        return content;
      }
    });
  }, RickshawChart.prototype.createLinePlotGraph = function (selector, colors, names) {
    var graph = new Rickshaw.Graph({
      element: document.getElementById(selector),
      renderer: 'lineplot',
      padding: {
        top: 0.1
      },
      series: [{
        data: [{
          x: 0,
          y: 40
        }, {
          x: 1,
          y: 49
        }, {
          x: 2,
          y: 38
        }, {
          x: 3,
          y: 30
        }, {
          x: 4,
          y: 32
        }],
        color: colors[0],
        name: names[0]
      }, {
        data: [{
          x: 0,
          y: 19
        }, {
          x: 1,
          y: 22
        }, {
          x: 2,
          y: 32
        }, {
          x: 3,
          y: 20
        }, {
          x: 4,
          y: 21
        }],
        color: colors[1],
        name: names[1]
      }]
    });
    var hover = new Rickshaw.Graph.HoverDetail({
      graph: graph
    });
    graph.render();
  }, RickshawChart.prototype.createMultiGraph = function (selector, height, names, colors) {
    var seriesData = [[], [], [], [], []];
    var random = new Rickshaw.Fixtures.RandomData(50);

    for (var i = 0; i < 75; i++) {
      random.addData(seriesData);
    }

    var graph = new Rickshaw.Graph({
      element: document.getElementById(selector),
      renderer: 'multi',
      height: height,
      dotSize: 5,
      series: [{
        name: names[0],
        data: seriesData.shift(),
        color: colors[0],
        renderer: 'stack'
      }, {
        name: names[1],
        data: seriesData.shift(),
        color: colors[1],
        renderer: 'stack'
      }, {
        name: names[2],
        data: seriesData.shift(),
        color: colors[2],
        renderer: 'scatterplot'
      }, {
        name: names[3],
        data: seriesData.shift().map(function (d) {
          return {
            x: d.x,
            y: d.y / 4
          };
        }),
        color: colors[3],
        renderer: 'bar'
      }, {
        name: names[4],
        data: seriesData.shift().map(function (d) {
          return {
            x: d.x,
            y: d.y * 1.5
          };
        }),
        color: colors[4],
        renderer: 'line'
      }]
    });
    graph.render();
    var detail = new Rickshaw.Graph.HoverDetail({
      graph: graph
    });
    var legend = new Rickshaw.Graph.Legend({
      graph: graph,
      element: document.querySelector('#legend')
    });
    var highlighter = new Rickshaw.Graph.Behavior.Series.Highlight({
      graph: graph,
      legend: legend,
      disabledColor: function disabledColor() {
        return '#ddd';
      }
    });
    var highlighter = new Rickshaw.Graph.Behavior.Series.Toggle({
      graph: graph,
      legend: legend
    });
  }, //initializing various charts and components
  RickshawChart.prototype.init = function () {
    //live statics
    var seriesData = [[], [], [], [], [], [], [], [], []];
    var random = new Rickshaw.Fixtures.RandomData(200);

    for (var i = 0; i < 100; i++) {
      random.addData(seriesData);
    } //create live area graph


    var colors = ['#1abc9c', '#f7f7f7'];
    var labels = ['Moscow', 'Shanghai'];
    this.createAreaGraph("#linechart", seriesData, random, colors, labels); //create Simple area graph

    var simpleAdata = [{
      x: 0,
      y: 20
    }, {
      x: 1,
      y: 25
    }, {
      x: 2,
      y: 38
    }, {
      x: 3,
      y: 28
    }, {
      x: 4,
      y: 20
    }];
    var simpleAcolors = ['#1abc9c'];
    this.createSimpleareaGraph("#simplearea", simpleAdata, simpleAcolors); //create Multiple area graph

    var multipleAdata1 = [{
      x: 0,
      y: 40
    }, {
      x: 1,
      y: 49
    }, {
      x: 2,
      y: 38
    }, {
      x: 3,
      y: 30
    }, {
      x: 4,
      y: 32
    }];
    var multipleAdata2 = [{
      x: 0,
      y: 40
    }, {
      x: 1,
      y: 49
    }, {
      x: 2,
      y: 38
    }, {
      x: 3,
      y: 30
    }, {
      x: 4,
      y: 32
    }];
    var MultipleAcolors = ['#1abc9c', '#ebeff2'];
    this.createMultipleareaGraph("#multiplearea", multipleAdata1, multipleAdata2, MultipleAcolors); //create Line-Toggle graph

    var height = [250];
    var LineTcolors = ["#1abc9c", "#4a81d4", "#36404a"];
    var names = ['New York', 'London', 'Tokyo'];
    this.createLinetoggleGraph("linetoggle", height, LineTcolors, names); //create Line-plot graph

    var LinePlotcolors = ['#1abc9c', '#4a81d4'];
    var linePnames = ["Bitcoin", "Ethereum"];
    this.createLinePlotGraph("lineplotchart", LinePlotcolors, linePnames); //create Multi graph

    var Multiheight = [250];
    var multinames = ['Temperature', 'Heat index', 'Dewpoint', 'Pop', 'Humidity'];
    var multicolors = ['#1abc9c', '#ebeff2', '#36404a', '#4a81d4', '#fb6d9d'];
    this.createMultiGraph("multichart", Multiheight, multinames, multicolors);
  }, //init dashboard
  $.RickshawChart = new RickshawChart(), $.RickshawChart.Constructor = RickshawChart;
}(window.jQuery), //initializing rickksawChart
function ($) {
  "use strict";

  $.RickshawChart.init();
}(window.jQuery);

/***/ }),

/***/ 32:
/*!**************************************************!*\
  !*** multi ./resources/js/pages/ricksaw.init.js ***!
  \**************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! F:\wamp\www\Ubold\laravel\ubold\resources\js\pages\ricksaw.init.js */"./resources/js/pages/ricksaw.init.js");


/***/ })

/******/ });