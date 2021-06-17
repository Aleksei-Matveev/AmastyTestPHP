<?php
function getTestStroop (): array
{
    static $result = array();
    $colors = ['red', 'blue', 'yellow', 'magenta', 'green', 'gray', 'pink', 'orange', 'brown', 'violet'];

    $countColors = count($colors)-1;

    $nameColor = $colors[rand(0, $countColors)];
    $colorText = $colors[rand(0, $countColors)];

    if($nameColor === $colorText) getTestStroop();
    $item = [$nameColor=>$colorText];

    array_push($result, $item);
    if(count($result) < 5) getTestStroop();
    $s = $result;
    $result = [];
    return $s;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        li {display: inline;
        padding: 5px;
    </style>
</head>
<body>
    <ul class="hr">
          <?php
          foreach (getTestStroop() as $item=>$key){
            foreach ($key as $color=>$text)
                echo "<li style='color: {$color}'>{$text}</li>";
            }
          ?>
    </ul>

</body>
</html>
