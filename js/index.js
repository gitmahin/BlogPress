let headerMenu = document.querySelector(".header_menu")
let mobileMenu = document.querySelector(".mobile-menu ")
let mobileMenuIcon = document.querySelector(".mobile-menu-icon")
let closeMobileMenu = document.querySelector(".close-m-menu-icon")
let body = document.querySelector("body")
let bodyWidth = document.body.clientWidth
let searchbtn = document.querySelector(".search_wrap")
let searchbox = document.querySelector(".searchform")

let hMaxWidth = headerMenu.clientWidth

console.log(hMaxWidth);

if (hMaxWidth > 715) {
    headerMenu.style.display = "none"
} else {
    headerMenu.style.display = "flex"
    mobileMenuIcon.style.display = "none"
}

if (bodyWidth < 1052) {
    headerMenu.style.display = "none"
    mobileMenuIcon.style.display = "flex"
}

mobileMenuIcon.addEventListener("click", () => {
    mobileMenu.classList.add('open-m-menu')
})

closeMobileMenu.addEventListener("click", () => {
    mobileMenu.classList.remove('open-m-menu')
})

searchbtn.addEventListener("click", () => {
    searchbox.classList.toggle("move-down")
})