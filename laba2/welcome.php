<?php
session_start();
if ($_SESSION['name'] == null) {
    header("Location:main.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Моя лаба 2</title>
</head>
<body>
<form method="post" action="language.php">
        <p>Выберите язык</p>
            <select name="language">
                <option value="ru">Русский язык</option>
                <option value="ua">Украинский язык</option>
                <option value="en">English</option>
                <option value="it">Italian</option>
            </select>
        <button type="submit">Применить</button>
</form>
</body>
</html>