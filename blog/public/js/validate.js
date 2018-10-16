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
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
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
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 12);
/******/ })
/************************************************************************/
/******/ ({

/***/ 12:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(13);


/***/ }),

/***/ 13:
/***/ (function(module, exports) {

function checkRollNo(e) {
	var element = e.target;
	if (/[^a-zA-Z0-9]/.test(element.value)) {
		alert("Invalid rollno. Only a-z A-Z and 0-9 characters are allowed");
		element.value = "";
		return false;
	}
	if (!/[a-zA-Z]/.test(element.value)) {
		alert("Invalid rollno. You must also use a-z or A-Z characters");
		element.value = "";
		return false;
	}
	if (!/[0-9]/.test(element.value)) {
		alert("Invalid rollno. You must also use 0-9 characters");
		element.value = "";
		return false;
	}
	if (element.value.length > 8 || element.value.length < 6) {
		alert("Invalid rollno!");
		element.value = "";
		return false;
	}
	return true;
}

function checkName(e) {
	var element = e.target;
	if (/[^a-zA-Z ]/.test(element.value)) {
		alert("Name is invalid! Only characters from a-z and A-Z are allowed.");
		element.value = "";
		return false;
	}
	return true;
}

function checkAddress(e) {
	var element = e.target;
	if (element.value.length < 50) {
		alert("Address is too short!");
		element.value = "";
		return false;
	}
	return true;
}
var rollno = document.getElementById("rollno");
var sname = document.getElementById("sname");
var address = document.getElementById("address");

rollno.addEventListener('blur', checkRollNo, false);
sname.addEventListener('blur', checkName, false);
address.addEventListener('blur', checkAddress, false);

/***/ })

/******/ });