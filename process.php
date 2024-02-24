<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];

    if ($name == "" || $email == "" || $password == "" || $confirmPassword == "") {
        echo "Ошибка: Пожалуйста, заполните все поля.";
    } elseif ($password != $confirmPassword) {
        echo "Ошибка: Пароли не совпадают.";
    } else {
        // Хеширование пароля
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Данные для записи в файл
        $data = "Имя: " . $name . "\nEmail: " . $email . "\nХешированный пароль: " . $hashedPassword . "\n\n";

        // Запись в файл
        $filename = "baza.txt";
        file_put_contents($filename, $data, FILE_APPEND);

        echo "Данные успешно сохранены!";
    }
} else {
    echo "Недопустимый запрос!";
}
?>
