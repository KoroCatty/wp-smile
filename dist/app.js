/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/javascript/app.js":
/*!*******************************!*\
  !*** ./src/javascript/app.js ***!
  \*******************************/
/***/ (() => {

// ------------------------------------
// Hamburger
// ------------------------------------
alert("app");
var burgerIcon = document.querySelector('.headerHam');
var burgerIconTop = document.querySelector('.headerHam__icon--bar.top');
var burgerIconMiddle = document.querySelector('.headerHam__icon--bar.middle');
var burgerIconBottom = document.querySelector('.headerHam__icon--bar.bottom');

// Body Bg
var bodyMask = document.querySelector('.entireWrap');
// Hidden menu
var overWrapActive = document.querySelector('.overWrap');
burgerIcon.addEventListener('click', function () {
  burgerIconTop.classList.toggle('active');
  burgerIconMiddle.classList.toggle('active');
  burgerIconBottom.classList.toggle('active');

  // toggling Body Bg
  bodyMask.classList.toggle('mask');

  //   toggling Hidden menu
  overWrapActive.classList.toggle('hiddenMenu');
});

// ------------------------------------
// Burger Icon scrolling change Color
// ------------------------------------
window.addEventListener('DOMContentLoaded', function () {
  // when loaded page
  // Logo
  if (760 < window.scrollY) {
    document.querySelector('.logo').style.color = 'black';
  } else {
    document.querySelector('.logo').style.color = 'white';
  }

  //  Icon
  if (760 < window.scrollY) {
    document.querySelector('.headerHam').classList.toggle('changeColor');

    // Icon Text
    var ddd = document.querySelectorAll('.headerHam__icon--bar');
    ddd.forEach(function (dddd) {
      dddd.classList.toggle('changeColor');
    });
  }

  // When scrolled for Burger Icon
  window.addEventListener('scroll', function () {
    if (840 < window.scrollY) {
      // menu
      document.querySelector('.headerHam').classList.add('changeColor');

      // burger Icon
      var aaa = document.querySelectorAll('.headerHam__icon--bar');
      aaa.forEach(function (targetBox) {
        targetBox.classList.add('changeColor');
      });
    } else {
      document.querySelector('.headerHam').classList.remove('changeColor');
      var _aaa = document.querySelectorAll('.headerHam__icon--bar');
      _aaa.forEach(function (targetBox) {
        targetBox.classList.remove('changeColor');
      });
    }
  });
});

// when scrolled for Logo
window.addEventListener('scroll', function () {
  if (760 < window.scrollY) {
    //
    document.querySelector('.logo').style.color = 'black';
  } else {
    document.querySelector('.logo').style.color = 'white';
  }
});
// });

// --------------------------------
//  Clicking makes change the Font color by toggling white and black
// --------------------------------
var burgerIconBlack = document.querySelector('.headerHam');
var burgerIconBlack2 = document.querySelectorAll('.headerHam__icon--bar');
burgerIconBlack.addEventListener('click', function () {
  //   if (760 < window.scrollY) {
  burgerIconBlack.classList.toggle('ClickChangeColor');
  //   }
});

// Icon
burgerIconBlack.addEventListener('click', function () {
  //   if (760 < window.scrollY) {
  burgerIconBlack2.forEach(function (bbb) {
    bbb.classList.toggle('ClickChangeColor2');
  });
  //   }
});

// --------------------------------
//   Click entireWrap area and remove everything
bodyMask.addEventListener('click', function () {
  // Hidden menu
  overWrapActive.classList.remove('hiddenMenu');

  // Body Bg
  bodyMask.classList.remove('mask');

  // Burger text
  burgerIconBlack.classList.remove('ClickChangeColor');

  //   Burger Icon
  burgerIconBlack2.forEach(function (bbb) {
    bbb.classList.remove('ClickChangeColor2');
  });

  // remove Burger Icon class
  burgerIconTop.classList.remove('active');
  burgerIconMiddle.classList.remove('active');
  burgerIconBottom.classList.remove('active');
});

//  Get the scroll number of X and Y
window.addEventListener('DOMContentLoaded', function () {
  window.addEventListener('scroll', function () {
    console.log('横スクロール：' + window.scrollX);
    console.log('縦スクロール：' + window.scrollY);
  });
});

/***/ }),

/***/ "./src/sass/app.scss":
/*!***************************!*\
  !*** ./src/sass/app.scss ***!
  \***************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


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
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
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
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/app": 0,
/******/ 			"app": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunkwp_works"] = self["webpackChunkwp_works"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["app"], () => (__webpack_require__("./src/javascript/app.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["app"], () => (__webpack_require__("./src/sass/app.scss")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;