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
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/pages/dashboard-1.init.js":
/*!************************************************!*\
  !*** ./resources/js/pages/dashboard-1.init.js ***!
  \************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

/*
Template Name: Ubold - Responsive Bootstrap 4 Admin Dashboard
Author: CoderThemes
Version: 3.0.0
Website: https://coderthemes.com/
Contact: support@coderthemes.com
File: Dashboard 1 init
*/
!function ($) {
  "use strict";

  var Dashboard1 = function Dashboard1() {
    this.$body = $("body");
  }; //creates Combine Chart


  Dashboard1.prototype.createCombineGraph = function (selector, ticks, labels, datas) {
    var data = [{
      label: labels[0],
      data: datas[0],
      lines: {
        show: true,
        fill: true
      },
      points: {
        show: true
      }
    }, {
      label: labels[1],
      data: datas[1],
      lines: {
        show: true
      },
      points: {
        show: true
      }
    }, {
      label: labels[2],
      data: datas[2],
      bars: {
        show: true,
        barWidth: 0.7
      }
    }];
    var options = {
      series: {
        shadowSize: 0
      },
      grid: {
        hoverable: true,
        clickable: true,
        tickColor: "#f9f9f9",
        borderWidth: 1,
        borderColor: "#eeeeee"
      },
      colors: ['#e3eaef', '#4a81d4', '#1abc9c'],
      tooltip: true,
      tooltipOpts: {
        defaultTheme: false
      },
      legend: {
        position: "ne",
        margin: [0, -32],
        noColumns: 0,
        labelBoxBorderColor: null,
        labelFormatter: function labelFormatter(label, series) {
          // just add some space to labes
          return '' + label + '&nbsp;&nbsp;';
        },
        width: 30,
        height: 2
      },
      yaxis: {
        axisLabel: "Point Value (1000)",
        tickColor: '#f5f5f5',
        font: {
          color: '#bdbdbd'
        }
      },
      xaxis: {
        axisLabel: "Daily Hours",
        ticks: ticks,
        tickColor: '#f5f5f5',
        font: {
          color: '#bdbdbd'
        }
      }
    };
    $.plot($(selector), data, options);
  }, //initializing various charts and components
  Dashboard1.prototype.init = function () {
    //Combine graph data
    var data24Hours = [[0, 201], [1, 520], [2, 337], [3, 261], [4, 157], [5, 95], [6, 200], [7, 250], [8, 320], [9, 500], [10, 152], [11, 214], [12, 364], [13, 449], [14, 558], [15, 282], [16, 379], [17, 429], [18, 518], [19, 470], [20, 330], [21, 245], [22, 358], [23, 74]];
    var data48Hours = [[0, 311], [1, 630], [2, 447], [3, 371], [4, 267], [5, 205], [6, 310], [7, 360], [8, 430], [9, 610], [10, 262], [11, 324], [12, 474], [13, 559], [14, 668], [15, 392], [16, 489], [17, 539], [18, 628], [19, 580], [20, 440], [21, 355], [22, 468], [23, 184]];
    var dataDifference = [[23, 727], [22, 128], [21, 110], [20, 92], [19, 172], [18, 63], [17, 150], [16, 592], [15, 12], [14, 246], [13, 52], [12, 149], [11, 123], [10, 2], [9, 325], [8, 10], [7, 15], [6, 89], [5, 65], [4, 77], [3, 600], [2, 200], [1, 385], [0, 200]];
    var ticks = [[0, "22h"], [1, ""], [2, "00h"], [3, ""], [4, "02h"], [5, ""], [6, "04h"], [7, ""], [8, "06h"], [9, ""], [10, "08h"], [11, ""], [12, "10h"], [13, ""], [14, "12h"], [15, ""], [16, "14h"], [17, ""], [18, "16h"], [19, ""], [20, "18h"], [21, ""], [22, "20h"], [23, ""]];
    var combinelabels = ["Direct Sales", "Email Marketing", "Marketplaces"];
    var combinedatas = [data24Hours, data48Hours, dataDifference];
    this.createCombineGraph("#sales-analytics", ticks, combinelabels, combinedatas);
  }, //init Dashboard1
  $.Dashboard1 = new Dashboard1(), $.Dashboard1.Constructor = Dashboard1;
}(window.jQuery), //initializing Dashboard1
function ($) {
  "use strict";

  $.Dashboard1.init();
}(window.jQuery); // Datepicker

$('#dash-daterange').flatpickr({
  altInput: true,
  altFormat: "F j, Y",
  dateFormat: "Y-m-d",
  defaultDate: 'today'
});

/***/ }),

/***/ "./resources/scss/app-rtl.scss":
/*!*************************************!*\
  !*** ./resources/scss/app-rtl.scss ***!
  \*************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/scss/app.scss":
/*!*********************************!*\
  !*** ./resources/scss/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/scss/bootstrap.scss":
/*!***************************************!*\
  !*** ./resources/scss/bootstrap.scss ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/scss/icons.scss":
/*!***********************************!*\
  !*** ./resources/scss/icons.scss ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!**************************************************************************************************************************************************************************!*\
  !*** multi ./resources/js/pages/dashboard-1.init.js ./resources/scss/bootstrap.scss ./resources/scss/icons.scss ./resources/scss/app-rtl.scss ./resources/scss/app.scss ***!
  \**************************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! F:\wamp\www\Ubold\laravel\ubold\resources\js\pages\dashboard-1.init.js */"./resources/js/pages/dashboard-1.init.js");
__webpack_require__(/*! F:\wamp\www\Ubold\laravel\ubold\resources\scss\bootstrap.scss */"./resources/scss/bootstrap.scss");
__webpack_require__(/*! F:\wamp\www\Ubold\laravel\ubold\resources\scss\icons.scss */"./resources/scss/icons.scss");
__webpack_require__(/*! F:\wamp\www\Ubold\laravel\ubold\resources\scss\app-rtl.scss */"./resources/scss/app-rtl.scss");
module.exports = __webpack_require__(/*! F:\wamp\www\Ubold\laravel\ubold\resources\scss\app.scss */"./resources/scss/app.scss");


/***/ })

/******/ });