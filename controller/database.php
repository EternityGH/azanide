<?php
        // K?t n?i database
    function dbConnect(){
        $host = "localhost";
        $ID = "root";
        $pass = "";
        $name = "project";
        
        $conn = new mysqli("$host", "$ID", "$pass","$name");
        
        if($conn->connect_error){
            die("Connection fail");
        }
        
        $conn->set_charset('utf8');
        return $conn;
    }
            
        

?>