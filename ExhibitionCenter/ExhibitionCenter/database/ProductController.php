<?php
require_once('DatabaseContext.php'); 

class ProductController
{
    public static function GetAllProducts(){
        return DatabaseContext::Execute(DatabaseContext::ProductsQuery());
    }

    public static function AddNewOrder($productList){
        $email = $_COOKIE['userEmail'];
        $orderId = DatabaseContext::Insert(DatabaseContext::AddNewOrder($email));

        return DatabaseContext::Execute(DatabaseContext::AddProductsToOrder($orderId, $productList));
    }

    public static function GetUserOrders($lastDays){
        $date = date('Y-m-d H:i:s', strtotime("-$lastDays days"));
        $email = $_COOKIE['userEmail'];
        return DatabaseContext::Execute(DatabaseContext::GetUserOrders($email, $date));
    }

    public static function GetOrderProducts($orderId){
        return DatabaseContext::Execute(DatabaseContext::GetOrderProducts($orderId));
    }

    public static function GetProductInfo($id){
        return DatabaseContext::Execute(DatabaseContext::GetProductInfo($id));
    }
}

?>