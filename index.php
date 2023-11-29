<?php
include __DIR__ ."/./model/data.php";

if (isset($_GET[""])) {
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>experiment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <header class="m-auto mt-5 text-center container">
        <!--snack01-->
        <?php foreach($matches as $match_details) { ?>
            <div>
                <?php echo "{$match_details['team(home)']} - {$match_details['team(guest)']} || {$match_details['score(home)']} - {$match_details['score(guest)']}"   ?>
            </div>
        <?php } ?>
        <!--snack02-->
        <form action="index.php" method="GET">
            <input type="text" name="name">
            <input type="text" name="mail">
            <input type="text" name="age">
        </form>
    </header>
</body>
</html>