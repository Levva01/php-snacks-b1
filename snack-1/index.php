<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SNACK 1</title>
</head>
<body>

<!-- 
Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php

    $array = [

        [

            'casa' => 'Warriors',
            'punteggioCasa' => 115,
            'ospiti' => 'Celtics',
            'punteggioOspiti' => 97,

        ],

        [

            'casa' => 'Heat',
            'punteggioCasa' => 140,
            'ospiti' => 'Nuggets',
            'punteggioOspiti' => 75,

        ],

        [

            'casa' => 'Lakers',
            'punteggioCasa' => 91,
            'ospiti' => 'Grizzlies',
            'punteggioOspiti' => 84,

        ],

        [

            'casa' => 'Suns',
            'punteggioCasa' => 104,
            'ospiti' => 'Magic',
            'punteggioOspiti' => 87,

        ],



    ];

    for($i = 0; $i < count($array); $i++){
        echo "<p>{$array[$i]['casa']} {$array[$i]['punteggioCasa']} - {$array[$i]['punteggioOspiti']} {$array[$i]['ospiti']}</p>";
    }



?>
    
</body>
</html>