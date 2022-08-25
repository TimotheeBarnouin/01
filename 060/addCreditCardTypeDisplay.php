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

    <div class="container">
        <div class="row">
            <h1 class="text-center"><?= $dictionnary['register.page.CardType'] ?></h1>
            <article>
                <form class="text-center" method="post" action="addCreditCardType.php">
                    <div>
                        <label for="Ncarte"><?= $dictionnary['register.model.carte'] ?></label>
                        <br>
                        <input type="text" name="Ncarte" id="Ncarte" class="required">
                    </div>
            </article>
            </form>
        </div>
    </div>

    <!-- Appel du footer et barre de navigation depuis sa propre page footer.php -->
    <?php require 'footer.php';
    ?>

    <script src="Js/bootstrap.bundle.min.js"></script>
</body>

</html>