<?php


$host = "localhost";
$user = "root";
$pass = "";
$dbname = "projeto";
$port = 3306;
// Conexao comaporta
$conn = new PDO("mysql:host=$host;port=$port;dbname=".$dbname, $user, $pass);
// Conexao semaporta
//sconn=new PDO("mysql:host-$host;dbname=".$dbname,$user,$pass);

 