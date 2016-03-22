function validate(ob){

	var login = document.getElementById('login');
	var pass = document.getElementById('pass');
	var password = getElementById('password');
	var date = ob.date.value.split('-');
	var errors="";

	if(login == "" || pass == "" || password == ""){
		return false;
	}
	if(pass!=password){
		errors += "Passwors not ientity \n";
	}
	if(data[0]<1930){
		errors+="Указана неверная дата рождения! \n";
	}

	if(errors=="")
		return true;
	else{
		alert(errors);
		return false;
	}
}




/*function CheckFields(){

	var checkLogin = false;
	var checkNmae = false;
	var checkSurname = false;
	var checkDay = false;
	var checkMonth = false;
	var checkYear = false;
	var checkPassword = false;
	var ckeckEmail = false;

	ValueLogin = document.getElementById('login');

	if(ValueLogin.value !='' && ValueLogin != underfined){

		checkLogin = true;

		if(ValuePassword.value !='' && ValuePassword != underfined){

			checkPassword = true;
		}

		else alert('Укажите пароль!');
	}

	else alert('Укажите логин!')

	if(checkLogin){

		document.getElementById("registration-form").submit();

	}

}*/