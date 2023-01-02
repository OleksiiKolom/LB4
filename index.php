<?php 
    session_start();
    $username = $_POST['username'];

    if ($username != null ) {
        setcookie("username", $username , time() + 36000);
        $_SESSION["username"] = $username;
        header("Location: index2.php");
        exit;
    }
?>

<html>
    <head>
        <style>
            body {
                background-color: antiquewhite;
            }

            h1 {
                color: purple;
            }
        </style>
    </head>

    <body>
        <h1>Лабараторная работа №4</h1>
        <h2>Вариант 6</h2>
        <h3>Задание:</h3>
        <em>На первой страничке сайта разместить форму для ввода имени пользователя. При переходе на другие странички - выводить это имя. Использовать сессии и кукисы для этого (сопоставить использование этих механизмов). После того как пользователь отправил "имя пользователя", зарегистрировать новую переменную в cookies со значением этого имени и зарегистрировать новую переменную в сессии со значением этого имени. При переходе на другие странички - выводить это имя. Использовать функции для работы с сессиями и cookies и массивы глобальных переменных $_COOKIE и $_SESSION.</em><br><br>

        <form action ="<?php echo($self); ?>" method = "post">
            Введите имя пользователя:
            <input type = "text" name = "username"><br><br>
            <input type = "submit" value = "Запомнить и перейти">
        </form>
    </body>
</html>