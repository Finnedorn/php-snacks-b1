<?php
include __DIR__ ."/./model/data.php";
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>experiment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <main class="m-auto mt-5 text-center container py-2 ">
        <!--snack01-->
        <div class="container m-auto py-4 ">
            <h2>
                Snack-01
            </h2>
            <!-- con la funzione foreach posso ciclare e conseguentemente stampare) tutti gli elementi in un array -->
            <!-- in questo caso ciclo tutti gli elementi che ho nell' array matches in data.php -->
            <!-- è necessario specificare l'array seguito da as e da un termine placeholder che mi designi la key -->
            <?php foreach($matches as $match_details) { ?>
                <div>
                    <!-- echo è una funzione php che stampa il contenuto della variabile indicata  -->
                    <?php echo "{$match_details['team(home)']} - {$match_details['team(guest)']} || {$match_details['score(home)']} - {$match_details['score(guest)']}"   ?>
                </div>
            <?php } ?>
        </div>
        <!--snack02-->
        <div class=" container m-auto py-4 ">
            <h2>
                Snack-02
            </h2>
            <!-- questo form mi rimanda alla pagina stessa -->
            <!-- ho creato un form che mi  raccolga dati di nome, mail ed età-->
            <form action="index.php" method="GET" class="d-flex flex-column w-25 m-auto">
                <label for="name">nome</label>
                <input type="text" name="name">
                <label for="mail">mail</label>
                <input type="text" name="mail">
                <label for="text">age</label>
                <input type="text" name="age">
                <button type="submit" class="btn btn-success my-3">entra</button>
            </form>
                <!-- if in php funziona proprio come in js  -->
                <!-- isset è una funzione php che va in combo con if  -->
                <!-- si traduce in: " se ho questo dato tramite GET dal form...." -->
            <?php if ((isset($_GET["name"])) && (isset($_GET["mail"])) && (isset($_GET["age"]))) { 
                // "...allora attribuiscilo a questa variabile!"
                // questo modo mi permette di avere una variabile che viene dichiara solo al momento in cui ho un elemento in cui inserirla
                // se non avessi agito in questo modo il sistema vedendo la veriabile $name vuota senza alcun tipo di contenuto ancora inviato dal form 
                // mi avrebbe risposto con un errore
                $name = $_GET["name"];
                $mail = $_GET["mail"];
                $age = $_GET ["age"];
                ?>
                <!-- sempre dentro all'if ho un altro check: se la lunghezza della var $name è maggiore di 3 -->
                <!-- e se la var $mail include una @  -->
                <!-- e se la var $mail include un . -->
                <!-- e se il dato della var $age è di tipo numerico -->
                <?php if((strlen($name) > 3) && (str_contains($mail, "@")) && (str_contains($mail, ".")) && (is_numeric($age))) { ?>
                    <div class=" text-success pt-3">
                        Accesso Riuscito!!!
                    </div>
                <?php } else { ?>
                    <div class=" text-danger pt-3">
                        Accesso Negato!!!
                    </div>
                <?php } ?>
            <?php }?>
        </div>
    </main>
</body>
</html>