<?php
class DatabaseContext
{
    public static function Execute($query) {
        $link = mysql_connect('localhost', 'root', '');
        if (!$link) {
            die('Error: ' . mysql_error());
        }

        $db_selected = mysql_select_db('InspirationDB', $link);
        if (!$db_selected) {
            die ('error ' . mysql_error());
        }

        $result = mysql_query($query);

        mysql_close($link);
        return $result;
    }

    public static function Insert($query) {
        $link = mysql_connect('localhost', 'root', '');
        if (!$link) {
            die('Error: ' . mysql_error());
        }

        $db_selected = mysql_select_db('InspirationDB', $link);
        if (!$db_selected) {
            die ('error ' . mysql_error());
        }

        mysql_query($query);
        $result = mysql_insert_id($link);
        mysql_close($link);
        return $result;
    }

    public static function UserQuery($email, $password){
        return "SELECT * from Users where Email = '$email' and Password = '$password'";
    }
    public static function EmailExists($email){
        return "SELECT * from Users where Email = '$email'";
    }
    public static function Register($email, $password, $username){
        return "INSERT INTO USERS(Email, Password, UserName) Values('$email', '$password', '$username')";
    }

    public static function ProductsQuery(){
        return "SELECT * from Products";
    }

    public static function AddNewOrder($email){
        $date = date('Y-m-d H:i:s');
        return "Insert into Orders(Date, UserId) select '$date', Id from Users where Email='$email'";
    }

    public static function AddProductsToOrder($orderId, $productList){
        $values = "";
        foreach($productList as $p){
            $values=$values."(".$orderId.",".$p."),";
        }
        $values = substr($values,0,-1);
        return "Insert into ProductsInOrder(OrderId,ProductId) Values".$values;
    }

    public static function GetUserOrders($email, $date){
        return "Select Id, Date from Orders where UserId IN (select Id from Users where Email='$email') AND Date >= '$date'";
    }

    public static function GetOrderProducts($orderId){
        return "SELECT ProductId as 'Id', Name, Price from ProductsInOrder, Products where ProductId=Products.Id AND OrderId = $orderId";
    }

    public static function GetProductInfo($id){
        return "Select * from Products where Id=$id";
    }
}


?>