/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./app/js/mockHandles.js":
/*!*******************************!*\
  !*** ./app/js/mockHandles.js ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _modules_modal__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./modules/modal */ \"./app/js/modules/modal/index.js\");\n\n\ndocument.addEventListener(\"DOMContentLoaded\", () => {\n  const btnResetPassword = document.querySelector(\".js-reset-password\")\n  if (!!btnResetPassword) {\n    btnResetPassword.addEventListener(\"click\", () => {\n      const modal = btnResetPassword.closest(`[data-component=\"modal\"]`)\n      if (!!modal) {\n        console.log(\"resetPasss \", modal)\n        ;(0,_modules_modal__WEBPACK_IMPORTED_MODULE_0__.hideModal)(modal)\n      }\n    })\n  }\n})\n\n\n//# sourceURL=webpack://optimizedhtml/./app/js/mockHandles.js?");

/***/ }),

/***/ "./app/js/modules/helpers/utils.js":
/*!*****************************************!*\
  !*** ./app/js/modules/helpers/utils.js ***!
  \*****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"getCurrentTarget\": () => (/* binding */ getCurrentTarget)\n/* harmony export */ });\nconst getCurrentTarget = (e, conditionCurrent, selectorParent) => {\n  let { target } = e\n\n  if (conditionCurrent) {\n    e.preventDefault()\n    return target\n  }\n  if (target.closest(selectorParent)) {\n    e.preventDefault()\n    return target.closest(selectorParent)\n  }\n  return null\n}\n\n\n//# sourceURL=webpack://optimizedhtml/./app/js/modules/helpers/utils.js?");

/***/ }),

/***/ "./app/js/modules/modal/index.js":
/*!***************************************!*\
  !*** ./app/js/modules/modal/index.js ***!
  \***************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"hideModal\": () => (/* binding */ hideModal),\n/* harmony export */   \"showModal\": () => (/* binding */ showModal)\n/* harmony export */ });\n/* harmony import */ var _helpers_utils__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../helpers/utils */ \"./app/js/modules/helpers/utils.js\");\n\nconst bodyScrollLock = __webpack_require__(/*! body-scroll-lock */ \"./node_modules/body-scroll-lock/lib/bodyScrollLock.esm.js\")\n\nlet openedModals = []\nconst disableBodyScroll = bodyScrollLock.disableBodyScroll\nconst enableBodyScroll = bodyScrollLock.enableBodyScroll\nconst clearAllBodyScrollLocks = bodyScrollLock.clearAllBodyScrollLocks\n\nconst IS_ACTIVE_CLASS = \"is-active\"\n\nconst COMPONENT_SELECTOR = `[data-component=\"modal\"]`\n\nconst hideModal = (modalElement) => {\n  console.log(\"hideModal \", modalElement)\n  modalElement.classList.remove(IS_ACTIVE_CLASS)\n  openedModals = openedModals.filter((m) => m !== modalElement.id)\n  console.log(\"openedModals \", openedModals)\n  if (openedModals.length === 0) {\n    enableBodyScroll(modalElement)\n    clearAllBodyScrollLocks()\n  }\n}\nconst showModal = (modalElement) => {\n  console.log(\"showModal \", modalElement)\n  modalElement.classList.add(IS_ACTIVE_CLASS)\n  openedModals = [...openedModals, modalElement.id]\n  disableBodyScroll(modalElement)\n}\n\nconst modalHideHandler = (e) => {\n  let currentTarget = (0,_helpers_utils__WEBPACK_IMPORTED_MODULE_0__.getCurrentTarget)(\n    e,\n    e.target.dataset.modalHide,\n    \"[data-modal-hide]\",\n  )\n  if (!currentTarget) {\n    return\n  }\n\n  let modal\n  if (currentTarget.dataset.modalHide.length) {\n    modal = document.querySelector(currentTarget.dataset.modalHide)\n  } else {\n    modal = currentTarget.closest(COMPONENT_SELECTOR)\n  }\n  console.log(\"hide handler \", modal)\n  hideModal(modal)\n}\nconst modalShowHandler = (e) => {\n  let currentTarget = (0,_helpers_utils__WEBPACK_IMPORTED_MODULE_0__.getCurrentTarget)(\n    e,\n    e.target.dataset.modalShow,\n    \"[data-modal-show]\",\n  )\n  if (!currentTarget) {\n    return\n  }\n  console.log(\n    \"showModal handle \",\n    document.querySelector(currentTarget.dataset.modalShow),\n  )\n  showModal(document.querySelector(currentTarget.dataset.modalShow))\n}\n\nconst handleClick = (e) => {\n  console.log(\"handleClick\")\n  modalHideHandler(e)\n  modalShowHandler(e)\n}\n\ndocument.addEventListener(\"click\", handleClick, false)\n\n\n//# sourceURL=webpack://optimizedhtml/./app/js/modules/modal/index.js?");

