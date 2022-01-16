<?php
    include ('dbconnect.php');
    try 
    {
        global $connString;
        $conn= pg_connect($connString);
        if($conn === false)
        {
            echo "unable to connect to PostgreSQL Sever.";
        }
        else
        {
            echo "Connected to db successfully";
        }
        pg_close($conn);
    }catch(Exception $e){
        echo' ' . $e->getMessage();
    }
?>
