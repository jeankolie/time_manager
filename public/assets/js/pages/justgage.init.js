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
/******/ 	return __webpack_require__(__webpack_require__.s = 33);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/pages/justgage.init.js":
/*!*********************************************!*\
  !*** ./resources/js/pages/justgage.init.js ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

/*
Template Name: Ubold - Responsive Bootstrap 4 Admin Dashboard
Author: CoderThemes
Version: 3.0.0
Website: https://coderthemes.com/
Contact: support@coderthemes.com
File: Justgage init js
*/
document.addEventListener("DOMContentLoaded", function (event) {
  var g1, g2, g3, g4, g5, g6, g7, g8;
  var g1 = new JustGage({
    id: "g1",
    value: getRandomInt(0, 100),
    min: 0,
    max: 100,
    title: "Custom Width",
    label: "miles traveled",
    gaugeWidthScale: 0.2,
    levelColors: ["#f1556c", "#f7b84b", "#1abc9c"]
  });
  var g2 = new JustGage({
    id: "g2",
    value: getRandomInt(0, 100),
    min: 0,
    max: 100,
    title: "Custom Shadow",
    label: "",
    levelColors: ["#f1556c", "#f7b84b", "#1abc9c"],
    shadowOpacity: 1,
    shadowSize: 10,
    shadowVerticalOffset: 5
  });
  var g3 = new JustGage({
    id: "g3",
    value: getRandomInt(0, 100),
    min: 0,
    max: 100,
    title: "Custom Colors",
    label: "",
    levelColors: ["#f1556c", "#f7b84b", "#1abc9c"]
  });
  var g4 = new JustGage({
    id: "g4",
    value: getRandomInt(0, 100),
    min: 0,
    max: 100,
    title: "Hide Labels",
    hideMinMax: true,
    levelColors: ["#f1556c", "#f7b84b", "#1abc9c"]
  });
  var g5 = new JustGage({
    id: "g5",
    value: getRandomInt(0, 100),
    min: 0,
    max: 100,
    title: "Animation Type",
    label: "",
    startAnimationTime: 2000,
    startAnimationType: ">",
    refreshAnimationTime: 1000,
    refreshAnimationType: "bounce",
    levelColors: ["#f1556c", "#f7b84b", "#1abc9c"]
  });
  var g6 = new JustGage(_defineProperty({
    id: "g6",
    value: getRandomInt(0, 100),
    min: 0,
    max: 100,
    title: "Minimal",
    label: "",
    hideMinMax: true,
    gaugeColor: "#fff",
    levelColors: ["#000"],
    hideInnerShadow: true,
    startAnimationTime: 1,
    startAnimationType: "linear",
    refreshAnimationTime: 1,
    refreshAnimationType: "linear"
  }, "levelColors", ["#f1556c", "#f7b84b", "#1abc9c"]));
  var g7 = new JustGage({
    id: "g7",
    value: 72,
    min: 0,
    max: 100,
    donut: true,
    gaugeWidthScale: 0.6,
    counter: true,
    hideInnerShadow: true,
    levelColors: ["#f1556c", "#f7b84b", "#1abc9c"]
  });
  var g8 = new JustGage({
    id: "g8",
    value: 72.15,
    min: 0,
    max: 100,
    decimals: 2,
    gaugeWidthScale: 0.6,
    customSectors: [{
      color: "#00ff00",
      lo: 0,
      hi: 50
    }, {
      color: "#ff0000",
      lo: 50,
      hi: 100
    }],
    counter: true
  });
  document.getElementById('g8_refresh').addEventListener('click', function () {
    g8.refresh(getRandomInt(0, 100));
  });
  setInterval(function () {
    g1.refresh(getRandomInt(0, 100));
    g2.refresh(getRandomInt(0, 100));
    g3.refresh(getRandomInt(0, 100));
    g4.refresh(getRandomInt(0, 100));
    g5.refresh(getRandomInt(0, 100));
    g6.refresh(getRandomInt(0, 100));
    g7.refresh(getRandomInt(0, 100));
  }, 2500);
});

/***/ }),

/***/ 33:
/*!***************************************************!*\
  !*** multi ./resources/js/pages/justgage.init.js ***!
  \***************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! F:\wamp\www\Ubold\laravel\ubold\resources\js\pages\justgage.init.js */"./resources/js/pages/justgage.init.js");


/***/ })

/******/ });