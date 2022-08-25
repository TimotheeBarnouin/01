<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Forms</title>
</head>

<body>
    <form method="GET" action="">

        <section>
            <h1>Payment Information</h1>
            <fieldset>

                <?php
                $creditCardTypes = array(
                    array("name" => "visa",     "value" => "visaCard",     "label" => "Carte Visa"),
                    array("name" => "master",   "value" => "masterCard",   "label" => "Carte Master Card"),
                    array("name" => "electron", "value" => "electronCard", "label" => "Carte Electron"),
                    array("name" => "gold",     "value" => "goldCard",     "label" => "Carte Gold"),
                    array("name" => "gold",     "value" => "goldCard",     "label" => "Carte Gold 2"),
                    array("name" => "gold",     "value" => "goldCard",     "label" => "Carte Gold 3")
                );
                ?>

                <!-- Credit card type -->
                <label for="Card_Type">Card Type:</label>
                <select name="cardType" id="card_type">
                    <?php
                    foreach ($creditCardTypes as $cardType) {
                        echo "<option name='" . $cardType['name'] . "' value='" . $cardType['value'] . "'>" . $cardType['label'] . "</option>";
                    }
                    ?>
                </select>

            </fieldset>
            <div>
                <button type="submit">Validate</button>
            </div>
        </section>
    </form>
</body>

</html>

//index avant modif

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>HTML5 template</title>
</head>

<body>

    <h1>Payment form</h1>
    <h2>Required fields are followed by*.</h2>
    <article>
        <h2>
            Contact information
        </h2>
        <form method="get">

            <input type="radio" name="carte" id="ace"><label>Ace</label>
            <input type="radio" name="carte" id="king"><label>King</label>
            <input type="radio" name="carte" id="queen"><label>Queen</label>
            <div>
                <label for="name">Name*</label>
                <input type="text" name="name">
            </div>
            <div>
                <label for="email">Mail*</label>
                <input type="email" name="email" id="email">
            </div>
            <div>
                <label for="Password">Password*</label>
                <input type="password" name="password" id="password">
            </div>
            <h2>
                Payment information
            </h2>

            <fieldset>
                <?php
                $card = array(
                    array("name" => "visa", "value" => "visaCard", "label" => "Visa"),
                    array("name" => "master", "value" => "masterCard", "label" => "Master Card"),
                );
                ?>
                <label for="Card_Type">Card Type:</label>
                <select name="cardType" id="card_type">
                    <?php
                    foreach ($card as $cardType) {
                        echo "<option name='" . $cardType['name'] . "' value='" . $cardType['value'] . "'>" . $cardType['label'] . "</option>";
                    }
                    ?>

            </fieldset>
            </select>
            <label>Card number:*</label>
            <input type="number" name="cardNumber"></br>
            <label>Expiration date:*</label>
            <input type="date" name="expDate">
            <div class="form-example">
                <input type="submit" value="Validate the payment">
            </div>
    </article>
    </form>

</body>

</html>

<?php


$tableau = array(
    $carte = array("name" => "carte", "value" => "", "label" => ("Ace" || "King" || "Queen")),
    $name = array("name" => "name", "value" => "", "label" => ""),
    $email = array("name" => "email", "value" => "", "label" => ""),
    $password = array("name" => "password", "value" => "", "label" => ""),

   
);
?>