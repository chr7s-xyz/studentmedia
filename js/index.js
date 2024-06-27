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