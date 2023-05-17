<?php 

 function connect(){
 // 1-connexion vers la BD
 $servername = "localhost";
 $DBuser = "root";
 $DBpasswprd = "";
 $DBname = "blog_db";

 try {
     $conn = new PDO("mysql:host=$servername;dbname=$DBname", $DBuser, $DBpasswprd);
     // set the PDO error mode to exception
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     // echo "Connected successfully";
 } catch (PDOException $e) {
     echo "Connection failed: "/* . $e->getMessage()*/;
 }
 return $conn;
 }
?>