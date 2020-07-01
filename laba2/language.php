<?php
session_start();
if ($_SESSION['name'] == null) {
    header("Location:main.php");
}
if ($_POST['language']){
    $_SESSION['lang']=$_POST['language'];
}
$log = $_SESSION['name'];
include_once 'welcome.php';
 switch ($_SESSION['lang']){
     case'ru':
         echo '<h2>Здарова</h2>' . $log . '<a href ="logout.php"> <p>Выйти</p> </a>';
         break;
     case'en':
         echo '<h2>Hello</h2>' . $log . '<a href ="logout.php"> <p>Exit</p> </a>';
         break;
     case'ua':
         echo '<h2>Вітаю</h2>' . $log . '<a href ="logout.php"> <p>Гєть</p> </a>';
         break;
     case'it':
         echo '<h2>Ciao</h2>' . $log . '<a href ="logout.php"> <p>Uscire</p> </a>';
         break;

 }
?>