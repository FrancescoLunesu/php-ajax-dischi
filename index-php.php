<?php
include "db.php";

// foreach ($database as $database) {
//     // echo $database["title"];
// }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="dist/app.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <title>Dischi</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2F1000logos.net%2Fwp-content%2Fuploads%2F2017%2F08%2FSpotify-Logo.png&f=1&nofb=1" alt="Logo">
        </div>
    </header>
    <main>
        <div class="container">
            <?php
            foreach ($database as $database) {

            ?>
            <div class="box">
                <div class="poster">
                    <img src="<?php echo $database["poster"]; ?>" alt="">
                </div>
                <h3><?php echo $database["title"]; ?></h3>
                <p> <?php echo $database["author"]; ?></p>
                <p> <?php echo $database["year"]; ?></p>
            </div>

            <?php }
             ?>
        </div>
    </main>

</body>
</html>
