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

eval("jQuery(document).ready(function ($) {\n  /* Navigation events */\n  $('#nav-button').on('click', function () {\n    if ($('#nav-button').hasClass('nav-active')) {\n      $('#nav-button').removeClass('nav-active');\n      $('#nav-megamenu').removeClass('menu-active');\n    } else {\n      $('#nav-button').addClass('nav-active');\n      $('#nav-megamenu').addClass('menu-active');\n    }\n  });\n  $(\"#down-arrow\").click(function () {\n    $('html,body').animate({\n      scrollTop: $(\"#down-to-arrow\").offset().top\n    }, 'slow');\n  });\n  $('.h3_bb h3:first-child').addClass('bb');\n  $('.cta_form input[type=\"text\"]').addClass('form-control mr-sm-2');\n  $('.cta_form input[type=\"submit\"]').addClass('btn btn-block');\n  $('.home_contact_form select').addClass('form-control custom-select');\n  $('.home_contact_form input[type=\"text\"],.home_contact_form input[type=\"email\"], .home_contact_form textarea').addClass('form-control');\n  $('.home_contact_form .gform_footer').addClass('col-md-12 text-center');\n  $('.home_contact_form .gform_footer input').addClass('btn light');\n  $('.menu-footer-menu-container').addClass('footer-menu');\n  $('.menu-footer-menu-container').addClass('footer-menu');\n  $('.menu-footer-menu-container ul').addClass('main-menu');\n}); // YouTube Loading Script. Don't put it inside document.ready()\n\ndocument.addEventListener(\"DOMContentLoaded\", function () {\n  var div,\n      n,\n      v = document.getElementsByClassName(\"youtube-player\");\n\n  for (n = 0; n < v.length; n++) {\n    div = document.createElement(\"div\");\n    div.setAttribute(\"data-id\", v[n].dataset.id);\n    div.innerHTML = labnolThumb(v[n].dataset.id);\n    div.onclick = labnolIframe;\n    v[n].appendChild(div);\n  }\n});\n\nfunction labnolThumb(id) {\n  var thumb = '<img src=\"https://i.ytimg.com/vi/ID/hqdefault.jpg\">',\n      play = '<div class=\"play\"><span class=\"text\">Welcome to Kantoka</span></div>';\n  return thumb.replace(\"ID\", id) + play;\n}\n\nfunction labnolIframe() {\n  var iframe = document.createElement(\"iframe\");\n  var embed = \"https://www.youtube.com/embed/ID?autoplay=1\";\n  iframe.setAttribute(\"src\", embed.replace(\"ID\", this.dataset.id));\n  iframe.setAttribute(\"frameborder\", \"0\");\n  iframe.setAttribute(\"allowfullscreen\", \"1\");\n  this.parentNode.replaceChild(iframe, this);\n}\n\n//# sourceURL=webpack:///./dev/assets/js/scripts.js?");

/***/ })

/******/ });