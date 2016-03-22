function validateEmail(){

	var x = document.getElementById('e-mail').value;
	var atpos=x.indexOf("@");
	var dotpos=x.lastIndexOf(".");

	if(atpos<1 || dotpos < atpos+2 || dotpos+2>=x.length){

		document.getElementById('lable-e-mail').innerHTML = '(некоректный)';
		return false;
	} else {
		document.getElementById('lable-e-mail').innerHTML = '';
		return true;
	}
}

function validateName(){

	var x=document.getElementById('name').value;

	if (x.length < 3) {

		document.getElementById('lable-name').innerHTML = '(мин. 2 символа)';
		return false;

	} else {

		document.getElementById('lable-name').innerHTML = '';
		return true;
	}
}

function validateSurname(){

	var x=document.getElementById('surname').value;

	if (x.length < 3) {

		document.getElementById('lable-surname').innerHTML = '(мин. 2 символа)';
		return false;

	} else {

		document.getElementById('lable-surname').innerHTML = '';
		return true;
	}
}
function validatePass(){

	var x1 = document.getElementById('pass').value;
	var x2 = document.getElementById('password').value;

	if (x1 != x2){

		document.getElementById('pass').innerHTML = '(пароли не совпадают)';
		document.getElementById('password').innerHTML = '(пароли не совпадают)';
		return false;

	} else {

		document.getElementById('pass').innerHTML = '';
		document.getElementById('password').innerHTML = '';

		return true;

	}

}
function checkall(){

	if(validateEmail() && validateName()) return true;
	else return false;

}
