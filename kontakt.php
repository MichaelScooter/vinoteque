<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Sigende titel</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>

<?php include "includes/navigation.php"; ?>

<!-- Her skal sidens indhold ligge -->
<div class="contact vh-100 d-flex justify-content-center align-items-center" style="background-image: url(images/livets_efteraar.jpg)" id="kontakt">
    <div class="form col-auto rounded-3 p-2 p-lg-5 bg-light bg-opacity-75" style="width: 80%;">
        <h2 class="text-uppercase">Kontakt Os</h2>
        <div class="mb-3">
            <label for="navn" class="form-label">Navn</label>
            <input type="text" class="form-control" id="navn" aria-describedby="navnHelp">
            <div id="navnHelp" class="form-text">Indtast dit navn her</div>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Indtast din email her</div>
        </div>
        <div class="mb-3">
            <label for="emne" class="form-label">Emne</label>
            <input type="text" class="form-control" id="emne">
            <div id="emneHelp" class="form-text">Skriv her hvad din henvendelse drejer sig om</div>
        </div>
        <div class="mb-3">
            <label for="besked" class="form-label">Din tekstmeddelelse</label>
            <textarea class="form-control" id="besked" rows="5" style="resize: none"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Send besked</button>
    </div>
</div>

<?php include "includes/footer.php"; ?>



<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
