<?
require ('ctrl/fn.php');
require ('ctrl/router.php');
require ('ctrl/index.php');

$dsn = "mysql:host=127.0.0.1;port=3306;dbname=myapp;charset=utf8m4;username=root;password=0000"; //$dsn = "mysql:host=127.0.0.1 ;port=3306;dbname=myapp;charset=utf8m4;username=root

$pdo=new PDO($dsn);
$statement = $pdo->prepare("select * from posts"); 

$statement->execute();
$posts = $statement->fetchAll();
//dd($posts);