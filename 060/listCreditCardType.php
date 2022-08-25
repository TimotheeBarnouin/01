<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/bootstrap.min.css">
    <?php include('dictionnary.php'); ?>
    <title><?= $dictionnary['register.page.CardType'] ?></title>
</head>

<body>
    <div class="container tex-center">
        <div class="row align-items-start">

            <!-- Appel du header nav -->
            <?php require 'header.php';

            require 'business-csv.php';

            AfficheCardCsv();

            //appel du footer nav
            require 'footer.php'; ?>
        </div>
    </div>

    <script src="Js/bootstrap.bundle.min.js"></script>
</body>

</html>