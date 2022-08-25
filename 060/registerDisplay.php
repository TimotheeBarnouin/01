<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/bootstrap.min.css">
    <link rel="stylesheet" href="Css/style.css">
    <?php include('dictionnary.php'); ?>
    <title><?= $dictionnary['register.page.title'] ?></title>
</head>


<body>

    <!-- Appel du header et barre de navigation depuis sa propre page header.php -->
    <?php require 'header.php'; ?>

    <div class="container text-center">
        <div class="row align-items-start">
            <h1><?= $dictionnary['register.page.formulaire'] ?></h1>
            <h2>
                <?= $dictionnary['register.page.contact'] ?>
            </h2>
            <form method="post" action="register.php">

                <div>
                    <input type="radio" name="carte" id="ace"><label><?= $dictionnary['register.model.ace'] ?></label>
                    <input type="radio" name="carte" id="king"><label><label><?= $dictionnary['register.model.king'] ?></label>
                        <input type="radio" name="carte" id="queen"><label><?= $dictionnary['register.model.queen'] ?></label>
                </div>
                <div>
                    <label for="name"><?= $dictionnary['register.model.name'] ?></label>
                    <input type="text" name="name" class="required">
                </div>
                <div>
                    <label for="email"><?= $dictionnary['register.model.email'] ?></label>
                    <input type="email" name="email" id="email" class="required">
                </div>
                <div>
                    <label for="Password"><?= $dictionnary['register.model.password'] ?></label>
                    <input type="password" name="password" id="password" class="required">
                </div>
                <h2>
                    <?= $dictionnary['register.page.section.payment'] ?>
                </h2>

                <fieldset>

                    <label for="card_Type"><?= $dictionnary['register.model.creditCardType.label'] ?> :</label>
                    <select name="cardType" id="card_Type">
                        <?php
                        require_once('business-csv.php');
                        nCartes();
                        ?>
                </fieldset>

                </select>

                <label><?= $dictionnary['register.numeroCard'] ?></label>
                <input type="number" name="cardNumber"></br>
                <label><?= $dictionnary['register.dateExp'] ?></label>
                <input type="date" name="expDate">
                <div class="form-example">
                    <button type="submit"><?= $dictionnary['register.page.section.payment.submit'] ?></button>
                </div>
        </div>
    </div>
    </form>
    <script src="Js/bootstrap.bundle.min.js"></script>

    <!-- Appel du footer et barre de navigation depuis sa propre page footer.php -->
    <?php require 'footer.php';
    ?>
</body>

</html>