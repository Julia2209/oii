$(document).ready(function () {
    $("#submitLogin").click(function (event) {
        event.preventDefault();

        var _email = $("#e-mail").val();
        var _password = $("#pass").val();
        var userExists = $.ajax({
            type: "GET",
            url: 'ApiController.php',
            data: { functionName: 'login', email: _email, password: _password },
            success: function (data) {
                if (data !== 'false') {
                    $.cookie("isLogged", "true", { expires: 1, path: '/' });
                    $.cookie("userName", data, { expires: 1, path: '/' });
                    location.href = 'about-us.php';
                } else {
                    $('.errorArea').show();
                }
            }
        });
    });

    $('#logout').click(function () {
        $.removeCookie('isLogged', { path: '/' });
        location.reload();
    });
});