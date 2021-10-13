<?php 

    function connect()
    {
        try
        {
            $db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.'',DB_LOGIN,DB_PASSWORD);

            $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $db->exec("SET CHARACTER SET utf8");
            return $db;
        }

        catch(Exception $errors)
        {
            echo "Message d'erreur :".$error->getMessage()."<br>";    
            echo "code d'erreur :".$error->getCode();
            die();
        }
    }

    function disconnect()
    {
        $db=null;
    }
?>