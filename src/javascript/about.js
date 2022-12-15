// ------------------------------------
// Hamburger
// ------------------------------------
const burgerIcon = document.querySelector('.headerHam');
const burgerIconTop = document.querySelector('.headerHam__icon--bar.top');
const burgerIconMiddle = document.querySelector('.headerHam__icon--bar.middle');
const burgerIconBottom = document.querySelector('.headerHam__icon--bar.bottom');


// Body Bg
const bodyMask = document.querySelector('.entireWrap');
// Hidden menu
const overWrapActive = document.querySelector('.overWrap');

burgerIcon.addEventListener('click', () => {
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
    if ( 250 < window.scrollY ) {
        document.querySelector('.logo').style.color = 'black';
    }else {
        document.querySelector('.logo').style.color = 'white';
    }

    //  Icon
  if (280 < window.scrollY) {
    document.querySelector('.headerHam').classList.toggle('changeColor');

    // Icon Text
    const ddd = document.querySelectorAll('.headerHam__icon--bar');
    ddd.forEach((dddd) => {
      dddd.classList.toggle('changeColor');
    });
  }




    // When scrolled for Burger Icon
  window.addEventListener('scroll', function () {
    if (280 < window.scrollY) {
      // menu
      document.querySelector('.headerHam').classList.add('changeColor');

      // burger Icon
      const aaa = document.querySelectorAll('.headerHam__icon--bar');
      aaa.forEach((targetBox) => {
        targetBox.classList.add('changeColor');
      });
    } else {
      document.querySelector('.headerHam').classList.remove('changeColor');

      const aaa = document.querySelectorAll('.headerHam__icon--bar');
      aaa.forEach((targetBox) => {
        targetBox.classList.remove('changeColor');
      });
    }
  });
});

  // when scrolled for Logo
  window.addEventListener('scroll', function () {
    if (250 < window.scrollY) {
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
const burgerIconBlack = document.querySelector('.headerHam');
const burgerIconBlack2 = document.querySelectorAll('.headerHam__icon--bar');

burgerIconBlack.addEventListener('click', () => {
//   if (760 < window.scrollY) {
    burgerIconBlack.classList.toggle('ClickChangeColor');
//   }
});

// Icon
burgerIconBlack.addEventListener('click', () => {
//   if (760 < window.scrollY) {
    burgerIconBlack2.forEach((bbb) => {
      bbb.classList.toggle('ClickChangeColor2');
    });
//   }
});


// --------------------------------
 //   Click entireWrap area and remove everything 
 bodyMask.addEventListener('click', () => {

    // Hidden menu 
overWrapActive.classList.remove('hiddenMenu');

  // Body Bg
  bodyMask.classList.remove('mask');

// Burger text
  burgerIconBlack.classList.remove('ClickChangeColor');

//   Burger Icon 
  burgerIconBlack2.forEach((bbb) => {
    bbb.classList.remove('ClickChangeColor2');
  });

  // remove Burger Icon class 
    burgerIconTop.classList.remove('active');
    burgerIconMiddle.classList.remove('active');
    burgerIconBottom.classList.remove('active');
 })




 //  Get the scroll number of X and Y
window.addEventListener('DOMContentLoaded', function () {
    window.addEventListener('scroll', function () {
      console.log('横スクロール：' + window.scrollX);
      console.log('縦スクロール：' + window.scrollY);
    });
  });