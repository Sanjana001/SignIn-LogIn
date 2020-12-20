var date, hrs, mins;
date = new Date();
hrs = date.getHours();
mins = date.getMinutes();
var arr = [2,4,6,8,10];
var counter = 0;
function call(x){
    var y = "";
	if(x=="sign") y += "login";
	else y += "sign";
	document.querySelector('.bg-modal').style.display = 'flex';
	document.getElementById(x).style.fontWeight = "bold";
	document.getElementById(x).style.textDecoration = "underline";
	document.getElementById(y).style.fontWeight = "normal";
	document.getElementById(y).style.textDecoration = "none";
	fun(x);
	write(x);
}
function write(x){
	var name = "";
	var input = "";
	if(x=="sign"){
		name += "Name:";
		input += "<input type='text' placeholder='Type your name here' id='text' name='name' onblur='checkName()'>";
	}
	document.getElementById("name").innerHTML = name;
	document.getElementById("input").innerHTML = input;
}
function fun(x){
	var str = "";
	if(x=="sign") str += "sign.php";
	else str += "login.php";
    document.getElementById("form").action = str;
}
function block(){
	document.querySelector('.bg-modal').style.display = 'none';
}
function time(){
   var date1 = new Date();
   var hr1 = date1.getHours();
   var min1 = date1.getMinutes();
   var diff = min1 - mins;
   if(diff>0 && diff>=arr[counter]){
   	   document.querySelector('.bg-modal').style.display = 'flex';
   	   counter++;
   	   mins = min1;
   }
}
function checkName(){
   var name = document.getElementById("text").value;
   var regix = /[A-Za-z]$/;
   if(!regix.test(name)){
	   alert("Wrong Format");
   }
}
function checkEmail(){
   var email = document.getElementById("email").value;
   var regix = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
   if(!regix.test(email)) alert("Wrong Format");
}
