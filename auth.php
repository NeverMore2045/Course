<?php
$mysql = new mysqli('localhost', 'root', '', 'cours');
if ($mysql->connect_error) {
    die("Connection failed: " . $mysql->connect_error);
}

$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_ENCODED);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_ENCODED);

// Подготовленный запрос для безопасности
$stmt = $mysql->prepare("SELECT * FROM `admins` WHERE `login` = ?");
$stmt->bind_param("s", $login);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 0) {
    echo 'Такого логина в системе нет! <a href="sign-in.php">Повторить</a>';
    $mysql->close();
    exit();
}

$user = $result->fetch_assoc();
$saltedPass = md5($pass . $user['salt']);
$saltednewpas = md5($user['hash'] . $user['salt']);

if ($saltednewpas !== $saltedPass) {
    echo 'Неправильный пароль! <a href="sign-in.php">Повторить</a>';
    $mysql->close();
    exit();
}

setcookie('login', $user['login'], time() + 3600, "/");

$mysql->close();
header('Location: success.php');
exit();
?>
