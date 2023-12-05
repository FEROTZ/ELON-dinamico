const hamburger = document.querySelector("#hamburger");
const menu = document.querySelector("#menu");
const closeMenu = document.querySelector("#closeMenu");

hamburger.addEventListener("click", function () {
    console.log("entró")
    menu.classList.toggle("active");
    hamburger.setAttribute("hidden", "");
});

document.addEventListener("click", function (event) {
    if(!menu.contains(event.target) && !hamburger.contains(event.target) || closeMenu.contains(event.target)) {
        menu.classList.remove("active");
        hamburger.removeAttribute("hidden");
    }
})


window.addEventListener("scroll", function () {
    if (window.scrollY > 100) {
        hamburger.classList.add("fixed");
    } else {
        hamburger.classList.remove("fixed");
    }
});
