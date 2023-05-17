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
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cinzel+Decorative&family=Montserrat:wght@300;400&display=swap');
    </style>


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
            <img src="images/marittima_vinoteque_mobil.jpg" class="w-100 d-lg-none">
            <img src="images/tour_de_france_vinoteque.jpg" class="w-100 d-none d-lg-block">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center overlay">
                <div class="text-center row pt-3 pt-lg-5">
                    <h1 class="text-white">Tour de France</h1>
                    <p class="lead text-white">Storskærm - 1. etape</p>
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
            <h5 class="text-primary">Lørdag d. 1. Juli kl. 14.00</h5>
            <h2>Oplev spændingen på en strandcafé med storskærm og betagende udsigt</h2>
            <p class="lead pb-3">Velkommen til en spændende oplevelse på en strandcafé beliggende ved havnen, hvor du kan nyde 1. etape af årets Tour de France på en stor storskærm. </p>
            <p>Dette event er dedikeret til cykelfans og entusiaster, der ønsker at opleve den intense atmosfære og dramaet fra Tour de France på en unik måde. Når du træder ind på strandcaféen, bliver du mødt af en afslappet atmosfære og en betagende udsigt over havet og den omkringliggende natur, der danner den perfekte baggrund for denne spændende begivenhed.</p>
            <p class="lead">Pris pr. person kr. 195,-</p>
            <a href="kontakt.php" class="btn btn-primary text-white">Tilmeld</a>
        </div>
        <div class="col-12 col-md-6">
            <img src="images/event_tour_de_france.jpg" alt="" class="img-fluid h-100 rounded-3">
        </div>
    </div>
</div>

<div class="container pb-lg-5 pt-5">
    <div class="row d-flex align-items-start text-center text-md-start">
        <div class="col-12 col-md-6 pe-md-3">
            <h3>Oplev cykelsportens magi på storskærmen</h3>
            <p>På dette event kan du opleve cykelsportens magi, når 1. etape af Tour de France bliver vist på den store storskærm. Du vil blive fanget af spændingen, når de bedste cykelryttere fra hele verden kæmper om den gule trøje. Følg med i de nervepirrende sprinter, de strategiske taktikker og de heroiske bjergklatringer, der karakteriserer Tour de France. Den store storskærm giver dig mulighed for at få en tæt og intens oplevelse af hvert eneste sekund af løbet.</p>
            <p>Mens du følger med i cykelløbet, kan du samtidig nyde den lækre atmosfære på strandcaféen. Find dig en behagelig plads, bestil en forfriskende drink og lad dig forføre af den betagende udsigt over havet og stranden. Det er den perfekte kombination af sportsoplevelse og afslapning i smukke omgivelser.</p>
        </div>

        <div class="col-12 col-md-6 pt-3 pt-lg-0">
            <h3>En uforglemmelig dag med Tour de France og strandcaféens charme</h3>
            <p>Dette event er skabt specielt til cykelfans og dem, der ønsker at opleve Tour de France i en hyggelig og festlig atmosfære. Uanset om du er en dedikeret cykelentusiast eller blot interesseret i at opleve den unikke stemning under Tour de France, vil dette event på strandcaféen give dig en uforglemmelig dag. Nyd spændingen fra cykelløbet, slå dig ned på strandcaféen og lad dig forføre af den betagende udsigt og den afslappede atmosfære.</p>
            <p>Tag del i denne unikke oplevelse med Tour de France på storskærm på strandcaféen og lad dig blive revet med af cykelsportens magi. Oplev spændingen, hepp på dine favoritryttere og del begejstringen med andre cykelfans. Det bliver en dag fyldt med energi, sportsånd og en betagende udsigt, der vil efterlade dig med minder for livet.</p>
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
    <p class="lead text-center text-white">Strand Caféen</p>
    <div class="row d-flex justify-content-center text-center px-lg-5 pt-lg-5">
        <?php include "includes/events_cafe.php"; ?>
    </div>
</div>

<?php include "includes/footer.php"; ?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

