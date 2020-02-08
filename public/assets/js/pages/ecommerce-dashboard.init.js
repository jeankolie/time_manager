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
/******/ 	return __webpack_require__(__webpack_require__.s = 10);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/pages/ecommerce-dashboard.init.js":
/*!********************************************************!*\
  !*** ./resources/js/pages/ecommerce-dashboard.init.js ***!
  \********************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

/*
Template Name: Ubold - Responsive Bootstrap 4 Admin Dashboard
Author: CoderThemes
Version: 3.0.0
Website: https://coderthemes.com/
Contact: support@coderthemes.com
File: eCommerce Dashboard
*/
!function ($) {
  "use strict";

  var MorrisCharts = function MorrisCharts() {}; //creates area chart with dotted


  MorrisCharts.prototype.createAreaChartDotted = function (element, pointSize, lineWidth, data, xkey, ykeys, labels, Pfillcolor, Pstockcolor, lineColors) {
    Morris.Area({
      element: element,
      pointSize: 3,
      lineWidth: 2,
      data: data,
      xkey: xkey,
      ykeys: ykeys,
      labels: labels,
      hideHover: 'auto',
      pointFillColors: Pfillcolor,
      pointStrokeColors: Pstockcolor,
      resize: true,
      behaveLikeLine: true,
      fillOpacity: 0.4,
      gridLineColor: '#eef0f2',
      lineColors: lineColors
    });
  }, MorrisCharts.prototype.init = function () {
    //creating area chart with dotted
    var $areaDotData = [{
      y: '2008',
      a: 100,
      b: 90,
      c: 40
    }, {
      y: '2009',
      a: 75,
      b: 65,
      c: 20
    }, {
      y: '2010',
      a: 50,
      b: 40,
      c: 50
    }, {
      y: '2011',
      a: 75,
      b: 65,
      c: 95
    }, {
      y: '2012',
      a: 50,
      b: 40,
      c: 22
    }, {
      y: '2013',
      a: 75,
      b: 65,
      c: 56
    }, {
      y: '2014',
      a: 100,
      b: 90,
      c: 60
    }, {
      y: '2015',
      a: 100,
      b: 90,
      c: 40
    }, {
      y: '2016',
      a: 75,
      b: 65,
      c: 20
    }, {
      y: '2017',
      a: 50,
      b: 40,
      c: 50
    }, {
      y: '2018',
      a: 75,
      b: 65,
      c: 95
    }, {
      y: '2019',
      a: 50,
      b: 40,
      c: 22
    }];
    this.createAreaChartDotted('morris-area-with-dotted', 0, 0, $areaDotData, 'y', ['a', 'b', "c"], ["Desktops", "Tablets", "Mobiles"], ['#ffffff'], ['#999999'], ['#ebeff2', '#f1556c', '#4a81d4']);
  }, //init
  $.MorrisCharts = new MorrisCharts(), $.MorrisCharts.Constructor = MorrisCharts;
}(window.jQuery), //initializing 
function ($) {
  "use strict";

  $.MorrisCharts.init();
}(window.jQuery);

/***/ }),

/***/ 10:
/*!**************************************************************!*\
  !*** multi ./resources/js/pages/ecommerce-dashboard.init.js ***!
  \**************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! F:\wamp\www\Ubold\laravel\ubold\resources\js\pages\ecommerce-dashboard.init.js */"./resources/js/pages/ecommerce-dashboard.init.js");


/***/ })

/******/ });