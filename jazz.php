<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Intim jazz koncert | Oplev magien på skibet!</title>
    <meta name="description" content="Nyd en aften med intim jazz musik på vores skib med en unik udsigt. Få en uforglemmelig oplevelse med live jazz og bestil dine billetter nu!">


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
            <img src="images/jazz_koncert_mobil.webp" alt="Forlad dig til jazzens fortryllende rytmer og melodier til vores livlige jazzkoncert på Vinoteque" class="w-100 d-lg-none pt-5">
            <img src="images/jazz_koncert_vinoteque.webp" alt="Oplev en aften med musikalsk magi og jazz vibes på Vinoteque - kom til vores fantastiske jazzkoncert" class="w-100 d-none d-lg-block">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center overlay">
                <div class="text-center row pt-3 pt-lg-5">
                    <h1 class="text-white">Jazz Koncert</h1>
                    <p class="lead text-white">Få en uforglemmelig aften med lækker musik</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Drue Top -->
<div class="container-fluid">
    <img src="images/drue_top.webp" alt="" class="img-fluid h-100">
</div>

<!-- Historien -->
<div class="container">
    <div class="row d-flex align-items-center text-center text-md-start">
        <div class="col-12 col-md-6 pb-5 pe-md-3">
            <h5 class="text-primary">Lørdag d. 29. Juli kl. 20.00</h5>
            <h2>Nyd en uforglemmelig jazzkoncert på et skib med betagende udsigt</h2>
            <p class="lead pb-3">Velkommen til en uforglemmelig jazzkoncert ombord på et skib, der ligger fast fortøjet i havnen. Dette event er dedikeret til elskere af jazzmusik og den magiske stemning, der følger med. </p>
            <p>Når du træder ombord på skibet, bliver du mødt af en atmosfære fyldt med spænding og forventning. Udsigten over havet og havnen danner en betagende baggrund for denne unikke jazzkoncert.</p>
            <p class="lead">Pris pr. person kr. 295,-</p>
            <a href="kontakt.php" class="btn btn-primary text-white">Tilmeld</a>

        </div>
        <div class="col-12 col-md-6">
            <img src="images/event_jazz.webp" alt="Intim jazz koncert på skibet" class="img-fluid h-100 rounded-3">
        </div>
    </div>
</div>

<div class="container pb-lg-5 pt-5">
    <div class="row d-flex align-items-start text-center text-md-start">
        <div class="col-12 col-md-6 pe-md-3">
            <h3>Dyk ned i jazzens fortryllende univers</h3>
            <p>På dette event kan du dykke ned i jazzens fortryllende univers og lade dig rive med af den pulserende rytme og improvisation. Velrenommerede jazzmusikere vil indtage scenen og skabe en atmosfære af musikalsk ekspertise og passion. Du vil blive forført af de improviserede soli, de melodiske harmonier og den swingende rytme, der er kendetegnende for jazzgenren.</p>
            <p>Mens du nyder de fantastiske musikalske præstationer, kan du samtidig lade dig fortrylle af den betagende udsigt udenfor. Skibet er perfekt placeret i havnen, hvilket giver dig mulighed for at beundre den maleriske udsigt over vandet, solnedgangen og den omkringliggende natur. Den kombination af jazzens magi og den betagende udsigt skaber en unik og mindeværdig oplevelse.</p>
        </div>

        <div class="col-12 col-md-6 pt-3 pt-lg-0">
            <h3>Et eksklusivt event for jazzelskere</h3>
            <p>Dette event er skabt specielt til jazzelskere og dem, der ønsker at fordybe sig i jazzmusikkens univers. Uanset om du er en erfaren jazzentusiast eller bare nysgerrig efter at opleve jazzkoncerter, vil denne jazzkoncert ombord på det stillestående skib give dig en eksklusiv og berigende oplevelse. Du vil blive fanget af jazzens dynamik, improvisationens kunst og den intime atmosfære, som kun en livekoncert kan skabe.</p>
            <p>Vær en del af denne unikke jazzkoncert og lad dig forføre af den magiske stemning. Nyd de fantastiske musikalske præstationer, den betagende udsigt og den eksklusive atmosfære ombord på skibet. Det er en oplevelse, der vil efterlade dig med en dyb begejstring for jazzmusikkens verden.</p>
        </div>
    </div>
</div>

<!-- Drue Bund -->
<div class="container-fluid">
    <img src="images/drue_bund.webp" alt="" class="img-fluid h-100">
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

