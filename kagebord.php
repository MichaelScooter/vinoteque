<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Det sønderjyske kagebord | Oplev det på skibet</title>
    <meta name="title" content="Oplev det sønderjyske kagebord på skib | Forkæl dine smagsløg!">
    <meta name="description" content="Nyd en overdådig oplevelse med det sønderjyske kagebord på vores skib med en fantastisk udsigt. Smag på lækre kager og sønderjyske specialiteter. Bestil nu!">

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
            <img src="images/kagebord_mobil.webp" alt="Forkæl din søde tand med en overdådig oplevelse af Sønderjyllands bedste kager og desserter hos Vinoteque" class="w-100 d-lg-none pt-5">
            <img src="images/kagebuffet_vinoteque.webp" alt="Tag på en kulinarisk rejse gennem Sønderjyllands kagekultur på Vinoteque - nyd vores lækre kagebordsevent" class="w-100 d-none d-lg-block">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center overlay">
                <div class="text-center row pt-3 pt-lg-5">
                    <h1 class="text-white">Sønderjysk Kagebord</h1>
                    <p class="lead text-white">Et kæmpe udvalg af lækre kager</p>
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
            <h5 class="text-primary">Lørdag d. 8. Juli kl. 16.00</h5>
            <h2>Kagebord med en uimodståelig udsigt</h2>
            <p class="lead pb-3">Velkommen til et fortryllende event, der kombinerer det sønderjyske kagebords lækkerier med en betagende udsigt ombord på et skib, der ligger fast fortøjet i havnen. I det øjeblik, du træder ombord, omfavnes du af en atmosfære af sødme og charme. Skibets elegante facade og den vidunderlige udsigt danner rammen om denne uforglemmelige begivenhed.
            </p>
            <p>
                Mens du bevæger dig gennem skibets indre, bliver du mødt af et festligt kagebord fyldt med sønderjyske delikatesser. Det sønderjyske kagebord er kendt for sin overdådighed og enestående smag. En bred vifte af farverige kager, sprøde småkager og søde fristelser præsenteres med omhu og indbyder dig til at smage på hver enkelt lækkerbid.
            </p>
            <p class="lead">Pris pr. person kr. 245,-</p>
            <a href="kontakt.php" class="btn btn-primary text-white">Tilmeld</a>

        </div>
        <div class="col-12 col-md-6">
            <img src="images/event_kagebuffet.webp" alt="Det sønderjyske kagebord på skibet" class="img-fluid h-100 rounded-3">
        </div>
    </div>
</div>

<div class="container pb-lg-5 pt-5">
    <div class="row d-flex align-items-start text-center text-md-start">
        <div class="col-12 col-md-6 pe-md-3">
            <h3>Smagsoplevelser fra det sønderjyske køkken</h3>
            <p>Dette event er en hyldest til det sønderjyske køkkens kulinariske arv. Eksperter inden for bagning og traditionelle sønderjyske opskrifter er til stede for at dele deres viden og historier bag hvert stykke kage. Du vil blive fortryllet af smagen af krydret brunsviger, saftig hindbærsnitte, luftige wienerbrød og mange andre sønderjyske kageklassikere.</p>
            <p>Mens du smager på de delikate kager, kan du nyde den vidunderlige udsigt udenfor. Skibets placering i havnen giver dig mulighed for at beundre den smukke panoramaudsigt over vandet, havnen og de omkringliggende landskaber. Den lækre kombination af smagsoplevelser og den fantastiske udsigt skaber en unik oplevelse for dine sanser.</p>
        </div>

        <div class="col-12 col-md-6 pt-3 pt-lg-0">
            <h3>En uforglemmelig oplevelse i det sønderjyske univers</h3>
            <p>Dette event vil efterlade dig med minder for livet og en dybere forståelse af det sønderjyske køkkens rige kultur. Du vil opdage den passion, der ligger bag hvert enkelt kagestykke, og blive draget ind i det sønderjyske univers af madglæde og gæstfrihed.</p>
            <p>Uanset om du er en kageentusiast eller blot nysgerrig efter at udforske det sønderjyske køkkens magiske verden, vil dette event på det stillestående skib give dig en uforglemmelig oplevelse. Nyd de overdådige sønderjyske kager, beundre den betagende udsigt og lade dig fortrylle af den søde atmosfære.</p>
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

