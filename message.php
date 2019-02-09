<form method="POST">
    <textarea placeholder="Введите комментарий!" name="message"></textarea>
    <input type="submit" value="Отправить">
</form>
<style>
    textarea {
        width: 300px;
        height: 150px;
        color: blue;
    }
</style>
<?php
require 'db.php';
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_base = 'home17';
$db_table = "messages";
$mysqli = new mysqli($db_host, $db_user, $db_password, $db_base);

$message = htmlspecialchars($_POST["message"]);

if ($mysqli->connect_error) {
    die('Ошибка : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

$result = $mysqli->query("INSERT INTO " . $db_table . " (message) VALUES ('$message')");

if ($result == true) {
    echo "Информация занесена в базу данных<br>";
    echo $message;
} else {
    echo "Информация не занесена в базу данных";
}
?>
