
window.onload = function () {
    document.getElementById('signform').addEventListener('submit', function () {
        var errors = [];
        var password = document.getElementById('pass').value;
        var confirmPassword = document.getElementById('password').value;
        var email = document.getElementById('e-mail').value;
        if (!/^([\w\.-]+)@([\w\.-]+)\.([a-z\.]{2,6})$/im.test(email))
            errors.push('Почтовый ящик не отвечает стандартной записи!');
        if (!/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$/.test(password))
            errors.push('Пароль должен содержать как минимум один символ верхнего регистра и как минимум одну цифру!');
        if (password.length < 4 || password.length > 8)
            errors.push('Пароль должен быть длинной 4-8 символов!');
        if (password !== confirmPassword)
            errors.push('Пароли не совпадают!');
        //if (!/^[A-ZА-Я][a-zа-я]{2,}$/.test(name))
        //    errors.push('Name has to start from uppercase, contain only alphabetical characters and be at least 2 characters long!');
        var newWin = window.open('', '');
        if (errors.length !== 0) {
            newWin.document.write('<h2 style="color: red">Список ошибок валидации:</h2>');
            errors.forEach(function (element) {
                newWin.document.write(element + '<br/>');
            }, this);
        } else {
            newWin.document.write('<h2 style="color: green">Succeded!</h2>');
        }
    });
}
//function validateEmail(){

//	var x = document.getElementById('e-mail').value;
//	var atpos=x.indexOf("@");
//	var dotpos=x.lastIndexOf(".");

//	if(atpos<1 || dotpos < atpos+2 || dotpos+2>=x.length){

//		document.getElementById('lable-e-mail').innerHTML = '(некоректный)';
//		return false;
//	} else {
//		document.getElementById('lable-e-mail').innerHTML = '';
//		return true;
//	}
//}

//function validateName(){

//	var x=document.getElementById('name').value;

//	if (x.length < 3) {

//		document.getElementById('lable-name').innerHTML = '(мин. 2 символа)';
//		return false;

//	} else {

//		document.getElementById('lable-name').innerHTML = '';
//		return true;
//	}
//}

//function validateSurname(){

//	var x=document.getElementById('surname').value;

//	if (x.length < 3) {

//		document.getElementById('lable-surname').innerHTML = '(мин. 2 символа)';
//		return false;

//	} else {

//		document.getElementById('lable-surname').innerHTML = '';
//		return true;
//	}
//}
//function validatePass(){

//	var x1 = document.getElementById('pass').value;
//	var x2 = document.getElementById('password').value;

//	if (!/^(?=.*\d)(?=.*[A-Z])(?=.*[a-z]){4,8}$/.test(pass)) {
//	    document.getElementById('lable-pass').innerHTML = '(пароль должен содержать хотябі один символ верхнего регистра)';
//	//}
//	//if (x1 != x2){

//	//	document.getElementById('pass').innerHTML += '(пароли не совпадают)';
//	//	document.getElementById('password').innerHTML = '(пароли не совпадают)';
//	//	return false;

//	} else {

//		document.getElementById('pass').innerHTML = '';
//		document.getElementById('password').innerHTML = '';

//		return true;

//	}

//}
function checkall(){

	if(validateEmail() && validateName()) return true;
	else return false;

}

$(document).ready(function () {
    $("#e-mail").blur(function () {
        var _email = $("#e-mail").val();
        var emailExists = $.ajax({
            type: "GET",
            url: 'ApiController.php',
            data: { functionName: 'emailExists', email: _email},
            success: function (data) {
                if (data === 'true') {
                    $("#registrationErrorMessage").show();
                    $("#register").prop('disabled', true);
                } else {
                    $("#registrationErrorMessage").hide();
                    $("#register").prop('disabled', false);
                }
            }
        });
    });

    $("#register").click(function () {
        var _email = $("#e-mail").val();
        var _password = $("#pass").val();
        var _username = $("#login").val();
        var emailExists = $.ajax({
            type: "GET",
            url: 'ApiController.php',
            data: { functionName: 'register', email: _email, password: _password, username: _username },
            success: function (data) {
                if (data === '1') {
                    location.href = 'login.php';
                } else {
                    location.reload();
                }
            }
        });
    });
});
