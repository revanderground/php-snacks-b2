<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php

    $posts = [

        '10/01/2019' => [
            [
                'title' => 'Post 1',
                'author' => 'Tito Livio',
                'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur laboriosam provident at, quos, minima omnis voluptas aliquam non optio et dolor amet? Tenetur est aspernatur corporis, nam sed fugit fugiat!'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Cicerone',
                'text' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima molestiae adipisci doloribus alias hic porro, blanditiis sequi magnam error veritatis repellat eum quibusdam maiores voluptatem recusandae ab nihil nam reprehenderit!'
            ],
        ],
        '10/02/2019' => [
            [
                'title' => 'Post 3',
                'author' => 'Marco Aurelio',
                'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos dolor fuga, voluptas neque a facilis mollitia deserunt voluptates consequatur, illum libero animi aspernatur at expedita minima iste architecto corporis laboriosam?'
            ]
        ],
        '15/05/2019' => [
            [
                'title' => 'Post 4',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 4'
            ],
            [
                'title' => 'Post 5',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 5'
            ],
            [
                'title' => 'Post 6',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 6'
            ]
        ],
    ];
?>

<h2>Snack 1:</h2>
<br>

<p>
    <em>
        Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. 
        Stampare ogni data con i relativi post.
        Qui l'array di esempio: https://www.codepile.net/pile/R2K5d68z
    </em>    

</p>

<div class="container">
    <div class="row">
        <div class="col-12 center">
            <?php foreach ($posts as $date => $dailyPosts){ ?>
            <h3> Post del Giorno <?php echo $date?> </h3>
                <?php foreach ($dailyPosts as $post){ ?>
                    <h4><?php echo $post['title']?> </h4>
                    <h6> <?php echo $post['author']?> </h6>
                    <p> <?php echo $post['text']?> </p>
                <?php } ?>
            <?php } ?>

        </div>

    </div>

</div>





    
</body>
</html>