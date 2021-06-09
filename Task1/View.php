<?php
require_once ('Queen.php');
require_once ('King.php');


if (isset($_GET) ) {
    $queen = new Queen('a','1');
    $king = new King('d', '3');

    $result['chess'][] = ["name"=>'queen',"coord"=>$queen->getPosition()];
    $result['chess'][] = ["name"=>'king',"coord"=>$king->getPosition()];

    echo json_encode($result);
}