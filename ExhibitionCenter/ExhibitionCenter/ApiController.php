<?php
require_once('database/AccountController.php'); 
require_once('database/ProductController.php'); 

$functionName = filter_input(INPUT_GET, 'functionName');

if($functionName == null) {
    $functionName = filter_input(INPUT_POST, 'functionName');
}

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

 if($functionName == "newOrder"){
     $productList   = $_POST["productList"];
     $productList   = json_decode("$productList", true);

    $order = ProductController::AddNewOrder($productList);

    return $order;
}

 if($functionName == "productInfo"){
     $id = filter_input(INPUT_GET, 'id');
     $result = ProductController::GetProductInfo($id);

     $row = mysql_fetch_array($result);
     echo json_encode($row);
 }

?>