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
// adjusting main content when sidebar is closed
function menuAdjust(){
    let menu = document.getElementById('menu-div')
let sidebar = document.getElementById('sidebar')
let menuIcon = document.getElementById('menu-icon')

let postdiv=document.getElementsByClassName('post-div')
menu.addEventListener("click", () => {
    if (sidebar.style.opacity == 0) {
        sidebar.style.opacity = 1;
        menuIcon.innerHTML = "close"
    } else {
        sidebar.style.opacity = 0;
        menuIcon.innerHTML = "menu"
        sidebar.style.display = "none";
    }

})
}



///closing popup
function popupClose(){
    let popup=document.getElementById('error')
    let close=document.getElementById('closePopup')
    console.log(popup)
    console.log(close)
    close.addEventListener("click",()=>{
        console.log("closedd")
        popup.style.display="none";
        popup.style.zindex="-1";
    })
}
    

//  handling login errors
 