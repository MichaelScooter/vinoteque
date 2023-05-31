<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Vinbaren Vinoteque | Unik udsigt | Kom og oplev den fantastiske stemning!</title>
    <meta name="title" content="Vinbaren Vinoteque | Unik udsigt | Kom og nyd">
    <meta name="description" content="Tag del i en uforglemmelig oplevelse på Vinbaren Vinoteque med en unik udsigt. Kom og nyd vores eksklusive udvalg af vine og atmosfære. Velkommen om bord!">


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
            <img src="images/vinoteque_vinbar_mobil.webp" alt="Forkæl dine sanser med unikke vine på Vinbaren Vinoteque" class="w-100 d-lg-none">
            <img src="images/vinbar_vinoteque.webp" alt="Oplev enestående vinoplevelser på Vinbaren Vinoteque" class="w-100 d-none d-lg-block">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center overlay">
                <div class="text-center row pt-3 pt-lg-5">
                    <h1 class="text-white">Vinoteque Marittima
                    </h1>
                    <p class="lead text-white px-3 px-lg-0">Byder på et stort udvalg i vine, øl, drinks, kaffe og the.</p>
                    <div>
                        <a href="vej.php" class="btn btn-primary text-white btn-link ms-lg-2">Find Vej</a>
                        <a href="events.php" class="btn btn-secondary text-white ms-lg-2">Events</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Drue Top -->
<div class="container-fluid">
    <img src="images/drue_top.webp" alt="" class="img-fluid h-100">
</div>

<!-- Velkommen Sektion -->
<div class="container pb-lg-5">
    <div class="row">
        <div class="text-center">
            <h5 class="text-primary">Velkommen om bord</h5>
            <h2>Nyd et glas vin og den fantastisk udsigt</h2>
            <p class="lead">Vinotequet vil have et stort aktivitets program, der vil året rundt være masser af smagninger, <br>om det er i øl, vin, rom/gin så har vi ekspertisen.
                <br><br>Derudover arrangere vi forskellige events i løbet af året, såsom koncerter og sønderjysk kagebord. <br>Sidst kan nævnes, at vi har et stort og flot festlokale til udlejning.</p>
        </div>
        <div class="col-4 py-3"><img src="images/vinbarens_tapas.webp" alt="Lækre tapasretter på Vinbaren Vinoteque" class="img-fluid h-100 rounded-3"></div>
        <div class="col-4 py-3"><img src="images/vinoteque_vinbar.webp" alt="Indretning og atmosfære på Vinbaren Vinoteque" class="img-fluid h-100 rounded-3"></div>
        <div class="col-4 py-3"><img src="images/vinoteque_vine.webp" alt="Friske og smagfulde vine på Vinbaren Vinoteque" class="img-fluid h-100 rounded-3"></div>
    </div>
</div>

<!-- Drue Bund -->
<div class="container-fluid">
    <img src="images/drue_bund.webp" alt="" class="img-fluid h-100">
</div>

<!-- Vinen Sektion -->
<div class="container-fluid bg-farve3">
    <div class="container py-5">
        <div class="row py-lg-5 d-flex align-items-center text-center text-md-start bg-farve3">
            <div class="col-12 col-md-6 pb-5 pe-md-3">
                <h5 class="text-primary">Vinen</h5>
                <h2>Vinen er fra én af verdens <br>10 ældste vinforretninger</h2>
                <p class="lead pb-3">Den lokale vinforretning Marius Mortensens Eftf er blandt verdens 10 ældste Tobaks og Vinforretninger – Born 1865 and still going strong – Forretningen ejes af Jes Jonigk,
                    der også er en del Vinoteque Marittimas ejerkreds.</p>
                <a href="om_os.php" class="btn btn-secondary text-white ms-lg-2">Læs om Vinoteque</a>
            </div>
            <div class="col-12 col-md-6">
                <img src="images/vinbarens_vine.webp" alt="Vine fra Vinoteque vinbaren" class="img-fluid h-100">
            </div>
        </div>
    </div>
</div>



<!-- Udsigten fra Vinoteque -->
<div class="container-fluid fixedBaggrund vh-50 d-flex justify-content-center align-items-center py-5">
    <div class="row">
        <div class="col-12 text-white text-center py-lg-5">
            <h5>Udsigten</h5>
            <h2>Vinoteque Marittima</h2>
        </div>
        <div class="col-12">
        <img src="images/vinoteque_udsigten.webp" alt="Fantastisk udsigt fra Vinoteque Vinbaren" class="img-fluid v-100">
        </div>
    </div>
</div>


<!-- Drue Top -->
<div class="container-fluid">
    <img src="images/drue_top.webp" alt="" class="img-fluid h-100">
</div>

