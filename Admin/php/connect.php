<?php
function connectDB(){
        $server = "localhost";
        $user = "root";
        $pass = "";
        $db = "branch";

        $conn = mysqli_connect($server,$user,$pass,$db);
        if(!$conn){
            echo "Database not Connected!";
        }

        return $conn;
    }
?>