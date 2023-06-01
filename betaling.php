<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Betalingsside for events på vinbaren Vinoteque - Unik udsigt</title>
    <meta name="description" content="Betalingside for vores events på Vinoteque. Kom og oplev film under åben himmel med en lækker udsigt.">


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

<!-- Drue Top -->
<div class="container-fluid pt-5">
    <img src="images/drue_top.webp" alt="" class="img-fluid h-100 pt-5 pt-lg-5">
</div>

<div class="container">
    <div class="row">
        <div class="text-center">
            <h5 class="text-primary">Betaling</h5>
            <h2>Vi bruger sikker betaling</h2>
            <p>Vi bruger krypteringsteknologi til at beskytte dine betalingsoplysninger under transmission. <br>Dette sikrer, at dine følsomme data forbliver private og ikke kan læses af uautoriserede parter.</p>
        </div>
    </div>
</div>
<div class="container pt-2">
    <div class="card-body pt-5 pt-lg-0">
        <div class="d-flex justify-content-center">
            <div class="row">
                <div class="col-12 col-lg-6 pe-lg-5">
                    <div class="payment">
                        <div class="creditcard mx-auto"> <!-- Tilføjet "mx-auto" klasse -->
                            <div class="thecard">
                                <div class="top-card">
                                    <div class="circle"></div>
                                    <div class="card-title">
                                        Visakort
                                    </div>
                                </div>
                                <div class="card-info">
                                    <div class="card-number">
                                        1234 5678 9012 3456
                                    </div>
                                    <div class="exp-date">
                                        01 / 2018
                                    </div>
                                    <div class="card-holder">
                                        Jens Jensen
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6 ps-lg-5">
                    <div class="payment py-5">
                        <div class="formBetaling mx-auto"> <!-- Tilføjet "mx-auto" klasse -->
                            <form action="" method="get">
                                <label for="cardnumber">Kort nummer</label>
                                <input type="text" id="cardnumber" class="form-control" placeholder="1234 5678 9012 3456">
                                <label for="cardholder">Navn på kortet</label>
                                <input type="text" id="cardholder" class="form-control" placeholder="F.eks. Jens Jensen">
                               <label for="exp">Udløbsdato</label>
                                <div class="date d-flex">
                                    <select name="month" id="month" class="form-control">
                                        <option value="january">Januar</option>
                                        <option value="february">Februar</option>
                                        <option value="march">Marts</option>
                                        <option value="april">April</option>
                                        <option value="may">Maj</option>
                                        <option value="june">Juni</option>
                                        <option value="july">Juli</option>
                                        <option value="august">August</option>
                                        <option value="september">September</option>
                                        <option value="october">Oktober</option>
                                        <option value="november">November</option>
                                        <option value="december">December</option>
                                    </select>
                                    <select name="Year" class="form-control">
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                    </select>
                                </div>
                                <div class="small">
                                    <div class="cvc">
                                        <label for="cvc">CVC</label>
                                        <input type="text" id="cvc" class="form-control" maxlength="3" size="4" placeholder="123">
                                    </div>
                                    <p>Tre eller fire cifre, som normalt findes på bagsiden af kortet</p>
                                </div>
                                <label for="email">E-mail</label> <!-- Ny label til e-mail-indtastningsfelt -->
                                <input type="email" id="email" class="form-control" placeholder="Indtast din e-mailadresse" required> <!-- E-mail-indtastningsfelt med påkrævet attribut -->

                                <button class="btn btn-farve5">Godkend køb</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Drue Bund -->
<div class="container-fluid mt-3">
    <img src="images/drue_bund.webp" alt="" class="img-fluid h-100">
</div>



<?php include "includes/footer.php"; ?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>