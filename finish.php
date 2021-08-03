<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="index.css">
        <title>FAPI ~ ENTRY TEST</title>
    </head>
    <body>
        <?php
            session_start();
            $_SESSION["firstname"] = $_POST["firstName"];
            $_SESSION["lastname"] = $_POST["lastName"];
            $_SESSION["product"] = $_POST["product"];
            $_SESSION["storage"] = $_POST["storage"];
            $_SESSION["quantity"] = $_POST["quantity"];
            $_SESSION["email"] = $_POST["email"];
            $_SESSION["address"] = $_POST["address"];

            /* Switch by sa jednoznačne dal nahradiť nejakou databázou, ale keďže som robil len ukážku a práca
            s databázou tu je aj bez toho, tak si myslím, že toto je pre tých pár produktov rýchlejšie riešenie */

            switch ($_SESSION["product"]) {
                case "Iphone 6":
                    $_SESSION["priceforone"] = 1999;
                    break;
                case "Iphone 6s":
                    $_SESSION["priceforone"] = 2999;
                    break;    
                case "Iphone 7":
                    $_SESSION["priceforone"] = 3999;
                    break;
                case "Iphone 7s":
                    $_SESSION["priceforone"] = 4999;
                    break;
                case "Iphone 8":
                    $_SESSION["priceforone"] = 5999;
                    break;
                case "Iphone 8s":
                    $_SESSION["priceforone"] = 6999;
                    break;
                case "Iphone X":
                    $_SESSION["priceforone"] = 7999;
                    break;    
                case "Iphone X Max":
                    $_SESSION["priceforone"] = 8999;
                    break;
                case "Iphone 11":
                    $_SESSION["priceforone"] = 9999;
                    break;     
                case "Iphone 11 Max":
                    $_SESSION["priceforone"] = 10999;
                    break;   
            }

            switch ($_SESSION["storage"]) {
                case "128GB":
                    $_SESSION["priceforone"] = $_SESSION["priceforone"] + 1000;
                    break;
                case "256GB":
                    $_SESSION["priceforone"] = $_SESSION["priceforone"] + 2000;
                    break;    
            }

            $_SESSION["pricetotal"] = $_SESSION["priceforone"] * $_SESSION["quantity"];
        ?>
        
        <h1>FAPI iPhone SHOP</h1>

        <div class="para">
            <p>
                Vitaj <?php echo $_SESSION["firstname"];?> <?php echo $_SESSION["lastname"]; ?>!<br>
                Prosím skontroluj si svoje údaje<br><br>
                Email: <?php echo $_SESSION["email"];?> <br>
                Adresa: <?php echo $_SESSION["address"];?> <br>
                Objednávka: <?php echo $_SESSION["product"]; ?> <?php echo $_SESSION["storage"]; ?> <br> 
                Cena za kus: <?php echo $_SESSION["priceforone"]; ?> <br>
                Počet kusov: <?php echo $_SESSION["quantity"]; ?> <br>
                Dokopy: <?php echo $_SESSION["pricetotal"]; ?> <br>
            </p>
            
            <!-- Nepodarilo sa mi spraviť currency changer. Určite by sa dalo spraviť pomocou vlastnej databázy, alebo nejakého
            selectu, ale taký bruteforce ste asi nechceli :) (teda určite, kedže v zadaní píšete, že máme použiť informácie z ČNB) -->
            <input type="number" class="form-input" id="number" placeholder="0">
            <select name="currency" class="inp" onchange=""></select> <br>
            <input type="text" class="form-input" id="output" placeholder="0">
            <select name="currency" class="inp" onchange=""></select>

            <form action="send.php" method="post">
                <input type="submit" id="button" value="Click me">
            </form>
        </div>

        <script>
            const axios = require('axios');

            axios.request({
                url: 'https://api.apitalks.store/cnb.cz/banky/0bf4f020-acf4-4d1b-bddf-72b2f847b2c3',
                method: 'GET',
                headers: {
                    'x-api-key': '1WbVYTEn8xBQgPoa0i4c2r1QNoGAkDG8R7GzTmF4'
                }
            })
            .then(response => {
            console.log(response.data);
            })

            
        </script>
    </body>
</html>
