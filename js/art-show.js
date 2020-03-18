//from https://www.w3schools.com/howto/howto_js_sticky_header.asp bc I'm lazy 

// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the header
var header = document.getElementById("h-title");

// Get the offset position of the navbar
var sticky = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("static");
     // header.style.position = 'fixed';
     // header.style.top = 0;
     // header.style.width = "100%";
     // header.style.background = '#fff';
  } else {
    header.classList.remove("static");
  }
}