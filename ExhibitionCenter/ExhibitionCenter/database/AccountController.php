<?php
require_once('DatabaseContext.php'); 

class AccountController
{
    public static function Authenticate($email, $password){
        $result = DatabaseContext::Execute(DatabaseContext::UserQuery($email, $password));

        if($row = mysql_fetch_array($result)){
            return $row['UserName'];
        }
        return 'false';
    }

    public static function EmailExists($email){
        $result = DatabaseContext::Execute(DatabaseContext::EmailExists($email));

        if(mysql_fetch_array($result)){
            return 'true';
        }
        return 'false';
    }

    public static function Register($email, $password, $username){
        echo DatabaseContext::Execute(DatabaseContext::Register($email, $password, $username));
    }

}

?>