<?php

class ConfigDB
{
    public static function GetConnection()
    {
        try
        {
            $dns="mysql:dbname=loginregiser(parkingapp)";
            $user="root";
            $pw="";
            $conn=new PDO($dns,$user,$pw);
            return $conn;
        }
        catch(Exception $e)
        {
            throw $e;
        }
    }
}
?>