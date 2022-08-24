<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Foreach</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="styles/style.css">

</head>
<body>
    <h1>PHP Foreach</h1>

    <h2>Livecoding foreach:</h2>

    <p>
        <em>
            Stampare a schermo, attraverso il foreach, tutti gli elementi passati in GET.
        </em>
    </p>

    <ul>
        <?php foreach ($_GET as $key => $value) {  ?>
            <li>
                <?php echo $key . ' - ' . $value; ?>
            </li>
        <?php } ?>
    </ul>




    <hr>
    <hr>
    <hr>



    <p>
        <em>
            Stampare una stringa verde se la variabile password passata in GET è uguale a “Boolean”, altrimenti stampare una stringa rossa.
        </em>
    </p>


    <p>
        <?php
            // Io vado a pesca nel lago $_GET e cerco il pesciolino password
            if (!empty($_GET['password'])){
                if($_GET['password'] == 'Boolean'){ ?>
                    <span class="text-success">
                        <?php echo $_GET['password']; ?>
                    </span>
                <?php }
            } else {  ?>
                <span class="text-danger">
                    <?php echo 'non esiste';  ?>
                </span>
            <?php } ?>
    </p>


    <pre>
        <?php

            $products = [
                "groceries" => [
                    'biscuits',
                    'cornflakes',
                    'milk',
                ],

                "tools" => [
                    'chainsaw',
                    'hammer',
                    'screwdriver'
                ],
            ];

            var_dump($products);

            foreach ($products as $key => $productType) {
                echo "<h5>" . $key . "</h5>";
                foreach ($productType as $product) {
                    echo $product . '
';
                }
            }
        ?>
    </pre>

</body>
</html>