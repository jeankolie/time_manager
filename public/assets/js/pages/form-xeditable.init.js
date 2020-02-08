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
/******/ 	return __webpack_require__(__webpack_require__.s = 48);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/pages/form-xeditable.init.js":
/*!***************************************************!*\
  !*** ./resources/js/pages/form-xeditable.init.js ***!
  \***************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

/*
Template Name: Ubold - Responsive Bootstrap 4 Admin Dashboard
Author: CoderThemes
Version: 3.0.0
Website: https://coderthemes.com/
Contact: support@coderthemes.com
File: X-editable init js
*/
$(function () {
  //modify buttons style
  $.fn.editableform.buttons = '<button type="submit" class="btn btn-primary editable-submit btn-sm waves-effect waves-light"><i class="mdi mdi-check"></i></button>' + '<button type="button" class="btn btn-danger editable-cancel btn-sm waves-effect"><i class="mdi mdi-close"></i></button>'; //Inline editables

  $('#inline-username').editable({
    type: 'text',
    pk: 1,
    name: 'username',
    title: 'Enter username',
    mode: 'inline',
    inputclass: 'form-control-sm'
  });
  $('#inline-firstname').editable({
    validate: function validate(value) {
      if ($.trim(value) == '') return 'This field is required';
    },
    mode: 'inline',
    inputclass: 'form-control-sm'
  });
  $('#inline-sex').editable({
    prepend: "not selected",
    mode: 'inline',
    inputclass: 'form-control-sm',
    source: [{
      value: 1,
      text: 'Male'
    }, {
      value: 2,
      text: 'Female'
    }],
    display: function display(value, sourceData) {
      var colors = {
        "": "gray",
        1: "green",
        2: "blue"
      },
          elem = $.grep(sourceData, function (o) {
        return o.value == value;
      });

      if (elem.length) {
        $(this).text(elem[0].text).css("color", colors[value]);
      } else {
        $(this).empty();
      }
    }
  });
  $('#inline-group').editable({
    showbuttons: false,
    mode: 'inline',
    inputclass: 'form-control-sm'
  });
  $('#inline-status').editable({
    mode: 'inline',
    inputclass: 'form-control-sm'
  });
  $('#inline-dob').editable({
    mode: 'inline',
    inputclass: 'form-control-sm'
  });
  $('#inline-event').editable({
    placement: 'right',
    mode: 'inline',
    combodate: {
      firstItem: 'name'
    },
    inputclass: 'form-control-sm'
  });
  $('#inline-comments').editable({
    showbuttons: 'bottom',
    mode: 'inline',
    inputclass: 'form-control-sm'
  });
  $('#inline-fruits').editable({
    pk: 1,
    limit: 3,
    mode: 'inline',
    inputclass: 'form-control-sm',
    source: [{
      value: 1,
      text: 'Banana'
    }, {
      value: 2,
      text: 'Peach'
    }, {
      value: 3,
      text: 'Apple'
    }, {
      value: 4,
      text: 'Watermelon'
    }, {
      value: 5,
      text: 'Orange'
    }]
  });
});

/***/ }),

/***/ 48:
/*!*********************************************************!*\
  !*** multi ./resources/js/pages/form-xeditable.init.js ***!
  \*********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! F:\wamp\www\Ubold\laravel\ubold\resources\js\pages\form-xeditable.init.js */"./resources/js/pages/form-xeditable.init.js");


/***/ })

/******/ });