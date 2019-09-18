<?php
require_once 'user_own_exceptions.php';

try {
    $user = new User(
        'igorsimdyanov@gmail.com',
        'password',
        'Игорь',
        'Симдянов');

    echo $user->password;
}
catch(Exception $exp)
{
    echo 'ExceptionSQL-исключение '.get_class($exp).'<br />';
    // Передача исключения далее по каскаду
    throw $exp;
}
catch(AttribueException $exp)
{
    echo 'AttribueException-исключение';
}
catch(PasswordException $exp)
{
    echo 'PasswordException-исключение';
}
