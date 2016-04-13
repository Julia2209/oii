
<div class="registration">
	<h3>Регистрация: </h3>
	<form id="signform" onSubmit="return checkall()" name="registration-form" method="POST" action="#" >
		<label for="login">Логин * <span id="lable-login"></span></label>
		<div class="login">
			<input class="input-login" id="login" value="" type="text" name="login""/>
		</div>		
		<label for="e-mail">E-mail * <span id="lable-e-mail"></span></label>
		<div class="e-mail-registration">
			<input class="input-e-mail-registration" type="text" id="e-mail" name="e-mail" "/>
		</div>
		<label for="pass">Пароль * <span id="lable-pass"></span></label>
		<div class="pass">
			<input class="pass" type="password" id="pass" name="pass"/>
		</div>
		<label for="password">Повторите пароль * <span id="lable-password"></span></label>
		<div class="password">
			<input class="input-password" type="password" id="password" name="password"/> 
		</div>
        <div id="registrationErrorMessage" style="color:red" hidden>
            <span>This Email alread exists!</span>
        </div>
		<input type="submit" name="submit" id="register" value="Зарегистрироваться"/>
	</form>
</div>

<div class="button-block">
	<button class="button-contact">Зарегистироваться</button>
</div>