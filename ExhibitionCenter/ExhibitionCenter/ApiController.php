<?php
require_once('database/AccountController.php'); 

$functionName = filter_input(INPUT_GET, 'functionName');

if ($functionName == "login") {

    $email = filter_input(INPUT_GET, 'email');
    $password = filter_input(INPUT_GET, 'password');
    echo AccountController::Authenticate($email,$password);

}

if($functionName == "emailExists"){    
    $email = filter_input(INPUT_GET, 'email');
    echo AccountController::EmailExists($email);
}

if($functionName == "register"){
    $email = filter_input(INPUT_GET, 'email');
    $password = filter_input(INPUT_GET, 'password');
    $username = filter_input(INPUT_GET, 'username');

    echo AccountController::Register($email, $password, $username);
}

?>