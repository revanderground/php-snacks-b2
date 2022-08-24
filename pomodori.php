<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pomodori</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

   

    <div class="container">

    <h2>Snack x:</h2>
    
    <p>
        <em>
        Crea un array di 10 array letterali che rappresentano un pomodoro, indicando per ognuna varietà, peso e lunghezza. Calcola quanto pesano tutti i pomodori e la media del peso di tutti i pommidori.
        </em>
    </p>

    
    <?php

        $tomatoes = [

            [
                "type"=>"ciliegino",
                "weight"=>9,
                "size"=>6
            ],

            [
                "type"=>"classico",
                "weight"=>7,
                "size"=>8
            ],

            [
                "type"=>"nasone",
                "weight"=>10,
                "size"=>4
            ],

            [
                "type"=>"cirano",
                "weight"=>6,
                "size"=>6
            ],

            [
                "type"=>"nasone",
                "weight"=>3,
                "size"=>5
            ],

            [
                "type"=>"nasone",
                "weight"=>4,
                "size"=>2
            ],

            [
                "type"=>"ciliegino",
                "weight"=>9,
                "size"=>7
            ],

            [
                "type"=>"ciliegino",
                "weight"=>10,
                "size"=>4
            ],

            [
                "type"=>"ciliegino",
                "weight"=>3,
                "size"=>5
            ],

            [
                "type"=>"classico",
                "weight"=>10,
                "size"=>8
            ],

        ];

        $tomatoesTotalWeight = 0;
        foreach($tomatoes as $tomato){
            $tomatoesTotalWeight += $tomato['weight'];
        }

        echo "Peso totale = " . $tomatoesTotalWeight;
        echo ", in media un pomodoro pesa = " . round( $tomatoesTotalWeight / count ($tomatoes), 2 );

    ?>


    </div>


    
</body>
</html>