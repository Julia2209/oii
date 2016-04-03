<?php
require_once('database/AccountController.php'); 

$functionName = filter_input(INPUT_GET, 'functionName');

if ($functionName == "login") {

    $email = filter_input(INPUT_GET, 'email');
    $password = filter_input(INPUT_GET, 'password');
    echo AccountController::Authenticate($email,$password);

}
?>