/***/ }),

/***/ "./node_modules/body-scroll-lock/lib/bodyScrollLock.esm.js":
/*!*****************************************************************!*\
  !*** ./node_modules/body-scroll-lock/lib/bodyScrollLock.esm.js ***!
  \*****************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"clearAllBodyScrollLocks\": () => (/* binding */ clearAllBodyScrollLocks),\n/* harmony export */   \"disableBodyScroll\": () => (/* binding */ disableBodyScroll),\n/* harmony export */   \"enableBodyScroll\": () => (/* binding */ enableBodyScroll)\n/* harmony export */ });\nfunction _toConsumableArray(arr) { if (Array.isArray(arr)) { for (var i = 0, arr2 = Array(arr.length); i < arr.length; i++) { arr2[i] = arr[i]; } return arr2; } else { return Array.from(arr); } }\n\n// Older browsers don't support event options, feature detect it.\n\n// Adopted and modified solution from Bohdan Didukh (2017)\n// https://stackoverflow.com/questions/41594997/ios-10-safari-prevent-scrolling-behind-a-fixed-overlay-and-maintain-scroll-posi\n\nvar hasPassiveEvents = false;\nif (typeof window !== 'undefined') {\n  var passiveTestOptions = {\n    get passive() {\n      hasPassiveEvents = true;\n      return undefined;\n    }\n  };\n  window.addEventListener('testPassive', null, passiveTestOptions);\n  window.removeEventListener('testPassive', null, passiveTestOptions);\n}\n\nvar isIosDevice = typeof window !== 'undefined' && window.navigator && window.navigator.platform && (/iP(ad|hone|od)/.test(window.navigator.platform) || window.navigator.platform === 'MacIntel' && window.navigator.maxTouchPoints > 1);\n\n\nvar locks = [];\nvar documentListenerAdded = false;\nvar initialClientY = -1;\nvar previousBodyOverflowSetting = void 0;\nvar previousBodyPosition = void 0;\nvar previousBodyPaddingRight = void 0;\n\n// returns true if `el` should be allowed to receive touchmove events.\nvar allowTouchMove = function allowTouchMove(el) {\n  return locks.some(function (lock) {\n    if (lock.options.allowTouchMove && lock.options.allowTouchMove(el)) {\n      return true;\n    }\n\n    return false;\n  });\n};\n\nvar preventDefault = function preventDefault(rawEvent) {\n  var e = rawEvent || window.event;\n\n  // For the case whereby consumers adds a touchmove event listener to document.\n  // Recall that we do document.addEventListener('touchmove', preventDefault, { passive: false })\n  // in disableBodyScroll - so if we provide this opportunity to allowTouchMove, then\n  // the touchmove event on document will break.\n  if (allowTouchMove(e.target)) {\n    return true;\n  }\n\n  // Do not prevent if the event has more than one touch (usually meaning this is a multi touch gesture like pinch to zoom).\n  if (e.touches.length > 1) return true;\n\n  if (e.preventDefault) e.preventDefault();\n\n  return false;\n};\n\nvar setOverflowHidden = function setOverflowHidden(options) {\n  // If previousBodyPaddingRight is already set, don't set it again.\n  if (previousBodyPaddingRight === undefined) {\n    var _reserveScrollBarGap = !!options && options.reserveScrollBarGap === true;\n    var scrollBarGap = window.innerWidth - document.documentElement.clientWidth;\n\n    if (_reserveScrollBarGap && scrollBarGap > 0) {\n      var computedBodyPaddingRight = parseInt(window.getComputedStyle(document.body).getPropertyValue('padding-right'), 10);\n      previousBodyPaddingRight = document.body.style.paddingRight;\n      document.body.style.paddingRight = computedBodyPaddingRight + scrollBarGap + 'px';\n    }\n  }\n\n  // If previousBodyOverflowSetting is already set, don't set it again.\n  if (previousBodyOverflowSetting === undefined) {\n    previousBodyOverflowSetting = document.body.style.overflow;\n    document.body.style.overflow = 'hidden';\n  }\n};\n\nvar restoreOverflowSetting = function restoreOverflowSetting() {\n  if (previousBodyPaddingRight !== undefined) {\n    document.body.style.paddingRight = previousBodyPaddingRight;\n\n    // Restore previousBodyPaddingRight to undefined so setOverflowHidden knows it\n    // can be set again.\n    previousBodyPaddingRight = undefined;\n  }\n\n  if (previousBodyOverflowSetting !== undefined) {\n    document.body.style.overflow = previousBodyOverflowSetting;\n\n    // Restore previousBodyOverflowSetting to undefined\n    // so setOverflowHidden knows it can be set again.\n    previousBodyOverflowSetting = undefined;\n  }\n};\n\nvar setPositionFixed = function setPositionFixed() {\n  return window.requestAnimationFrame(function () {\n    // If previousBodyPosition is already set, don't set it again.\n    if (previousBodyPosition === undefined) {\n      previousBodyPosition = {\n        position: document.body.style.position,\n        top: document.body.style.top,\n        left: document.body.style.left\n      };\n\n      // Update the dom inside an animation frame \n      var _window = window,\n          scrollY = _window.scrollY,\n          scrollX = _window.scrollX,\n          innerHeight = _window.innerHeight;\n\n      document.body.style.position = 'fixed';\n      document.body.style.top = -scrollY;\n      document.body.style.left = -scrollX;\n\n      setTimeout(function () {\n        return window.requestAnimationFrame(function () {\n          // Attempt to check if the bottom bar appeared due to the position change\n          var bottomBarHeight = innerHeight - window.innerHeight;\n          if (bottomBarHeight && scrollY >= innerHeight) {\n            // Move the content further up so that the bottom bar doesn't hide it\n            document.body.style.top = -(scrollY + bottomBarHeight);\n          }\n        });\n      }, 300);\n    }\n  });\n};\n\nvar restorePositionSetting = function restorePositionSetting() {\n  if (previousBodyPosition !== undefined) {\n    // Convert the position from \"px\" to Int\n    var y = -parseInt(document.body.style.top, 10);\n    var x = -parseInt(document.body.style.left, 10);\n\n    // Restore styles\n    document.body.style.position = previousBodyPosition.position;\n    document.body.style.top = previousBodyPosition.top;\n    document.body.style.left = previousBodyPosition.left;\n\n    // Restore scroll\n    window.scrollTo(x, y);\n\n    previousBodyPosition = undefined;\n  }\n};\n\n// https://developer.mozilla.org/en-US/docs/Web/API/Element/scrollHeight#Problems_and_solutions\nvar isTargetElementTotallyScrolled = function isTargetElementTotallyScrolled(targetElement) {\n  return targetElement ? targetElement.scrollHeight - targetElement.scrollTop <= targetElement.clientHeight : false;\n};\n\nvar handleScroll = function handleScroll(event, targetElement) {\n  var clientY = event.targetTouches[0].clientY - initialClientY;\n\n  if (allowTouchMove(event.target)) {\n    return false;\n  }\n\n  if (targetElement && targetElement.scrollTop === 0 && clientY > 0) {\n    // element is at the top of its scroll.\n    return preventDefault(event);\n  }\n\n  if (isTargetElementTotallyScrolled(targetElement) && clientY < 0) {\n    // element is at the bottom of its scroll.\n    return preventDefault(event);\n  }\n\n  event.stopPropagation();\n  return true;\n};\n\nvar disableBodyScroll = function disableBodyScroll(targetElement, options) {\n  // targetElement must be provided\n  if (!targetElement) {\n    // eslint-disable-next-line no-console\n    console.error('disableBodyScroll unsuccessful - targetElement must be provided when calling disableBodyScroll on IOS devices.');\n    return;\n  }\n\n  // disableBodyScroll must not have been called on this targetElement before\n  if (locks.some(function (lock) {\n    return lock.targetElement === targetElement;\n  })) {\n    return;\n  }\n\n  var lock = {\n    targetElement: targetElement,\n    options: options || {}\n  };\n\n  locks = [].concat(_toConsumableArray(locks), [lock]);\n\n  if (isIosDevice) {\n    setPositionFixed();\n  } else {\n    setOverflowHidden(options);\n  }\n\n  if (isIosDevice) {\n    targetElement.ontouchstart = function (event) {\n      if (event.targetTouches.length === 1) {\n        // detect single touch.\n        initialClientY = event.targetTouches[0].clientY;\n      }\n    };\n    targetElement.ontouchmove = function (event) {\n      if (event.targetTouches.length === 1) {\n        // detect single touch.\n        handleScroll(event, targetElement);\n      }\n    };\n\n    if (!documentListenerAdded) {\n      document.addEventListener('touchmove', preventDefault, hasPassiveEvents ? { passive: false } : undefined);\n      documentListenerAdded = true;\n    }\n  }\n};\n\nvar clearAllBodyScrollLocks = function clearAllBodyScrollLocks() {\n  if (isIosDevice) {\n    // Clear all locks ontouchstart/ontouchmove handlers, and the references.\n    locks.forEach(function (lock) {\n      lock.targetElement.ontouchstart = null;\n      lock.targetElement.ontouchmove = null;\n    });\n\n    if (documentListenerAdded) {\n      document.removeEventListener('touchmove', preventDefault, hasPassiveEvents ? { passive: false } : undefined);\n      documentListenerAdded = false;\n    }\n\n    // Reset initial clientY.\n    initialClientY = -1;\n  }\n\n  if (isIosDevice) {\n    restorePositionSetting();\n  } else {\n    restoreOverflowSetting();\n  }\n\n  locks = [];\n};\n\nvar enableBodyScroll = function enableBodyScroll(targetElement) {\n  if (!targetElement) {\n    // eslint-disable-next-line no-console\n    console.error('enableBodyScroll unsuccessful - targetElement must be provided when calling enableBodyScroll on IOS devices.');\n    return;\n  }\n\n  locks = locks.filter(function (lock) {\n    return lock.targetElement !== targetElement;\n  });\n\n  if (isIosDevice) {\n    targetElement.ontouchstart = null;\n    targetElement.ontouchmove = null;\n\n    if (documentListenerAdded && locks.length === 0) {\n      document.removeEventListener('touchmove', preventDefault, hasPassiveEvents ? { passive: false } : undefined);\n      documentListenerAdded = false;\n    }\n  }\n\n  if (isIosDevice) {\n    restorePositionSetting();\n  } else {\n    restoreOverflowSetting();\n  }\n};\n\n\n\n//# sourceURL=webpack://optimizedhtml/./node_modules/body-scroll-lock/lib/bodyScrollLock.esm.js?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = __webpack_require__("./app/js/mockHandles.js");
/******/ 	
/******/ })()
;