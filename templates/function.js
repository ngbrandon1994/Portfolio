function mobileNavs() {
    var x = document.getElementById("mobile-navLinks");
    var header = document.getElementsByClassName("navHeader");
    if (x.style.display === "none") {
      x.style.display = "grid";
    } else {
      x.style.display = "none";
    }
  }