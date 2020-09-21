<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="dist/app.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js" integrity="sha512-zT3zHcFYbQwjHdKjCu6OMmETx8fJA9S7E6W7kBeFxultf75OPTYUJigEKX58qgyQMi1m1EgenfjMXlRZG8BXaw==" crossorigin="anonymous"></script>
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

        </div>

        <script id="entry-template" type="text/x-handlebars-template">
            <div class="box">
                <div class="poster">
                    <img src="{{{poster}}}" alt="Logo">
                </div>
                <h3>{{{title}}}</h3>
                <p>{{{author}}}</p>
                <p>{{{year}}}</p>
            </div>
        </script>

    </main>

    <script src="src/app.js" charset="utf-8"></script>

</body>
</html>
