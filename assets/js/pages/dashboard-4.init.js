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
/******/ 	return __webpack_require__(__webpack_require__.s = 3);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/pages/dashboard-4.init.js":
/*!************************************************!*\
  !*** ./resources/js/pages/dashboard-4.init.js ***!
  \************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

/*
Template Name: Ubold - Responsive Bootstrap 4 Admin Dashboard
Author: CoderThemes
Version: 3.0.0
Website: https://coderthemes.com/
Contact: support@coderthemes.com
File: Dashboard 4 init
*/
!function ($) {
  "use strict";

  var Dashboard4 = function Dashboard4() {}; //creates Bar chart


  Dashboard4.prototype.createBarChart = function (element, data, xkey, ykeys, labels, lineColors) {
    Morris.Bar({
      element: element,
      data: data,
      xkey: xkey,
      ykeys: ykeys,
      labels: labels,
      hideHover: 'auto',
      resize: true,
      //defaulted to true
      gridLineColor: '#eeeeee',
      barSizeRatio: 0.2,
      barColors: lineColors
    });
  }, //creates area chart with dotted
  Dashboard4.prototype.createAreaChartDotted = function (element, pointSize, lineWidth, data, xkey, ykeys, labels, Pfillcolor, Pstockcolor, lineColors) {
    Morris.Area({
      element: element,
      pointSize: 3,
      lineWidth: 1,
      data: data,
      xkey: xkey,
      ykeys: ykeys,
      labels: labels,
      hideHover: 'auto',
      pointFillColors: Pfillcolor,
      pointStrokeColors: Pstockcolor,
      resize: true,
      smooth: false,
      gridLineColor: '#eef0f2',
      lineColors: lineColors
    });
  }, //creates Donut chart
  Dashboard4.prototype.createDonutChart = function (element, data, colors) {
    Morris.Donut({
      element: element,
      data: data,
      barSize: 0.2,
      resize: true,
      //defaulted to true
      colors: colors
    });
  }, Dashboard4.prototype.init = function () {
    //creating bar chart
    var $barData = [{
      y: '2012',
      a: 87
    }, {
      y: '2013',
      a: 75
    }, {
      y: '2014',
      a: 50
    }, {
      y: '2015',
      a: 75
    }, {
      y: '2016',
      a: 50
    }, {
      y: '2017',
      a: 38
    }, {
      y: '2018',
      a: 72
    }];
    this.createBarChart('morris-bar-example', $barData, 'y', ['a'], ["Statistics"], ['#02c0ce']); //creating area chart with dotted

    var $areaDotData = [{
      y: '2012',
      a: 10,
      b: 20
    }, {
      y: '2013',
      a: 75,
      b: 65
    }, {
      y: '2014',
      a: 50,
      b: 40
    }, {
      y: '2015',
      a: 75,
      b: 65
    }, {
      y: '2016',
      a: 50,
      b: 40
    }, {
      y: '2017',
      a: 75,
      b: 65
    }, {
      y: '2018',
      a: 90,
      b: 60
    }];
    this.createAreaChartDotted('morris-area-with-dotted', 0, 0, $areaDotData, 'y', ['a', 'b'], ["Bitcoin", "Litecoin"], ['#ffffff'], ['#999999'], ['#4a81d4', "#e3eaef"]); //creating donut chart

    var $donutData = [{
      label: " Total Sales ",
      value: 12
    }, {
      label: " Campaign ",
      value: 30
    }, {
      label: " Daily Sales ",
      value: 20
    }];
    this.createDonutChart('morris-donut-example', $donutData, ['#4fc6e1', '#6658dd', '#ebeff2']);
  }, //init
  $.Dashboard4 = new Dashboard4(), $.Dashboard4.Constructor = Dashboard4;
}(window.jQuery), //initializing 
function ($) {
  "use strict";

  $.Dashboard4.init();
}(window.jQuery);

/***/ }),

/***/ 3:
/*!******************************************************!*\
  !*** multi ./resources/js/pages/dashboard-4.init.js ***!
  \******************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! F:\wamp\www\Ubold\laravel\ubold\resources\js\pages\dashboard-4.init.js */"./resources/js/pages/dashboard-4.init.js");


/***/ })

/******/ });