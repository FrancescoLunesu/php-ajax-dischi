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
                <p> <?php echo $database["poster"]; ?></p>
            </div>

            <?php }
             ?>
        </div>
    </main>

</body>
</html>
