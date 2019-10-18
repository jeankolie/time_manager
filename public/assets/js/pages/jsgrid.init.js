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
/******/ 	return __webpack_require__(__webpack_require__.s = 39);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/pages/jsgrid.init.js":
/*!*******************************************!*\
  !*** ./resources/js/pages/jsgrid.init.js ***!
  \*******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

/*
Template Name: Ubold - Responsive Bootstrap 4 Admin Dashboard
Author: CoderThemes
Version: 3.0.0
Website: https://coderthemes.com/
Contact: support@coderthemes.com
File: Jsgrid init js
*/

/**
 * JsGrid Controller
 */
var JsDBSource = {
  loadData: function loadData(filter) {
    console.log(filter);
    var d = $.Deferred();
    $.ajax({
      type: "GET",
      url: "assets/data/jsgrid.json",
      data: filter,
      success: function success(response) {
        //static filter on frontend side, you should actually filter data on backend side
        var filtered_data = $.grep(response, function (client) {
          return (!filter.Name || client.Name.indexOf(filter.Name) > -1) && (!filter.Age || client.Age === filter.Age) && (!filter.Address || client.Address.indexOf(filter.Address) > -1) && (!filter.Country || client.Country === filter.Country);
        });
        d.resolve(filtered_data);
      }
    });
    return d.promise();
  },
  insertItem: function insertItem(item) {
    return $.ajax({
      type: "POST",
      url: "assets/data/jsgrid.json",
      data: item
    });
  },
  updateItem: function updateItem(item) {
    return $.ajax({
      type: "PUT",
      url: "assets/data/jsgrid.json",
      data: item
    });
  },
  deleteItem: function deleteItem(item) {
    return $.ajax({
      type: "DELETE",
      url: "assets/data/jsgrid.json",
      data: item
    });
  },
  countries: [{
    Name: "",
    Id: 0
  }, {
    Name: "United States",
    Id: 1
  }, {
    Name: "Canada",
    Id: 2
  }, {
    Name: "United Kingdom",
    Id: 3
  }, {
    Name: "France",
    Id: 4
  }, {
    Name: "Brazil",
    Id: 5
  }, {
    Name: "China",
    Id: 6
  }, {
    Name: "Russia",
    Id: 7
  }]
}; // Custom code

!function ($) {
  "use strict";

  var GridApp = function GridApp() {
    this.$body = $("body");
  };

  GridApp.prototype.createGrid = function ($element, options) {
    //default options
    var defaults = {
      height: "550",
      width: "100%",
      filtering: true,
      editing: true,
      inserting: true,
      sorting: true,
      paging: true,
      autoload: true,
      pageSize: 10,
      pageButtonCount: 5,
      deleteConfirm: "Do you really want to delete the entry?"
    };
    $element.jsGrid($.extend(defaults, options));
  }, GridApp.prototype.init = function () {
    var $this = this;
    var options = {
      fields: [{
        name: "Name",
        type: "text",
        width: 150
      }, {
        name: "Age",
        type: "number",
        width: 50
      }, {
        name: "Address",
        type: "text",
        width: 200
      }, {
        name: "Country",
        type: "select",
        items: JsDBSource.countries,
        valueField: "Id",
        textField: "Name"
      }, {
        type: "control"
      }],
      controller: JsDBSource
    };
    $this.createGrid($("#jsGrid"), options);
  }, //init ChatApp
  $.GridApp = new GridApp(), $.GridApp.Constructor = GridApp;
}(window.jQuery), //initializing main application module
function ($) {
  "use strict";

  $.GridApp.init();
}(window.jQuery);

/***/ }),

/***/ 39:
/*!*************************************************!*\
  !*** multi ./resources/js/pages/jsgrid.init.js ***!
  \*************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! F:\wamp\www\Ubold\laravel\ubold\resources\js\pages\jsgrid.init.js */"./resources/js/pages/jsgrid.init.js");


/***/ })

/******/ });