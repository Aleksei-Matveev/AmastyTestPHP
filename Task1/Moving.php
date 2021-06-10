<?php
require_once ('Queen.php');
require_once ('King.php');

session_start();

if ($_SERVER['REQUEST_METHOD'] === "GET") {

    if(isset($_SESSION['queen']))
        $queen = $_SESSION['queen'];
    else {
        $queen = new Queen('1', '1');
        $_SESSION['queen'] = $queen;
    }

    if(isset($_SESSION['king']))
        $king   = $_SESSION['king'];
    else {
        $king = new King('4', '3');
        $_SESSION['king'] = $king;   }


    $result['coord']['queen'] = $queen->getPosition();
    $result['coord']['king'] = $king->getPosition();

    echo json_encode($result);
}

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    print_r($_POST);
    $queen = $_SESSION['queen'];
    $king = $_SESSION['king'];

    if (isset($_POST['coord']) && $_POST['coord'] != '')
        $coord = $_POST['coord'];

    $queen->move($coord['queen'][0], $coord['queen'][1]);
    $king->move($coord['king'][0], $coord['king'][1]);

    $result['coord']['queen'] = $queen->getPosition();
    $result['coord']['king'] = $king->getPosition();

    echo json_encode($result);

}