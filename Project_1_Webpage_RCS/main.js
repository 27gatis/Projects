


var password = document.getElementById("password"), 
retype_password = document.getElementById("retype_password");

function validatePassword(){
if(password.value != retype_password.value) {
retype_password.setCustomValidity("Passwords don't match!");
} else {
retype_password.setCustomValidity('');
}
// alert('Success!');
}

password.onchange = validatePassword;
retype_password.onkeyup = validatePassword;