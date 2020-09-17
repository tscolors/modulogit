<?php
// Variaveis de configuração do banco 
$db_host = 'localhost';
$db_name = 'devsnotes';
$db_user = 'root';
$db_pass = '';

//string de conexão com banco de dados
try
{
     $pdo = new PDO("mysql:dbname=$db_name;host=$db_host",$db_user, $db_pass);
     $array = [
         'error'=>'',
         'result' =>[]
     ];
}
catch(PDOException $e)
{
    echo "ERROR".$e->getMessage();
}
?>