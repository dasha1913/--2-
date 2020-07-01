<?php
session_start();
$log=$_POST['login'];
$pas=$_POST['password'];

$users = [
    ['login' => 'Vasisualiy', 'password' => '12345', 'lang' => 'ru'],
    ['login' => 'Afanasiy', 'password' => '54321', 'lang' => 'en'],
    ['login' => 'Petro', 'password' => 'EkUC42nzmu', 'lang' => 'ua'],
    ['login' => 'Pedrolus', 'password' => 'Cogito_ergo_sum', 'lang' => 'it'],
    ['login' => 'Sasha', 'password' => 'Ignorantia_non_excusat ' ],
];
foreach ($users as $chelovek => $val)
{
    if($val['login'] == $log && $val['password'] == $pas){
        $_SESSION['name']=$log;
        $_SESSION['lang']=$val['lang'];
    }
}
 if($_SESSION['name'] == $log){
     header("Location:language.php");
 }else
     {
     include_once 'main.php';
     echo "Неправильный пароль или логин";
 }
?>

