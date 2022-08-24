<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

<body>
    <p>
        <em>
        Creiamo due pagine php. La prima farà una chiamata GET alla seconda attraverso un form. Il form avrà un input di testo in cui inserire il nome di un invitato. Inseriamo nell'altro file una lista di invitati. Se la nostra query è contenuta nella lista degli invitati stampare ok, altrimenti ko. 
        </em>
    </p>

    <br>

    <form action="./response.php" method="get">
        <label for="guest-input">Inserisci il nome dell'invitato</label>
        <input type="text" placeholder="Scrivi il nome dell'invitato" id="guest-input" name="guest">
        <input type="submit" value="Verifica se è presente nella lista degli invitati">
    </form>
    
</body>
</html>