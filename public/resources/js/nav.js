let menuIcon = $(".menu_icon");
let menuModal = $(".nav_menu__resp");


$(".menu__close").click(function(){
    menuModal.animate({left: "-100%"});
    document.body.style.height = "auto";
    document.body.style.overflow = "auto";
    // document.querySelector(".menu_icon").style.visibility = "visible";

})

$(window).click(function(e) {
    if(e.target.className === "nav_menu__resp"){
        menuModal.animate({left: "-100%"});
        document.body.style.height = "auto";
    document.body.style.overflow = "auto";
    // document.querySelector(".menu_icon").style.visibility = "visible";
    }
});

menuIcon.click(function(){
    menuModal.animate({left: "0%"});
    document.body.style.height = "100vh";
    document.body.style.overflow = "hidden";
    // document.querySelector(".menu_icon").style.visibility = "hidden";
});

function colorRed() {

    for(let i = 0; i < document.querySelectorAll(".resp_menu__link--active:link path").length; i++){
        document.querySelectorAll(".resp_menu__link--active:link path")[i].setAttribute("fill", "#dcbd56");
        if (document.querySelectorAll(".resp_menu__link--active:link polygon").length > 0){
            document.querySelectorAll(".resp_menu__link--active:link polygon")[i].setAttribute("fill", "#dcbd56");
        }
    }
    
}

colorRed();