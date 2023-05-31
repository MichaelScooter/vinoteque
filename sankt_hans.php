<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Sankt Hans og Fiskefestival ved Vinoteque Strand Cafe</title>
    <meta name="description" content="Fejr Sankt Hans og nyd en lækker fiskefestival ved vores strand cafe på skibet Vinoteque. Oplev en magisk aften med bål, musik og fantastisk udsigt. Book nu!">


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
            <img src="images/sankt_hans_mobil.webp" alt="Fejr Sankt Hans aften ved stranden på Vinoteque - oplev en magisk aften med bål, musik og hygge" class="w-100 d-lg-none pt-5">
            <img src="images/sankt_hans_vinoteque.webp" alt="Tag del i den traditionsrige Sankt Hans fejring på Vinoteque og nyd en aften fyldt med festivitas" class="w-100 d-none d-lg-block">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center overlay">
                <div class="text-center row pt-3 pt-lg-5">
                    <h1 class="text-white">Sankt Hans</h1>
                    <p class="lead text-white">Kombineret med en lækker fiskefestival</p>
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
            <h5 class="text-primary">Lørdag d. 24. juni kl. 18.00</h5>
            <h2>Nyd en magisk Sankt Hans aften med en skøn udsigt</h2>
            <p class="lead pb-3">Velkommen til en magisk Sankt Hans aften kombineret med en lækker fiskefestival på en hyggelig strandcafé beliggende ved havnen. Dette event er dedikeret til at fejre den traditionsrige Sankt Hans aften og samtidig nyde en overdådig fest med lækre fiskeretter. </p>
            <p>Når du ankommer til strandcaféen, vil du straks blive betaget af den afslappede atmosfære og den betagende udsigt over havet og den omkringliggende natur, der danner den perfekte kulisse for denne unikke begivenhed.</p>
            <p class="lead">Pris pr. person kr. 195,-</p>
            <a href="kontakt.php" class="btn btn-primary text-white">Tilmeld</a>
        </div>
        <div class="col-12 col-md-6">
            <img src="images/evet_sankt_hans.webp" alt="Sankt Hans og Fiskefestival ved Vinoteque Strand Cafe | Magisk aften ved bålet" class="img-fluid h-100 rounded-3">
        </div>
    </div>
</div>

<div class="container pb-lg-5 pt-5">
    <div class="row d-flex align-items-start text-center text-md-start">
        <div class="col-12 col-md-6 pe-md-3">
            <h3>Udforsk den lækre fiskefestival og oplev Sankt Hans traditionerne</h3>
            <p>På dette event kan du udforske en lækker fiskefestival, hvor dygtige kokke tilbereder en bred vifte af friske fiskeretter til din fornøjelse. Du vil blive forkælet med alt fra sprøde fiskefrikadeller til saftige grillede fiskesteaks og forfriskende fisketacos. Den lækre fiskefestival vil tilfredsstille dine smagsløg og give dig mulighed for at nyde havets delikatesser i en afslappet strandatmosfære.</p>
            <p>Samtidig vil du blive en del af de traditioner, der er forbundet med Sankt Hans aften. Strandcaféen vil arrangere en hyggelig bålfest, hvor du kan være med til at sende heksene afsted på havet. Du vil kunne nyde synet af bålet, der flammer op mod den maleriske solnedgang, og deltage i fællessangen og de traditionelle ritualer, der skaber en stemningsfuld og festlig atmosfære.</p>
        </div>

        <div class="col-12 col-md-6 pt-3 pt-lg-0">
            <h3>En uforglemmelig aften på strandcaféen med Sankt Hans og fiske</h3>
            <p>Dette event er skabt specielt til at skabe uforglemmelige minder på Sankt Hans aften. Uanset om du er en fiskeentusiast, en tilhænger af Sankt Hans-traditioner eller blot leder efter en unik oplevelse, vil kombinationen af fiskefestival og Sankt Hans aften på strandcaféen give dig en mindeværdig aften. Nyd de lækre fiskeretter, deltag i de traditionelle ritualer og lad dig forføre af den betagende udsigt over havet og stranden, mens du fejrer Sankt Hans aften i godt selskab.</p>
            <p>Tag del i denne unikke Sankt Hans aften og fiskefestival på strandcaféen og lad dig fortrylle af den magiske atmosfære. Udforsk de kulinariske lækkerier, deltag i traditionerne og skab uforglemmelige minder med dine venner og familie. Det bliver en aften fyldt med fest, god mad og en betagende udsigt, som vil efterlade dig med en varm følelse i hjertet.</p>
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
    <p class="lead text-center text-white">Strand Caféen</p>
    <div class="row d-flex justify-content-center text-center px-lg-5 pt-lg-5">
        <?php include "includes/events_cafe.php"; ?>
    </div>
</div>

<?php include "includes/footer.php"; ?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

