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
/******/ 	return __webpack_require__(__webpack_require__.s = 7);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/pages/crm-dashboard.init.js":
/*!**************************************************!*\
  !*** ./resources/js/pages/crm-dashboard.init.js ***!
  \**************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

/*
Template Name: Ubold - Responsive Bootstrap 4 Admin Dashboard
Author: CoderThemes
Version: 3.0.0
Website: https://coderthemes.com/
Contact: support@coderthemes.com
File: CRM Dashboard
*/
!function ($) {
  "use strict";

  var CRMDashboard = function CRMDashboard() {}; //creates Bar chart


  CRMDashboard.prototype.createBarChart = function (element, data, xkey, ykeys, labels, lineColors) {
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
      barSizeRatio: 0.4,
      barColors: lineColors
    });
  }, //Line chart
  CRMDashboard.prototype.createLineChart = function (element, data, xkey, ykeys, labels, opacity, Pfillcolor, Pstockcolor, lineColors) {
    Morris.Line({
      element: element,
      data: data,
      xkey: xkey,
      ykeys: ykeys,
      labels: labels,
      fillOpacity: opacity,
      pointFillColors: Pfillcolor,
      pointStrokeColors: Pstockcolor,
      behaveLikeLine: true,
      gridLineColor: '#eef0f2',
      hideHover: 'auto',
      lineWidth: '3px',
      pointSize: 0,
      resize: true,
      //defaulted to true
      lineColors: lineColors
    });
  }, //creates Donut chart
  CRMDashboard.prototype.createDonutChart = function (element, data, colors) {
    Morris.Donut({
      element: element,
      data: data,
      barSize: 0.2,
      resize: true,
      //defaulted to true
      colors: colors
    });
  }, CRMDashboard.prototype.init = function () {
    //creating bar chart
    var $barData = [{
      y: '2012',
      a: 100,
      b: 90
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
      a: 100,
      b: 90
    }];
    this.createBarChart('morris-bar-example', $barData, 'y', ['a', 'b'], ["Won Deal", "Lost Deal"], ['#02c0ce', '#0acf97']); //create line chart

    var $data = [{
      y: '2010',
      a: 50,
      b: 0
    }, {
      y: '2011',
      a: 75,
      b: 50
    }, {
      y: '2012',
      a: 30,
      b: 80
    }, {
      y: '2013',
      a: 50,
      b: 50
    }, {
      y: '2014',
      a: 75,
      b: 10
    }, {
      y: '2015',
      a: 50,
      b: 40
    }, {
      y: '2016',
      a: 75,
      b: 50
    }, {
      y: '2017',
      a: 100,
      b: 70
    }];
    this.createLineChart('deals-analytics', $data, 'y', ['a', 'b'], ["Won Deal", "Lost Deal"], ['0.1'], ['#ffffff'], ['#999999'], ['#1abc9c', '#f1556c']); //creating donut chart

    var $donutData = [{
      label: "Group 1",
      value: 12
    }, {
      label: "Group 2",
      value: 30
    }, {
      label: "Group 3",
      value: 20
    }];
    this.createDonutChart('morris-donut-example', $donutData, ['#4fc6e1', '#6658dd', '#ebeff2']);
  }, //init
  $.CRMDashboard = new CRMDashboard(), $.CRMDashboard.Constructor = CRMDashboard;
}(window.jQuery), //initializing 
function ($) {
  "use strict";

  $.CRMDashboard.init();
}(window.jQuery);

/***/ }),

/***/ 7:
/*!********************************************************!*\
  !*** multi ./resources/js/pages/crm-dashboard.init.js ***!
  \********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! F:\wamp\www\Ubold\laravel\ubold\resources\js\pages\crm-dashboard.init.js */"./resources/js/pages/crm-dashboard.init.js");


/***/ })

/******/ });