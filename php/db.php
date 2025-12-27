<?php
try {
    $conn = new PDO("mysql:host=mysql-8.0;dbname=db_korochka_net", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "ошибка подключения " . $e->getMessage();
}