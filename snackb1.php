<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snacks A</title>
</head>
<body>

    <h1>
        PHP Snacks - Blocco A
    </h1>

    <h4>
        Snack 7:
    </h4>

    <p>
        Creare un array contenente qualche alunno di un'ipotetica classe.
        Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
        Stampare Nome, Cognome e la media dei voti di ogni alunno.
    </p>

    <?php
    $class =
        [
            [
                "name" => "Walter",
                "surname" => "White",
                "votes" => [
                    "english" => 9,
                    "math" => 7,
                    "chemistry" => 10
                ]
            ],
            [
                "name" => "Giovanni",
                "surname" => "Giorgio",
                "votes" => [
                    "english" => 8,
                    "math" => 2.5,
                    "chemistry" => 4
                ]
            ],
            [
                "name" => "Jessy",
                "surname" => "Pinkman",
                "votes" => [
                    "english" => 8,
                    "math" => 5.5,
                    "chemistry" => 8.5
                ]
            ],
            [
                "name" => "Jack",
                "surname" => "Ripper",
                "votes" => [
                    "english" => 10,
                    "math" => 9,
                    "chemistry" => 9
                ]
            ],
            [
                "name" => "Jane",
                "surname" => "Austen",
                "votes" => [
                    "english" => 10,
                    "math" => 4,
                    "chemistry" => 2
                ]
            ],
        ];
    ?>

    <ul>
        <?php for ($i=0; $i < count($class) ; $i++) { ?>
            <li>
                <?php
                    $student = $class[$i];
                    $studentVotesSum = array_sum($student['votes']);

                    // for ($k=0; $k < count($studentVotes); $k++) {
                    //     $studentVotesSum += $studentVotes[$k];
                    // }

                    $studentAverage = round($studentVotesSum / count($student['votes']), 1);

                    echo $student['name'] . ' ' . $student['surname'] . ' ' . $studentAverage ;
                ?>
            </li>
        <?php } ?>
    </ul>

    <hr>
    <hr>
    <hr>

    <?php
        $longParagraph = "Call me Ishmael. Some years ago—never mind how long precisely—having little or no money in my purse, and nothing particular. to interest me on shore, I thought I would sail about a little and see the watery part of the world. It is a way I have of driving off the spleen and. regulating circulation. Whenever I find myself growing grim about the mouth; whenever it is a damp, drizzly November in my soul; whenever I find myself involuntarily pausing before coffin warehouses, and bringing up the rear of every funeral I meet; and especially .whenever my hypos get such an upper hand of me, that it requires a strong moral principle to prevent me from deliberately stepping into the. street, and methodically knocking people’s hats off—then, I account it high time to get to sea as soon as I can. There is nothing surprising in this. If they but knew it, almost all men in their degree,. some time or other, cherish  very nearly the same feelings towards the ocean with me.";

        $splittedParagraph = explode('.', $longParagraph);

        // var_dump($splittedParagraph);
    ?>

    <h2>
        Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi.
        Ogni punto un nuovo paragrafo.
    </h2>

    <?php for ($i=0; $i < count($splittedParagraph) ; $i++) { ?>
        <p>
            <?php
                echo $splittedParagraph[$i];
            ?>
        </p>
    <?php } ?>

    <hr>
    <hr>
    <hr>


    <?php
        $numbers = [];

        while ( count($numbers) < 15){
            $randomNumber = rand(1,100);
            if (!in_array($randomNumber, $numbers)){
                $numbers[] = $randomNumber;
            }
        }

        var_dump($numbers);
    ?>

    <h2>
        Snack 4:
    </h2>
    <p>
        Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
    </p>



    <hr>
    <hr>
    <hr>


    <?php


    $matches =  [
        [
            'team1' => 'Acqua S.Bernardo Cantù',
            'team2' => 'Oriora Pistoia',
            'point_team_1' => 70,
            'point_team_2' => 45
        ],
        [
            'team1' => 'Fortitudo Pompea Bologna',
            'team2' => 'Dolomiti Energia Trentino',
            'point_team_1' => 82,
            'point_team_2' => 83
        ],
        [
            'team1' => 'Pallacanestro Trieste',
            'team2' => 'Virtus Roma',
            'point_team_1' => 72,
            'point_team_2' => 33
        ],
        [
            'team1' => 'Openjobmetis Varese',
            'team2' => 'Germani Basket Brescia',
            'point_team_1' => 101,
            'point_team_2' => 99
        ],
        [
            'team1' => 'Jaguars Vipiteno',
            'team2' => 'Aquile Como',
            'point_team_1' => 101,
            'point_team_2' => 99
        ],
        [
            'team1' => 'Torelli Ostia',
            'team2' => 'Uscite Orte',
            'point_team_1' => 101,
            'point_team_2' => 99
        ]
	];

    ?>
    <h2>
        Snack 2:
    </h2>
    <p>
        Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
        che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero.
        Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
    </p>


    <?php
        $name = $_GET['name'];
        $mail = $_GET['mail'];
        $age = $_GET['age'];

        if ( (strlen($name) > 3)
            && ( strpos($mail, '@')>0  && strpos($mail, '.') > 3 )
            && ( is_numeric($age) ) ){
                echo "Accesso riuscito";
            } else {
                echo "Accesso negato";
            }

    ?>


    <hr>
    <hr>


    <h2>
        Snack 1:
    </h2>
    <p>
        Creiamo un array di array contenente le partite di basket di un’ipotetica tappa del calendario.
        Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
        Stampiamo a schermo tutte le partite con questo schema.
        Olimpia Milano - Cantù | 55-60
    </p>
    <pre>
        Olimpia Milano - Cantù | 55-60
    </pre>

    <ul>
        <?php for ($i=0; $i < count($matches); $i++) {  ?>
            <li>
                <?php
                echo $matches[$i]['team1'] . ' - ' . $matches[$i]['team2'] . ' | ' . $matches[$i]['point_team_1'] . '-' . $matches[$i]['point_team_2'] ;
                ?>
            </li>
        <?php }  ?>
    </ul>
</body>
</html>