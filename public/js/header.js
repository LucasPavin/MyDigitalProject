/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!********************************!*\
  !*** ./resources/js/header.js ***!
  \********************************/
var btnContainer = document.getElementById("nav_list");
var btns = btnContainer.getElementsByClassName("btn_nav");

for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function () {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}

console.log("test");
/******/ })()
;