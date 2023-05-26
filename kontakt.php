<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Kontakt Vinoteque | Book festlokale eller stil spørgsmål</title>
    <meta name="title" content="Kontakt Vinoteque | Book festlokale eller stil dine spørgsmål">
    <meta name="description" content="Ønsker du at booke vores festlokale eller har du spørgsmål vedr. Vinoteque? Kontakt os for information og personlig assistance. Vi står klar til at hjælpe!">

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <?php include "includes/head.php"; ?>

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>

<?php include "includes/navigation.php"; ?>

<!-- Her skal sidens indhold ligge -->
<div class="container-fluid g-0 d pt-5">
    <div>
        <div class="position-relative">
            <img src="images/kontakt_mobil.jpg" alt="Kontakt Vinoteque for at få svar på spørgsmål eller bestille en unik oplevelse" class="w-100 d-lg-none">
            <img src="images/kontakt_vinoteque.jpg" alt="Kontakt Vinoteque og få svar på dine spørgsmål" class="w-100 d-none d-lg-block">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center overlay">
                <div class="text-center text-white row pt-3 pt-lg-5">
                    <h1>Kontakt</h1>
                    <p class="lead">Vinoteque Marittima</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Drue Top -->
<div class="container-fluid">
    <img src="images/drue_top.jpg" alt="" class="img-fluid h-100">
</div>


<!-- kontakt info -->
<div class="container">
    <div class="row">
        <div class="text-center pb-1 pb-lg-3">
            <h5 class="text-primary">Kontakt info.</h5>
            <h2>Spørgsmål / Ønsker</h2>
            <p class="lead">Har du spørgsmål eller ønsker at booke bord, Event eller festlokale, så kontakt os endelig.</p>
        </div>

        <div class="col-12 col-lg-4 py-3 text-center">
            <i class="fa-solid fa-phone fa-3x"></i>
            <p class="lead pb-4">(+45) 54 85 55</p>
            <i class="fa-solid fa-envelope fa-3x"></i>
            <p class="lead">vinoteque-m@rius.dk</p>
        </div>
        <div class="col-12 col-lg-4 py-3 text-center">
            <i class="fa-solid fa-location-dot fa-3x"></i>
            <p class="lead">Vinoteque Marittima<br>Ndr. Kajgade / Sandgade (Kajen)<br>
                4800 Nykøbing Falster</p>
            <a href="vej.php" class="btn btn-secondary text-white btn-link ms-lg-2">Find Vej</a>
        </div>
        <div class="col-12 col-lg-4 pt-5 py-lg-3 text-center">
           <i class="fa-brands fa-facebook fa-3x"></i>
            <p class="lead pb-4">Facebook</p>
            <i class="fa-brands fa-instagram fa-3x"></i>
            <p class="lead">instagram</p>
        </div>
    </div>
</div>

<!-- Drue Bund -->
<div class="container-fluid">
    <img src="images/drue_bund.jpg" alt="" class="img-fluid h-100">
</div>

<!-- kontakt formular -->
<div class="fixedBaggrund vh-100 d-flex justify-content-center align-items-center">
    <div class="form col-auto rounded-3 p-2 p-lg-5 bg-light bg-opacity-75" style="width: 80%;">
        <h2 class="text-uppercase">Skriv en besked</h2>
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
