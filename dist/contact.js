(()=>{var e=document.querySelector(".headerHam"),o=document.querySelector(".headerHam__icon--bar.top"),c=document.querySelector(".headerHam__icon--bar.middle"),t=document.querySelector(".headerHam__icon--bar.bottom"),l=document.querySelector(".overWrap"),r=document.querySelector(".entireWrap"),n=document.querySelector(".overWrap");e.addEventListener("click",(function(){o.classList.toggle("active"),c.classList.toggle("active"),t.classList.toggle("active"),l.classList.add("active"),r.classList.toggle("mask"),n.classList.toggle("hiddenMenu")})),window.addEventListener("DOMContentLoaded",(function(){(360<window.scrollY?document.querySelector(".logo").style.color="black":document.querySelector(".logo").style.color="white",390<window.scrollY)&&(document.querySelector(".headerHam").classList.toggle("changeColor"),document.querySelectorAll(".headerHam__icon--bar").forEach((function(e){e.classList.toggle("changeColor")})));window.addEventListener("scroll",(function(){390<window.scrollY?(document.querySelector(".headerHam").classList.add("changeColor"),document.querySelectorAll(".headerHam__icon--bar").forEach((function(e){e.classList.add("changeColor")}))):(document.querySelector(".headerHam").classList.remove("changeColor"),document.querySelectorAll(".headerHam__icon--bar").forEach((function(e){e.classList.remove("changeColor")})))}))})),window.addEventListener("scroll",(function(){360<window.scrollY?document.querySelector(".logo").style.color="black":document.querySelector(".logo").style.color="white"}));var a=document.querySelector(".headerHam"),s=document.querySelectorAll(".headerHam__icon--bar");a.addEventListener("click",(function(){a.classList.toggle("ClickChangeColor")})),a.addEventListener("click",(function(){s.forEach((function(e){e.classList.toggle("ClickChangeColor2")}))})),r.addEventListener("click",(function(){n.classList.remove("hiddenMenu"),r.classList.remove("mask"),a.classList.remove("ClickChangeColor"),s.forEach((function(e){e.classList.remove("ClickChangeColor2")})),l.classList.remove("active"),o.classList.remove("active"),c.classList.remove("active"),t.classList.remove("active")})),window.addEventListener("DOMContentLoaded",(function(){window.addEventListener("scroll",(function(){console.log("横スクロール："+window.scrollX),console.log("縦スクロール："+window.scrollY)}))}))})();