<?php
if (isset($_POST["coord"]) ) {

    // Формируем массив для JSON ответа
    $result = array(
        'coord' => $_POST["coord"],

    );

    // Переводим массив в JSON
    echo json_encode($result);
}