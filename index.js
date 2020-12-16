function call(x){
	var y = "";
	if(x=="sign") y += "login";
	else y += "sign";
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
		input += "<input type='text' placeholder='Type your name here'>";
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