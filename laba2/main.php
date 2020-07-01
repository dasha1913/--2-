<?php
session_start();
if ($_SESSION['name'] !== null) {
    header("Location:language.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Моя лаба 2</title>
</head>
<body>
<form method="post" action="profel.php">
        <p>Логин</p>
        <input type="text" required name="login"><br>
        <p>Пароль</p>
        <input type="password"required name="password"><br>
        <button type="submit"  >Вход</button>
</form>
</body>
</html>
