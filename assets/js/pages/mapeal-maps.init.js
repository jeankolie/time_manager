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
/******/ 	return __webpack_require__(__webpack_require__.s = 52);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/pages/mapeal-maps.init.js":
/*!************************************************!*\
  !*** ./resources/js/pages/mapeal-maps.init.js ***!
  \************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

/*
Template Name: Ubold - Responsive Bootstrap 4 Admin Dashboard
Author: CoderThemes
Version: 3.0.0
Website: https://coderthemes.com/
Contact: support@coderthemes.com
File: Mapeal maps init js
*/
$(function () {
  //USA Map
  $mapusa = $(".map-usa");
  $mapusa.mapael({
    map: {
      name: "usa_states",
      defaultArea: {
        attrs: {
          fill: "#38414a",
          stroke: "#e3eaef"
        },
        attrsHover: {
          fill: "#4a81d4"
        }
      },
      zoom: {
        enabled: true,
        maxLevel: 10
      }
    },
    legend: {
      plot: {
        title: "American cities",
        slices: [{
          size: 24,
          attrs: {
            fill: "#4a81d4"
          },
          label: "Product One",
          sliceValue: "Value 1"
        }, {
          size: 24,
          attrs: {
            fill: "#4fc6e1"
          },
          label: "Product Two",
          sliceValue: "Value 2"
        }, {
          size: 24,
          attrs: {
            fill: "#f1556c"
          },
          label: "Product Three",
          sliceValue: "Value 3"
        }]
      }
    },
    plots: {
      'ny': {
        latitude: 40.717079,
        longitude: -74.00116,
        tooltip: {
          content: "New York"
        },
        value: "Value 3"
      },
      'an': {
        latitude: 61.2108398,
        longitude: -149.9019557,
        tooltip: {
          content: "Anchorage"
        },
        value: "Value 3"
      },
      'sf': {
        latitude: 37.792032,
        longitude: -122.394613,
        tooltip: {
          content: "San Francisco"
        },
        value: "Value 1"
      },
      'pa': {
        latitude: 19.493204,
        longitude: -154.8199569,
        tooltip: {
          content: "Pahoa"
        },
        value: "Value 2"
      },
      'la': {
        latitude: 34.025052,
        longitude: -118.192006,
        tooltip: {
          content: "Los Angeles"
        },
        value: "Value 3"
      },
      'dallas': {
        latitude: 32.784881,
        longitude: -96.808244,
        tooltip: {
          content: "Dallas"
        },
        value: "Value 2"
      },
      'miami': {
        latitude: 25.789125,
        longitude: -80.205674,
        tooltip: {
          content: "Miami"
        },
        value: "Value 3"
      },
      'washington': {
        latitude: 38.905761,
        longitude: -77.020746,
        tooltip: {
          content: "Washington"
        },
        value: "Value 2"
      },
      'seattle': {
        latitude: 47.599571,
        longitude: -122.319426,
        tooltip: {
          content: "Seattle"
        },
        value: "Value 1"
      }
    }
  }); // Zoom on mousewheel with mousewheel jQuery plugin

  $mapusa.on("mousewheel", function (e) {
    if (e.deltaY > 0) {
      $mapusa.trigger("zoom", $mapusa.data("zoomLevel") + 1);
      console.log("zoom");
    } else {
      $mapusa.trigger("zoom", $mapusa.data("zoomLevel") - 1);
    }

    return false;
  });
  $(".mapcontainer").mapael({
    map: {
      name: "world_countries",
      defaultArea: {
        attrs: {
          fill: "#38414a",
          stroke: "#7c8e9a"
        },
        attrsHover: {
          fill: "#4a81d4",
          stroke: "#4a81d4"
        } // Default attributes can be set for all links

      },
      defaultLink: {
        factor: 0.4,
        attrsHover: {
          stroke: "#f06292"
        }
      },
      defaultPlot: {
        text: {
          attrs: {
            fill: "#98a6ad"
          },
          attrsHover: {
            fill: "#98a6ad"
          }
        }
      }
    },
    plots: {
      'paris': {
        latitude: 48.86,
        longitude: 2.3444,
        tooltip: {
          content: "Paris<br />Population: 500000000"
        }
      },
      'newyork': {
        latitude: 40.667,
        longitude: -73.833,
        tooltip: {
          content: "New york<br />Population: 200001"
        }
      },
      'sanfrancisco': {
        latitude: 37.792032,
        longitude: -122.394613,
        tooltip: {
          content: "San Francisco"
        }
      },
      'brasilia': {
        latitude: -15.781682,
        longitude: -47.924195,
        tooltip: {
          content: "Brasilia<br />Population: 200000001"
        }
      },
      'roma': {
        latitude: 41.827637,
        longitude: 12.462732,
        tooltip: {
          content: "Roma"
        }
      },
      'miami': {
        latitude: 25.789125,
        longitude: -80.205674,
        tooltip: {
          content: "Miami"
        }
      },
      // Size=0 in order to make plots invisible
      'tokyo': {
        latitude: 35.687418,
        longitude: 139.692306,
        size: 0,
        text: {
          content: 'Tokyo'
        }
      },
      'sydney': {
        latitude: -33.917,
        longitude: 151.167,
        size: 0,
        text: {
          content: 'Sydney'
        }
      },
      'plot1': {
        latitude: 22.906561,
        longitude: 86.840170,
        size: 0,
        text: {
          content: 'Plot1',
          position: 'left',
          margin: 5
        }
      },
      'plot2': {
        latitude: -0.390553,
        longitude: 115.586762,
        size: 0,
        text: {
          content: 'Plot2'
        }
      },
      'plot3': {
        latitude: 44.065626,
        longitude: 94.576079,
        size: 0,
        text: {
          content: 'Plot3'
        }
      }
    },
    // Links allow you to connect plots between them
    links: {
      'link1': {
        factor: -0.3 // The source and the destination of the link can be set with a latitude and a longitude or a x and a y ...
        ,
        between: [{
          latitude: 24.708785,
          longitude: -5.402427
        }, {
          x: 560,
          y: 280
        }],
        attrs: {
          "stroke-width": 2
        },
        tooltip: {
          content: "Link"
        }
      },
      'parisnewyork': {
        // ... Or with IDs of plotted points
        factor: -0.3,
        between: ['paris', 'newyork'],
        attrs: {
          "stroke-width": 2
        },
        tooltip: {
          content: "Paris - New-York"
        }
      },
      'parissanfrancisco': {
        // The curve can be inverted by setting a negative factor
        factor: -0.5,
        between: ['paris', 'sanfrancisco'],
        attrs: {
          "stroke-width": 4
        },
        tooltip: {
          content: "Paris - San - Francisco"
        }
      },
      'parisbrasilia': {
        factor: -0.8,
        between: ['paris', 'brasilia'],
        attrs: {
          "stroke-width": 1
        },
        tooltip: {
          content: "Paris - Brasilia"
        }
      },
      'romamiami': {
        factor: 0.2,
        between: ['roma', 'miami'],
        attrs: {
          "stroke-width": 4
        },
        tooltip: {
          content: "Roma - Miami"
        }
      },
      'sydneyplot1': {
        factor: -0.2,
        between: ['sydney', 'plot1'],
        attrs: {
          stroke: "#6658dd",
          "stroke-width": 3,
          "stroke-linecap": "round",
          opacity: 0.6
        },
        tooltip: {
          content: "Sydney - Plot1"
        }
      },
      'sydneyplot2': {
        factor: -0.1,
        between: ['sydney', 'plot2'],
        attrs: {
          stroke: "#6658dd",
          "stroke-width": 8,
          "stroke-linecap": "round",
          opacity: 0.6
        },
        tooltip: {
          content: "Sydney - Plot2"
        }
      },
      'sydneyplot3': {
        factor: 0.2,
        between: ['sydney', 'plot3'],
        attrs: {
          stroke: "#6658dd",
          "stroke-width": 4,
          "stroke-linecap": "round",
          opacity: 0.6
        },
        tooltip: {
          content: "Sydney - Plot3"
        }
      },
      'sydneytokyo': {
        factor: 0.2,
        between: ['sydney', 'tokyo'],
        attrs: {
          stroke: "#6658dd",
          "stroke-width": 6,
          "stroke-linecap": "round",
          opacity: 0.6
        },
        tooltip: {
          content: "Sydney - Plot2"
        }
      }
    }
  });
});

/***/ }),

/***/ 52:
/*!******************************************************!*\
  !*** multi ./resources/js/pages/mapeal-maps.init.js ***!
  \******************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! F:\wamp\www\Ubold\laravel\ubold\resources\js\pages\mapeal-maps.init.js */"./resources/js/pages/mapeal-maps.init.js");


/***/ })

/******/ });