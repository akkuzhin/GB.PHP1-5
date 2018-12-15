<?php

function isUser()
{
    return isset($_COOKIE['auth']);
}

function getUser()
{
    return $_COOKIE['auth'];
}

if (!isUser()) {
    header('Location: /form.php');
    exit;
}


echo 'Добро пожаловать ' . getUser() . '!';
?>

<br>
<br>
<br>
<br>
<a href="/logout.php">Выход</a>
