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
    public static function UserQuery($email, $password){
        return "SELECT * from Users where Email = '$email' and Password = '$password'";
    }
}


?>