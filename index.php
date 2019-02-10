<?php
require 'db.php';
?>
<?php
if (isset($_SESSION['logged_user'])):
    ?>
    Авторизован!
<?php else: ?>
    <a href="/login.php">Авторизация</a><br>
    <a href="/signup.php">Регистрация</a>
    <a href="/new.php">Proba</a>

<?php endif; ?>
