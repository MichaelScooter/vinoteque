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

    <?php include "includes/head.php"; ?>


    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>
<?php include "includes/navigation.php"; ?>

<!-- Her skal sidens indhold ligge -->

<!-- Hero Sektion -->
<div class="container-fluid g-0 d pt-5">
    <div>
        <div class="position-relative">
            <img src="images/gin_smagning_mobil.jpg" class="w-100 d-lg-none pt-5">
            <img src="images/gin_smagning_vinoteque.jpg" class="w-100 d-none d-lg-block">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center overlay">
                <div class="text-center row pt-3 pt-lg-5">
                    <h1 class="text-white">Gin Smagning</h1>
                    <p class="lead text-white">Prøv alle de nye varianter</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Drue Top -->
<div class="container-fluid">
    <img src="images/drue_top.jpg" alt="" class="img-fluid h-100">
</div>

<!-- Historien -->
<div class="container">
    <div class="row d-flex align-items-center text-center text-md-start">
        <div class="col-12 col-md-6 pb-5 pe-md-3">
            <h5 class="text-primary">Lørdag d. 22. Juli kl. 20.00</h5>
            <h2>Oplev en fortryllende gin-smagning på et skib med udsigt</h2>
            <p class="lead pb-3">Velkommen til en fortryllende gin-smagning ombord på et skib, der ligger fast fortøjet i havnen. Dette event er dedikeret til elskere af gin og de subtile nuancer, der kendetegner denne populære spiritus.  </p>
            <p>Mens du træder ombord på skibet, bliver du mødt af en atmosfære af spænding og forventning. Udsigten over havet og havnen, der strækker sig ud foran dig, skaber en lækker kulisse for denne uforglemmelige gin-smagning.</p>

            <p class="lead">Pris pr. person kr. 245,-</p>
            <a href="kontakt.php" class="btn btn-primary text-white">Tilmeld</a>

        </div>
        <div class="col-12 col-md-6">
            <img src="images/event_gin_smagning.jpg" alt="" class="img-fluid h-100 rounded-3">
        </div>
    </div>
</div>

<div class="container pb-lg-5 pt-5">
    <div class="row d-flex align-items-start text-center text-md-start">
        <div class="col-12 col-md-6 pe-md-3">
            <h3>Udforsk ginens vidunderlige smagspalette</h3>
            <p>På dette event kan du udforske ginens fortryllende verden og opdage forskellige varianter og smagsnuancer. Du vil blive præsenteret for et nøje udvalgt udvalg af gin, der spænder fra klassiske London Dry Gins til eksotiske og moderne varianter. Smagningens eksperter vil guide dig gennem hver gin og dele deres viden om destilleringsprocessen, de botaniske ingredienser og de unikke smagssignaturer, der kendetegner hver enkelt gin.</p>
            <p>Mens du nyder de delikate gin-smagsprøver, kan du lade dig forføre af den betagende udsigt udenfor. Skibet er placeret i havnen, og du kan beundre det spektakulære panorama over vandet og omgivelserne. Den kombination af udsigt, smagsoplevelser og den unikke atmosfære skaber en uforglemmelig oplevelse for dine sanser.</p>
        </div>

        <div class="col-12 col-md-6 pt-3 pt-lg-0">
            <h3> Et eksklusivt event for gin-entusiaster</h3>
            <p>Dette event er skabt specielt til gin-entusiaster og dem, der ønsker at udforske ginens vidundere. Uanset om du er en erfaren gin-connaisseur eller bare nysgerrig efter at udforske verdenen af gin, vil denne gin-smagning ombord på det stillestående skib give dig en eksklusiv og berigende oplevelse. Du vil opdage nye favoritter, blive forbløffet over de forskellige smagsprofiler og måske endda lære at sammensætte dine egne gin-baserede cocktails.</p>
            <p>Tag del i denne unikke gin-smagningsevent og lad dig forføre af ginens fortryllende smagsspektre. Nyd de delikate gin-varianter, den betagende udsigt og den eksklusive atmosfære ombord på skibet. Det er en uforglemmelig oplevelse, der vil efterlade dig med en nyvunden kærlighed til ginens verden.</p>
        </div>
    </div>
</div>

<!-- Drue Bund -->
<div class="container-fluid">
    <img src="images/drue_bund.jpg" alt="" class="img-fluid h-100">
</div>

<!-- Kommende Events -->
<div class="container-fluid p-5 fullscreen-bg">
    <h2 class="text-center text-white mt-lg-3 pt-5">Kommende events</h2>
    <p class="lead text-center text-white">Skibet Vinoteque</p>
    <div class="row d-flex justify-content-center text-center px-lg-5 pt-lg-5">
        <?php include "includes/events_vinoteque.php"; ?>
    </div>
</div>

<?php include "includes/footer.php"; ?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

