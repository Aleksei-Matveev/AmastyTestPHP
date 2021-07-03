<?php
require_once('classes/Queen.php');
require_once('classes/King.php');

session_start();

if(empty($_SESSION)) {
    $_SESSION['queen'] = new Queen(1, 1);
    $_SESSION['king'] = new King(4, 3);
}

$response= [];
$chessmans = [];

if ($_SERVER['REQUEST_METHOD'] === "GET") {
    foreach ($_SESSION as $figure) {
        if ($figure instanceof AbstractChessmen) {
            $chessman = $_SESSION[strtolower(get_class($figure))];
            $chessmans[strtolower(get_class($figure))] = $chessman;
        }
    }

    if(isset($_GET['data'])){
        $data = $_GET['data'];
        try {
            $coord = convertCoordinateFromChessBoard($data['coordinate']);
            $_SESSION[$data['figure']]->move($coord['x'], $coord['y']);
        } catch (Exception $e) {
            $response[] = ['status'=>0, 'error'=> $e->getMessage()];
        }
    }

    foreach ($chessmans as $chessman){
        $name = get_class($chessman);
        $response[] = ['figure' => $name, 'coord' => convertCoordinateForChessBoard($chessman)];
    }

    header('Content-Type: application/json;charset=utf-8');
    echo json_encode($response, JSON_UNESCAPED_UNICODE);
}

function convertCoordinateForChessBoard(AbstractChessmen $figure):string{
    return implode('',$figure->getPosition());
}

/**
 * @throws Exception
 */
function convertCoordinateFromChessBoard(string $coordinate):array{

    $q = ['a'=>1,'b'=>2,'c'=>3, 'd'=>4,'e'=>5,'f'=>6,'g'=>7,'h'=>8];
    if(strlen($coordinate) > 2 || !array_key_exists(strtolower($coordinate[0]), $q)) {
        throw new Exception('Неверные координаты');
    }else {
        $arr['x'] = $q[$coordinate[0]];
        $arr['y'] = $coordinate[1];
    }
    return $arr;
}