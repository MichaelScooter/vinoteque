<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>LF Mesterskab i Maveplask på Vinoteque Strand Cafe</title>
    <meta name="description" content="Vær med til LF Mesterskaber i Maveplask på vores strand cafe ved Vinoteque. Nyd den lækre udsigt, konkurrencen og en fantastisk atmosfære. Tilmeld dig nu!">

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
            <img src="images/maveplask_mobil.webp" alt="Vær med til LF Mesterskaber i maveplask og nyd en dag fyldt med sjov og vandaktiviteter på Vinoteque" class="w-100 d-lg-none pt-5">
            <img src="images/maveplask_vinoteque.webp" alt="Dyk ned i maveplaskens verden på Vinoteque og konkurrer i en spændende konkurrence om mesterskabet" class="w-100 d-none d-lg-block">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center overlay">
                <div class="text-center row pt-3 pt-lg-5">
                    <h1 class="text-white">LF Mesterskaber</h1>
                    <p class="lead text-white">Maveplask</p>
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
            <h5 class="text-primary">Lørdag d. 14. Juli kl. 16.00</h5>
            <h2>Deltag i det sjove og uofficielle Lolland-Falster mesterskab i maveplask</h2>
            <p class="lead pb-3">Velkommen til det sjove og uofficielle Lolland-Falster mesterskab i maveplask, der afholdes på en hyggelig strandcafé beliggende på havnen. Dette event er dedikeret til sjov, latter og konkurrence, hvor deltagere i alle aldre kan udfolde sig og vise deres maveplaskfærdigheder. </p>
            <p>Når du ankommer til strandcaféen, vil du straks blive mødt af en afslappet atmosfære og en betagende udsigt over havet og den omkringliggende natur, der danner den perfekte kulisse for dette underholdende mesterskab.</p>
            <p class="lead">Pris pr. person kr. 95,-</p>
            <a href="tilmelding.php" class="btn btn-primary text-white">Tilmeld</a>
        </div>
        <div class="col-12 col-md-6">
            <img src="images/event_maveplask.webp" alt="LF Mesterskab i Maveplask på Vinoteque Strand Cafe | Konkurrence og sjov" class="img-fluid h-100 rounded-3">
        </div>
    </div>
</div>

<div class="container pb-lg-5 pt-5">
    <div class="row d-flex align-items-start text-center text-md-start">
        <div class="col-12 col-md-6 pe-md-3">
            <h3>Konkurrer i det spændende mesterskab i maveplask</h3>
            <p>På dette event kan du deltage i det spændende mesterskab i maveplask og vise dine dygtigheder og kreativitet. Konkurrencen er åben for alle, uanset om du er en erfaren maveplasker eller bare ønsker at prøve kræfter med denne morsomme disciplin. Maveplask er en kunst, der kræver mod, timing og selvfølgelig en god portion sjov. Her kan du lade din indre akrobat løbe fri, udføre dine bedste maveplask og imponere både dommere og tilskuere.</p>
            <p>Strandcaféen vil sørge for sikkerheden og skabe en sjov og venlig atmosfære, hvor alle kan deltage og have det sjovt. Deltagere vil blive bedømt på deres kreativitet, stil og plaskets størrelse, og der vil være præmier til vinderne. Det bliver en dag fyldt med grin, konkurrenceånd og uforglemmelige øjeblikke.</p>
        </div>

        <div class="col-12 col-md-6 pt-3 pt-lg-0">
            <h3>En uforglemmelig dag med maveplaskmesterskabet og den betagende udsigt</h3>
            <p>Dette event er skabt specielt til dem, der ønsker at opleve sjov, konkurrence og samtidig nyde den betagende udsigt fra strandcaféen. Uanset om du deltager som en aktiv maveplasker eller blot som tilskuer, vil du blive underholdt og få en uforglemmelig dag. Lad dig forføre af den smukke havudsigt, hepp på deltagerne, og nyd den afslappede atmosfære, som strandcaféen tilbyder.</p>
            <p>Tag del i dette unikke uofficielle Lolland-Falster mesterskab i maveplask på strandcaféen og lad dig blive revet med af morskaben. Udfordr dine venner, skab minder og lad latteren fylde luften. Det bliver en dag fyldt med sjov, spænding og en betagende udsigt, der vil efterlade dig med smil på læben og en varm følelse i hjertet.</p>
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

