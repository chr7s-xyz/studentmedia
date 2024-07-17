// creating options for user to view or hide passwords in register.php
function togglePassword(){
    var gPassword=document.getElementById("password");
    if(gPassword.type === "password"){
        gPassword.type="text";
    }else{
        gPassword.type="password";
    }
}
function togglePassword2(){
    var gPassword=document.getElementById("confirmPassword");
    if(gPassword.type === "password"){
        gPassword.type="text";
    }else{
        gPassword.type="password";
    }
}




// HANDLING MENU ICON
let menu = document.getElementById('menu-div')
let sidebar = document.getElementById('sidebar')
let menuIcon = document.getElementById('menu-icon')

menu.addEventListener("click", () => {
    if (sidebar.style.opacity == 0) {
        sidebar.style.opacity = 1;
        menuIcon.innerHTML = "close"
    } else {
        sidebar.style.opacity = 0;
        menuIcon.innerHTML = "menu"
    }

})

