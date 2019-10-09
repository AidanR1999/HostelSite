function navBurger() {
    var element = document.getElementById("navbar");
    if (element.className === "nav") {
        element.className += " responsive";
    } else {
        element.className = "nav";
    }
}