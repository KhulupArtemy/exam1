<?php
    $fullname = $_REQUEST["fullname"];
    $phone = $_REQUEST["phone"];
    $stanok = $_REQUEST["stanok"];

    error_reporting(0);
    $link = mysqli_connect("localhost", "root", "root", "db_variant1");
    mysqli_set_charset($link, "utf8");

    if (!$link) {
        echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
        echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
    exit;
    }
    
    $query=mysqli_query($link, "insert into sales (fullname, phone, stanok) values ('$fullname','$phone','$stanok')");
    if ($query)header("Location: index.php");
    else echo "Error";
    mysqli_close($link);
?>