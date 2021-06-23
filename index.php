<?php include "database.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <nav>
            <div id="logo">
                <img src="https://loghi-famosi.com/wp-content/uploads/2020/09/Google-Logo.png" alt="">
                <span>Privacy e termini</span>
            </div>
            <div>
                <ul>
                    <li>Introduzione</li>
                    <li>Norme sulla privacy</li>
                    <li>Termini di servizio</li>
                    <li>Tecnologie</li>
                    <li>Domande frequenti</li>
                </ul>
            </div>
        </nav>
    </header>
    <hr>
    <main>

        <div>
            <?php foreach ($argomento as $value) { 
              $risp = explode(';', $value['risposta']);
              //var_dump($risp);
            ?>      
            <div class='argomenti'>
                <h2><?php echo $value['domanda']?></h2>
                <p><?php echo $risp ?></p>
            </div>

            <?php } ?>
        </div>
    </main>
</body>

</html>