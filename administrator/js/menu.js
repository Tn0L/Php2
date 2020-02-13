function openClose() {
    var nav = document.getElementById('sidebar');
    if (nav.style.display.match("none")) {
        nav.style.display = "block";
    } else {
        nav.style.display = "none";
    }
  }