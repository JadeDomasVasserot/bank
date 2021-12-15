<!DOCTYPE html>
<html lang="fr">
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
                        <a href="FakeBank.php" id="title">GOODBANK</a>
                        <div class="card-3d-wrap mx-auto">
                            <div class="card-3d-wrapper">
                                <div class="card-front">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h4 class="mb-4 pb-3">Virement</h4>
                                            <form action="Envoie.php" method="get">
                                                <div class="form-group">
                                                    <input type="text" name="iban" class="form-style" placeholder="N° IBAN" id="iban" autocomplete="off" required>
                                                    <i class="input-icon uil uil-user"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="int" name="Montant" class="form-style" placeholder="Montant en €" id="Montant" autocomplete="off" required>
                                                    <i class="input-icon uil uil-lock-alt"></i>
                                                </div>
                                                <input type="submit" class="btn mt-4" value="Confirmation" name="submit">
                                                <?php
                                               
                                               if(isset($_GET["submit"]) && isset($_GET["iban"]) && isset($_GET["Montant"]))
                                               {
     

                                               }
                                                    

                                                ?>
                                            </form>
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