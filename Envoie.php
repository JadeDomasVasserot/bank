<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>GoodBank</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://unicons.iconscout.com/release/v2.1.9/css/unicons.css'>
    <link rel="stylesheet" href="./bank.css">

</head>

<body>

    <div class="section">
        <div class="container">
            <div class="row full-height justify-content-center">
                <div class="col-12 text-center align-self-center py-5">
                    <div class="section pb-5 pt-5 pt-sm-2 text-center">
                        <a id="title">GOODBANK</a>
                        <div class="card-3d-wrap mx-auto">
                            <div class="card-3d-wrapper">
                                <div class="card-front">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h1>Virement effectué</h1>
                                            <?php 
                                              $_GET["Montant"] = 150;
                                              $_GET["iban"] = "FR763000100794123456789018500794";
                                            $iban =  $_GET["iban"];
                                            $montant =  $_GET["Montant"];
                                            echo "Bravo vous venez d'effectuer un virement frauduleux ahahahahahah ! <br> iban -->", $iban , " <br>", $montant, "€";
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>