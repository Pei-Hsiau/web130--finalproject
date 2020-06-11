var attempt = 3; // Variable to count number of attempts.
// Below function Executes on click of login button.
function validate(){
var username = document.getElementById("inputUsername").value;
var password = document.getElementById("inputPassword").value;
if ( username == "Test2020" && password == "Test013"){
alert ("Login successfully");
}
else{
attempt --;// Decrementing by one.
alert("You have left "+attempt+" attempt;");
// Disabling fields after 3 attempts.
if( attempt == 0){
document.getElementById("inputUsername").disabled = true;
document.getElementById("inputPassword").disabled = true;
document.getElementById("submit").disabled = true;
return false;
}
}
}
