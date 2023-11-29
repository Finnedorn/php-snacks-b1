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
            <?php foreach($matches as $match_details) { ?>
                <div>
                    <?php echo "{$match_details['team(home)']} - {$match_details['team(guest)']} || {$match_details['score(home)']} - {$match_details['score(guest)']}"   ?>
                </div>
            <?php } ?>
        </div>
        <!--snack02-->
        <div class=" container m-auto py-4 ">
            <h2>
                Snack-02
            </h2>
            <form action="index.php" method="GET" class="d-flex flex-column w-25 m-auto">
                <label for="name">nome</label>
                <input type="text" name="name">
                <label for="mail">mail</label>
                <input type="text" name="mail">
                <label for="text">age</label>
                <input type="text" name="age">
                <button type="submit" class="btn btn-success my-3">entra</button>
            </form>
            <?php if ((isset($_GET["name"])) && (isset($_GET["mail"])) && (isset($_GET["age"]))) { 
                $name = $_GET["name"];
                $mail = $_GET["mail"];
                $age = $_GET ["age"];
                ?>
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