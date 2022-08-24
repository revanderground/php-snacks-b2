<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Response snack2</title>
</head>
<body>
    <?php 
        $guests=array(
            'Walker',
            'Thompson',
            'Anderson',
            'Johnson',
            'Tremblay',
            'Peltier',
            'Cunningham',
            'Simpson',
            'Mercado',
            'Sellers'
        );
        $guest = $_GET['guest'];

        if (in_array($guest, $guests)){
            echo "ok";
        } else{
            echo "ko";
        }
    ?>
</body>
</html>