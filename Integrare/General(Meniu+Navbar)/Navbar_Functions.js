function openSlideMenu(){
    document.getElementById('side-menu').style.width = '300px';
    //document.getElementById('main').style.marginLeft = '300px';
    document.getElementById('navi').style.marginLeft = '300px';
    document.body.style.backgroundColor = "grey";
  }

  function closeSlideMenu(){
    document.getElementById('side-menu').style.width = '0';
    //document.getElementById('main').style.marginLeft = '0';
    document.getElementById('navi').style.marginLeft = '0';
    document.body.style.backgroundColor = "white";
  }
  
// When the user scrolls the page, execute stickyNavbar
window.onscroll = function() {stickyNavbar()};

var header = document.getElementById("NavBar");

// Get the offset position of the navbar
var sticky = header.offsetTop;

function stickyNavbar() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

/*DROPDOWN BUTTON */
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}

  function redirectLogin(){
    location.replace("https://www.google.com")
  }

  function redirectMeniu(){
    location.replace("http://127.0.0.1:5500/Mediudeinvatare")
  }




 