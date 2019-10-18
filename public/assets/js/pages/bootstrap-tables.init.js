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
/******/ 	return __webpack_require__(__webpack_require__.s = 37);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/pages/bootstrap-tables.init.js":
/*!*****************************************************!*\
  !*** ./resources/js/pages/bootstrap-tables.init.js ***!
  \*****************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

/*
Template Name: Ubold - Responsive Bootstrap 4 Admin Dashboard
Author: CoderThemes
Version: 3.0.0
Website: https://coderthemes.com/
Contact: support@coderthemes.com
File: Bootstrap tables
*/
$(document).ready(function () {
  // BOOTSTRAP TABLE - CUSTOM TOOLBAR
  // =================================================================
  // Require Bootstrap Table
  // http://bootstrap-table.wenzhixin.net.cn/
  // =================================================================
  var $table = $('#demo-custom-toolbar'),
      $remove = $('#demo-delete-row');
  $table.on('check.bs.table uncheck.bs.table check-all.bs.table uncheck-all.bs.table', function () {
    $remove.prop('disabled', !$table.bootstrapTable('getSelections').length);
  });
  $remove.click(function () {
    var ids = $.map($table.bootstrapTable('getSelections'), function (row) {
      return row.id;
    });
    $table.bootstrapTable('remove', {
      field: 'id',
      values: ids
    });
    $remove.prop('disabled', true);
  });
});
/**
 * Hack for table loading issue - ideally this should be fixed in plugin code itself.
 */

$(window).on('load', function () {
  $('[data-toggle="table"]').show();
}); // Sample format for Invoice Column.
// =================================================================

function invoiceFormatter(value, row) {
  return '<a href="#" class="btn-link" > Order #' + value + '</a>';
} // Sample Format for User Name Column.
// =================================================================


function nameFormatter(value, row) {
  return '<a href="#" class="btn-link" > ' + value + '</a>';
} // Sample Format for Order Date Column.
// =================================================================


function dateFormatter(value, row) {
  var icon = row.id % 2 === 0 ? 'fa-star' : 'fa-user';
  return '<span class="text-muted"> ' + value + '</span>';
} // Sample Format for Order Status Column.
// =================================================================


function statusFormatter(value, row) {
  var labelColor;

  if (value == "Paid") {
    labelColor = "success";
  } else if (value == "Unpaid") {
    labelColor = "warning";
  } else if (value == "Shipped") {
    labelColor = "info";
  } else if (value == "Refunded") {
    labelColor = "danger";
  }

  var icon = row.id % 2 === 0 ? 'fa-star' : 'fa-user';
  return '<div class="badge label-table badge-' + labelColor + '"> ' + value + '</div>';
} // Sort Price Column
// =================================================================


function priceSorter(a, b) {
  a = +a.substring(1); // remove $

  b = +b.substring(1);
  if (a > b) return 1;
  if (a < b) return -1;
  return 0;
}

window.icons = {
  refresh: 'mdi mdi-refresh',
  toggle: 'fa-refresh',
  toggleOn: 'fa-toggle-on',
  toggleOff: 'fa-toggle-on',
  columns: 'fa-th-list',
  paginationSwitchDown: 'glyphicon-collapse-down icon-chevron-down'
};

/***/ }),

/***/ 37:
/*!***********************************************************!*\
  !*** multi ./resources/js/pages/bootstrap-tables.init.js ***!
  \***********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! F:\wamp\www\Ubold\laravel\ubold\resources\js\pages\bootstrap-tables.init.js */"./resources/js/pages/bootstrap-tables.init.js");


/***/ })

/******/ });