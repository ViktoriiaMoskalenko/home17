<?php
require 'db.php';


$data = $_POST;
if (isset($data['do_signup'])) {

    $errors = array();
    if (trim($data['login']) == '') {
        $errors[] = 'Введите логин!';
    }

    if (trim($data['email']) == '') {
        $errors[] = 'Введите Email!';
    }

    if ($data['password'] == '') {
        $errors[] = 'Введите пароль!';
    }

    if ($data['re-password'] != $data['password']) {
        $errors[] = 'Введите правильно повторный пароль!';
    }
    if (R::count('users', "login = ?", array($data['login'] > 0))) {
        $errors[] = 'Пользователь с таким логином уже существует!';
    }
    if (R::count('users', "email = ?", array($data['email'] > 0))) {
        $errors[] = 'Пользователь с таким Email уже существует!';
    }
    if (empty($errors)) {
        $user = R::dispense('users');
        $user->login = $data['login'];
        $user->email = $data['email'];
        $user->password = password_hash($data['password'], PASSWORD_DEFAULT);
        R::store($user);
        echo '<div style="color: green">Вы успешно зарегистрированы!</div>';
    } else {
        echo '<div style="color: red">' . array_shift($errors) . '</div>';

    }
}
?>

<form action="/message.php" method="POST">
    <p><strong>Ваш логин:</strong></p>
    <p><input type="text" name="login" value="<?php echo @$data['login'] ?>"></p>
    <p><strong>Ваш email:</strong></p>
    <p><input type="email" name="email" value="<?php echo @$data['email'] ?>"></p>
    <p><strong>Ваш пароль:</strong></p>
    <p><input type="password" name="password" value="<?php echo @$data['password'] ?>"></p>
    <p><strong>Повторите пароль:</strong></p>
    <p><input type="password" name="re-password" value="<?php echo @$data['re-password'] ?>"></p>
    <p>
        <button type="submit" name="do_signup">Зарегистрироваться</button>
    </p>
</form>
