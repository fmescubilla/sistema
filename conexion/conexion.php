<?php

$servidor="mysql:dbname=empresa;host=127.0.0.1";
$usuario="root";
$password="";

try{
    $pdo=new PDO($servidor,$usuario,$password);
    echo "Conectando...";
}catch(PDOException $e){
    echo "Sin conexion".$e->getMessage();
}


