<?php
require_once 'db.php';

$data = $_POST;
if (isset ($data['do_login'])) {
    $errors = array();
    $user = R::findOne('users', 'login = ?', array($data['login']));
    if ($user) {
        if (password_verify($data['password'], $user->password)) {
            $_SESSION['logged_user'] = $user;
            echo '<div style="color: green">Вы авторизованы! Можете перейти на <a href="/message.php">главную</a> страницу!</div>';
        } else {
            $errors[] = "Неверно введён пароль!";
        }
    } else {
        $errors[] = "Пользователя с таким логином не существует!";
    }
    if (! empty($errors)) {
        echo '<div style="color: red">' . array_shift($errors) . '</div>';
    }
}

?>

<form action="login.php" method="POST">
    <p><strong>Логин:</strong></p>
    <p><input type="text" name="login" value="<?php echo @$data['login'] ?>"></p>
    <p><strong>Пароль:</strong></p>
    <p><input type="password" name="password" value="<?php echo @$data['password'] ?>"></p>
    <p>
        <button type="submit" name="do_login">Войти</button>
    </p>
</form>
