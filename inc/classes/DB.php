<?php

class DB {

    public static function getConnection(){
        $server = 'localhost';
        $dbname= 'login_course';
        $username = 'iClient';
        $password = '6kRop7WXRVAfLrnK'; 
        $dsn = "mysql:host=$server;dbname=$dbname";
        $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
       
        // Create the actual connection object and assign it to a variable
        try {
         $link = new PDO($dsn, $username, $password, $options);
        //  return $link;
            if(is_object($link)){
                echo "Database connected...";
                return $link;
            }
        } catch(PDOException $e) {
            echo "It didnt work, error: ". $e->getMessage(); 
            // header('Location: /view/500.php');
            // exit;
        }
       }
}

?>