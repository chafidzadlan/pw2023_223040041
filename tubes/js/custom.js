'use strict';

document.addEventListener("DOMContentLoaded", function() {
  var dropdownToggle = document.querySelector(".dropdown .btn");
  var dropdownMenu = document.querySelector(".dropdown-menu");
  
  dropdownToggle.addEventListener("click", function() {
    dropdownMenu.style.display = (dropdownMenu.style.display === "block") ? "none" : "block";
  });
});
