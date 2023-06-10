'use strict';

document.addEventListener("DOMContentLoaded", function() {
  var dropdownToggle = document.querySelector(".dropdown .btn");
  var dropdownMenu = document.querySelector(".dropdown-menu");
  
  dropdownToggle.addEventListener("click", function() {
    dropdownMenu.style.display = (dropdownMenu.style.display === "block") ? "none" : "block";
  });
});

document.addEventListener("DOMContentLoaded", function() {
  var toggle = document.querySelector(".navbar-menu-btn");
  var menu = document.querySelector(".dropdown-menu");

  toggle.addEventListener("click", function() {
    menu.style.display = (menu.style.display === "block") ? "none" : "block";
  });
});

// MOBILE NAVBAR TOGGLE
const navbar = document.getElementById("navbar");
const openMenu = document.getElementById("open-menu");
const closeMenu = document.getElementById("close-menu");

openMenu.addEventListener("click", function() {
  navbar.classList.toggle("active");
})