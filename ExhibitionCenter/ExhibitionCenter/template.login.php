
<div class="login">
    <h3>Войти: </h3>
    <form name="loginForm" action="#">
        <label for="e-mail">E-mail * <span id="lable-e-mail"></span></label>
        <div class="e-mail-registration">
            <input class="input-e-mail-registration" type="text" id="e-mail" name="e-mail" />
        </div>
        <label for="pass">Пароль * <span id="lable-pass"></span></label>
        <div class="pass">
            <input class="pass" type="password" id="pass" name="pass" />
        </div>
        <div class="errorArea" style="color: red" hidden>
            <span>Email or password is invalid</span>
        </div>
        <input type="submit" name="submit" id="submitLogin" value="Войти" />
    </form>
</div>

