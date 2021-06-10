<?php
require_once ('Queen.php');
require_once ('King.php');

session_start();

if ($_SERVER['REQUEST_METHOD'] === "GET"){

    if(isset($_SESSION)){
        if(isset($_SESSION['queen']))
            $queen = $_SESSION['queen'];
        else {
            $queen = new Queen('1', '1');
            $_SESSION['queen'] = $queen;
        }
    }
    if(isset($_SESSION['king']))
        $king   = $_SESSION['king'];
    else {
        $king = new King('4', '3');
        $_SESSION['king'] = $king;
    }




    $board= [
    ['figure' => 'queen', 'coord' => convertCoordinateForChessBoard($queen)],
        ['figure' => 'king', 'coord' => convertCoordinateForChessBoard($king)]
    ];


    echo json_encode($board);
}




function convertCoordinateForChessBoard(AbstractChessmen $figure):string{
//    $q = ['a','b','c', 'd','e','f','g','h'];
//    $arr = $figure->getPosition();
//    return sprintf('%s%s', $q[$arr[0]-1], $arr[1]);
    return implode('',$figure->getPosition());
}



