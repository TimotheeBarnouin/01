<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/bootstrap.min.css">
    <?php include('dictionnary.php'); ?>
    <title><?= $dictionnary['register.page.formulaireRempli'] ?></title>

</head>

<body>
    <div class="container">
        <!-- Appel du header nav -->
        <?php require 'header.php';

        //appel du ficher business pour récupérer la fonction de création du tableau pour l'afficher
        require 'business-csv.php';

        //fonction d'affichage du tableau
        AfficheCsv();

        //appel du footer nav
        require 'footer.php'; ?>
    </div>
    <script src="Js/bootstrap.bundle.min.js"></script>
</body>

</html>