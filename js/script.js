let navBar = true;

function navAppear(){
    if (navBar){
        document.getElementById("itemContainer").style.display = "flex"
        document.getElementsByClassName("nav__openBtn")[0].style.display = "none"
        document.getElementsByClassName("nav__mobileBtn")[0].style.display = "block"
        navBar = false
    } else{
        navBar = true;
        document.getElementById("itemContainer").style.display = "none"
        document.getElementsByClassName("nav__openBtn")[0].style.display = "flex"
        document.getElementsByClassName("nav__mobileBtn")[0].style.display = "none"
        document.getElementById("nav__list").style.height = "var(--nav-height)"
        document.getElementsByClassName("nav__image")[0].style.display = "block"
    }
}
