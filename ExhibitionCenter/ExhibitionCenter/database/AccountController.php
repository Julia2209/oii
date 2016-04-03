<?php
require_once('DatabaseContext.php'); 

class AccountController
{
    public static function Authenticate($email, $password){
        $result = DatabaseContext::Execute(DatabaseContext::UserQuery($email, $password));

        if(mysql_fetch_array($result)){
            return  'true';
        }
        return 'false';
    }

}

?>