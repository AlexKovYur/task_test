<!--7 Создайте форму "Авторизация". Сделайте input[type="text"], input[type="password"].
Форма при отправке не должна добавлять данные в адресную строку.
В скрипте завести переменные $login, $password. Если форма отправлена - проверять,
прошел ли человек авторизацию по заданным в $login и $password значениям.
Если вошел - задавать в сессию ключ "LOGIN" и значение "YES".
Если этот ключ задан - вместо формы выводить "Привет, LOGIN!".-->

<?php
session_start();

$login = $_POST['name'] ?? '';
$password = $_POST['password'] ?? '';
$logOut = $_POST['log_out'] ?? '';

if ($login && $password) {
    $_SESSION['LOGIN'] = 'YES';
}

if ($logOut) {
    session_destroy();
    header("Refresh:0");
}

if (empty($_SESSION['LOGIN']) && $_SESSION['LOGIN'] !== 'YES') :
    ?>

    <div class="wrapper-form">
        <form method="post" class="authorization">
            <label for="name">Логин:</label>
            <input type="text" id="name" name="name" placeholder="Введите логин..." required>
            <label for="password">Пароль:</label>
            <input type="password" id="password" name="password" placeholder="Введите пароль..." required>
            <button type="submit">Войти</button>
        </form>
    </div>

<?php else: ?>

    <div class="wrapper-output">
        <span class="output">Привет, LOGIN!</span>
        <form method="post" class="log-out">
            <input type="submit" name="log_out" class="btn-log-out" value="Выйти">
        </form>
    </div>

<?php endif; ?>