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
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./dev/assets/js/scripts.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./dev/assets/js/scripts.js":
/*!**********************************!*\
  !*** ./dev/assets/js/scripts.js ***!
  \**********************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("jQuery(document).ready(function ($) {\n  /* Navigation events */\n  $('#nav-button').on('click', function () {\n    if ($('#nav-button').hasClass('nav-active')) {\n      $('#nav-button').removeClass('nav-active');\n      $('#nav-megamenu').removeClass('menu-active');\n    } else {\n      $('#nav-button').addClass('nav-active');\n      $('#nav-megamenu').addClass('menu-active');\n    }\n  });\n  $(\"#down-arrow\").click(function () {\n    $('html,body').animate({\n      scrollTop: $(\"#down-to-arrow\").offset().top\n    }, 'slow');\n  });\n  $('.h3_bb h3:first-child').addClass('bb');\n  $('.cta_form input[type=\"text\"]').addClass('form-control mr-sm-2');\n  $('.cta_form input[type=\"submit\"]').addClass('btn btn-block');\n  $('.home_contact_form select').addClass('form-control custom-select');\n  $('.home_contact_form input[type=\"text\"],.home_contact_form input[type=\"email\"], .home_contact_form textarea').addClass('form-control');\n  $('.home_contact_form .gform_footer').addClass('col-md-12 text-center');\n  $('.home_contact_form .gform_footer input').addClass('btn light');\n  $('.menu-footer-menu-container').addClass('footer-menu');\n  $('.menu-footer-menu-container').addClass('footer-menu');\n  $('.menu-footer-menu-container ul').addClass('main-menu'); // Vimeo loading video\n\n  var video_id = $('.iframe_container').html();\n  $('#video_container a').click(function (e) {\n    e.preventDefault();\n    $('#video_container').html('<div style=\"padding:56.25% 0 0 0;position:relative;\"><iframe src=\"https://player.vimeo.com/video/' + video_id + '?autoplay=1&title=0&byline=0&portrait=0\" style=\"position:absolute;top:0;left:0;width:100%;height:100%;\" frameborder=\"0\" allow=\"autoplay; fullscreen\" allowfullscreen></iframe></div><script src=\"https://player.vimeo.com/api/player.js\"></script>');\n  }); // End vimeo video\n  // bxSlider\n\n  $('.slider').bxSlider({\n    controls: false,\n    pager: false\n  }); // Smooth Scrolling\n\n  $('a[href*=\"#\"]').not('[href=\"#\"]').not('[href=\"#0\"]').click(function (event) {\n    if (location.pathname.replace(/^\\//, '') == this.pathname.replace(/^\\//, '') && location.hostname == this.hostname) {\n      var target = $(this.hash);\n      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']'); // Does a scroll target exist?\n\n      if (target.length) {\n        event.preventDefault();\n        $('html, body').animate({\n          scrollTop: target.offset().top\n        }, 1000, function () {\n          // Callback after animation\n          // Must change focus!\n          var $target = $(target);\n          $target.focus();\n\n          if ($target.is(\":focus\")) {\n            return false;\n          } else {\n            $target.attr('tabindex', '-1');\n            $target.focus();\n          }\n\n          ;\n        });\n      }\n    }\n  }); // End Smooth scrolling\n}); // Document ready\n\n//# sourceURL=webpack:///./dev/assets/js/scripts.js?");

/***/ })

/******/ });