'use strict'

var modalBtns = [...document.querySelectorAll(".modalBtn")];
modalBtns.forEach(function(btn){
  btn.onclick = function() {
    var modal = btn.getAttribute('open-modal');
    document.getElementById(modal).style.display = "block";
    console.log(modal);
  }
});

var closeBtns = [...document.querySelectorAll(".closeBtn")];
closeBtns.forEach(function(btn){
  btn.onclick = function() {
    var modal = btn.getAttribute('close-modal');
    document.getElementById(modal).style.display = "none";
    console.log(modal);
  }
});

window.onclick = function(event) {
  if (event.target.className === "modal") {
    event.target.style.display = "none";
  }
};