<!-- Vinen Festlokale -->
<div class="container pt-5">
    <div class="row d-flex align-items-center text-center text-md-start">
        <div class="col-12 col-md-6 pb-5 pe-md-3">
            <h5 class="text-primary">Festlokale</h5>
            <h2>Hold fest med en <br>skøn udsigt</h2>
            <p class="lead pb-3">På øverste etage på Vinoteque er der indrettet et stort og flot fest lokale, der er plads til 70 gæster og kan lejes til hvilket formål, du nu måtte ønske.</p>
            <button class="btn btn-secondary text-white">Kontakt</button>
        </div>
        <div class="col-12 col-md-6">
            <img src="images/vinbar_festlokale.webp" alt="Elegant festlokale til arrangementer på Vinbaren Vinoteque" class="img-fluid h-100 rounded-3">
        </div>
    </div>
</div>

<!-- Drue Bund -->
<div class="container-fluid">
    <img src="images/drue_bund.webp" alt="" class="img-fluid h-100 py-3">
</div>

<!-- Testimonials -->
<div class="container-fluid py-5 text-center bg-farve3">
    <h2 class="mb-4 text-uppercase pt-lg-5">Referencer</h2>
    <p class="mb-4 lead">Udtalelser fra tidligere gæster om deres oplevelser på Vinoteque Marittima</p>


    <div id="carouselExampleCaptions" class="carousel slide text-center p-5">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="rounded-circle shadow-1-strong mb-4" src="images/gammel1.webp" alt="Testimonials Vinoteque vinbar" style="width: 150px;">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <h5 class="mb-3">Dorthe Hansen</h5>
                        <p class="text-primary">Leder Plejehjem</p>
                        <p class="text-muted">
                            <i class="fas fa-quote-left pe-2"></i>
                            Jeg er en passioneret vinkender, og Vinbaren Vinoteque på skibet er uden tvivl et af mine foretrukne steder at besøge. Udsigten over havnen er simpelthen betagende, og atmosfæren om bord er så afslappet og indbydende.
                            Vinudvalget er imponerende, og personalet er meget vidende og hjælpsomme. Jeg har altid følt mig godt taget imod og har fået gode anbefalinger til vine, der passer til min smag. Det er en sand fornøjelse at sidde på dækket, nyde et glas god vin og beundre den smukke udsigt. Jeg kan varmt anbefale Vinbaren Vinoteque til enhver vinelsker!
                        </p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="rounded-circle shadow-1-strong mb-4" src="images/gammel2.webp" alt="tilbagemelding fra kunde Vinoteque vinbar" style="width: 150px;">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <h5 class="mb-3">Lene Jensen</h5>
                        <p class="text-primary">Revy Entusiast</p>
                        <p class="text-muted">
                            <i class="fas fa-quote-left pe-2"></i>
                            Jeg havde fornøjelsen af at besøge Vinbaren Vinoteque på skibet, og jeg blev fuldstændig blæst væk af den betagende udsigt over havnen. Atmosfæren om bord er både afslappet og elegant, og jeg følte mig virkelig forkælet under hele mit besøg.
                            Vinkortet er omfattende og imponerende, og personalet var yderst hjælpsomme med at guide mig gennem mine valg. Jeg nød virkelig at sidde på dækket og slappe af med et glas lækker vin i hånden. Det er uden tvivl et sted, jeg vil anbefale til alle, der søger en unik vinoplevelse med en fantastisk udsigt.
                        </p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="rounded-circle shadow-1-strong mb-4" src="images/Gammel3.webp" alt="Reference af vinbaren Vinoteque" style="width: 150px;">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <h5 class="mb-3">Torben Mortensen</h5>
                        <p class="text-primary">webudvikler</p>
                        <p class="text-muted">
                            <i class="fas fa-quote-left pe-2"></i>
                            Jeg besøgte Vinbaren Vinoteque på skibet for nylig, og det var en uforglemmelig oplevelse. Udsigten fra skibet var simpelthen fantastisk - det var som at befinde sig i en postkortidyll med havet og havnen strækkende sig så langt øjet rakte.
                            Jeg er ikke den største vinentusiast, men personalet var utroligt vidende og hjælpsomme med at guide mig gennem deres brede udvalg af vine. De tog sig tid til at lytte til mine præferencer og anbefalede vine, der passede til min smag. Jeg blev virkelig imponeret over deres ekspertise og engagement.
                            At sidde på dækket med et glas vin og nyde den skønne udsigt var en helt speciel oplevelse. Atmosfæren var afslappet, og jeg følte mig virkelig velkommen. Jeg kan varmt anbefale Vinbaren Vinoteque til både vinelskere og dem, der blot ønsker at nyde en unik oplevelse med en spektakulær udsigt.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-secondary rounded-circle" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon bg-secondary rounded-circle" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

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
