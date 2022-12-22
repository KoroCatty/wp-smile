/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!***********************************!*\
  !*** ./src/javascript/contact.js ***!
  \***********************************/
// ------------------------------------
// Hamburger
// ------------------------------------
var burgerIcon = document.querySelector('.headerHam');
var burgerIconTop = document.querySelector('.headerHam__icon--bar.top');
var burgerIconMiddle = document.querySelector('.headerHam__icon--bar.middle');
var burgerIconBottom = document.querySelector('.headerHam__icon--bar.bottom');

// pointer-eventsを制御
var burgerMenuEnablePointerEvents = document.querySelector(".overWrap");

// Body Bg
var bodyMask = document.querySelector('.entireWrap');
// Hidden menu
var overWrapActive = document.querySelector('.overWrap');
burgerIcon.addEventListener('click', function () {
  burgerIconTop.classList.toggle('active');
  burgerIconMiddle.classList.toggle('active');
  burgerIconBottom.classList.toggle('active');
  burgerMenuEnablePointerEvents.classList.toggle("active");

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
  if (360 < window.scrollY) {
    document.querySelector('.logo').style.color = 'black';
  } else {
    document.querySelector('.logo').style.color = 'white';
  }

  //  Icon
  if (390 < window.scrollY) {
    document.querySelector('.headerHam').classList.toggle('changeColor');

    // Icon Text
    var ddd = document.querySelectorAll('.headerHam__icon--bar');
    ddd.forEach(function (dddd) {
      dddd.classList.toggle('changeColor');
    });
  }

  // When scrolled for Burger Icon
  window.addEventListener('scroll', function () {
    if (390 < window.scrollY) {
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
  if (360 < window.scrollY) {
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
  burgerMenuEnablePointerEvents.classList.remove("active");

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
/******/ })()
;