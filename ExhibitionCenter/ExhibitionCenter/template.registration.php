<div class="registration">
	<h3>Регистрация: </h3>
	<form onSubmit="return checkall()" name="registration-form" method="POST" action="#" >
		<label for="login">Логин * <span id="lable-login"></span></label>
		<div class="login">
			<input class="input-login" id="login" value="" type="text" name="login" onBlur="validateLogin()"></input>
		</div>
		<label for="name">Имя * <span id="lable-name"></span></label>
		<div class="name">
			<input class="input-name" id="name" value="" type="text" name="name" onBlur="validateName()"></input>
		</div>
		<label for="surname">Фамилия * <span id="lable-surname"></span></label>
		<div class="surname">
			<input class="input-surname" type="text" id="surname" name="surname" onBlur="validateSurname()"></input>
		</div>
		<label for="birthday">Дата рождения * <span id="lable-birthday"></span></label>
		<div class="birthday">
			<input class="input-birthday" type="date" id="birthday" name="birthday" onBlur="validateBirthday()"></input>
		</div>
		<label for="e-mail">E-mail * <span id="lable-e-mail"></span></label>
		<div class="e-mail-registration">
			<input class="input-e-mail-registration" type="text" id="e-mail" name="e-mail" onBlur="validateEmail()"></input>
		</div>
		<label for="pass">Пароль * <span id="lable-pass"></span></label>
		<div class="pass">
			<input class="pass" type="password" id="pass" name="pass"></input>
		</div>
		<label for="password">Повторите пароль * <span id="lable-password"></span></label>
		<div class="password">
			<input class="input-password" type="password" id="password" name="password" onBlur="validatePass()"> </input>
		</div>
		<input type="submit" name="submit" id="submit" value="Зарегистрироваться"></input>
	</form>
</div>

<div class="button-block">
	<button class="button-contact">Зарегистироваться</button>
</div>