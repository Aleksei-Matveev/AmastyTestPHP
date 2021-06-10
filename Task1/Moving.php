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

if ($_SERVER['REQUEST_METHOD'] === "POST"){

    //die( print_r($_POST));


    $king = $_SESSION['king'];
    $queen = $_SESSION['queen'];

    if($data = $_POST['data']){

        switch ($data['figure']){
            case 'king':
                $coord = convertCoordinateFromChessBoard($data['coordinate']);
                $king->move($coord['x'], $coord['y']);
                $_SESSION['king'] = $king;
                break;
            case 'queen':

                $coord = convertCoordinateFromChessBoard($data['coordinate']);
                $queen->move($coord['x'], $coord['y']);
                $_SESSION['queen'] = $queen;
                break;
        }
    }

    $board= [
        ['figure' => 'queen', 'coord' => convertCoordinateForChessBoard($queen)],
        ['figure' => 'king', 'coord' => convertCoordinateForChessBoard($king)]
    ];

    echo json_encode($board);
}


function convertCoordinateForChessBoard(AbstractChessmen $figure):string{
    return implode('',$figure->getPosition());
}
function convertCoordinateFromChessBoard(string $coordinate):array{
    $q = ['a'=>1,'b'=>2,'c'=>3, 'd'=>4,'e'=>5,'f'=>6,'g'=>7,'h'=>8];
    $arr['x'] = $q[$coordinate[0]];
    $arr['y'] = $coordinate[1];
    return $arr;
}



