const navbar = document.querySelector(".navbar");


console.log('yo');
navbar.addEventListener("scroll", () => {
    navbar.classList.add("navbar-scroll");
    console.log("scroll");
});