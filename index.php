<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css">
    <title>FAPI ~ ENTRY TEST</title>
</head>
<body>
    <script src="index.js"></script>

    <h1>FAPI iPhone SHOP</h1>
    <div class="para">
        <p>
            Prosím vypíšte tento formulár. <br>
            Zadajte svoje Meno, Priezvisko, Email, Adresu a následne zvolte tovar a jeho počet kusov. <br>
        </p>
        <form id='store-form' class="form" action="finish.php" method="post"> 
            Meno: <input class="inp" id="firstName" placeholder="Jožko" type="text" name="firstName" style="width: 30%;"><br>
            Priezvisko: <input class="inp" id="lastName" placeholder="Mrkvička" type="text" name="lastName" style="width: 30%;"><br>
            Email: <input class="inp" id="email" placeholder="jozko@gmail.com" type="text" name="email" style="width: 60%;"><br>
            Adresa: <input class="inp" id="address" placeholder="Kosicka 39, Bratislava 055 55" type="text" name="address" style="width: 70%;"><br>
            Produkt: <select class="inp" id="product" name="product" style="width: 40%;">
                        <option value="Iphone 6">Iphone 6</option>
                        <option value="Iphone 6s">Iphone 6s</option>
                        <option value="Iphone 7">Iphone 7</option>
                        <option value="Iphone 7s">Iphone 7s</option>
                        <option value="Iphone 8">Iphone 8</option>
                        <option value="Iphone 8s">Iphone 8s</option>
                        <option value="Iphone X">Iphone X</option>
                        <option value="Iphone X Max">Iphone X Max</option>
                        <option value="Iphone 11">Iphone 11</option>
                        <option value="Iphone 11 Max">Iphone 11 Max</option>
                    </select>
                    <select class="inp" id="storage" name="storage" style="width: 30%;">
                        <option value="64GB">64GB</option>
                        <option value="128GB">128GB</option>
                        <option value="256GB">256GB</option>
                    </select> <br>
            Počet kusov: <input class="inp" id="quantity" placeholder="10" type="number" name="quantity" style="width: 15%;"> <br>    
        </form>

        <button id='button' onclick="checkForm()">Click me to finish up :)</button>
        <p id="ErrorMsg" style="display: none; color: red;"> Error msg :) </p>

    </div>

    <script>
        function checkForm() {
            if (! document.getElementById("firstName").value) {
                document.getElementById("ErrorMsg").innerHTML = "Vyplnte prosím svoje Meno"
                document.getElementById("ErrorMsg").style.display="block";
            } else if (! document.getElementById("lastName").value) {
                document.getElementById("ErrorMsg").innerHTML = "Vyplnte prosím svoje Priezvisko"
                document.getElementById("ErrorMsg").style.display="block";
            } else if (! document.getElementById("email").value) {
                document.getElementById("ErrorMsg").innerHTML = "Vyplnte prosím svoj Email"
                document.getElementById("ErrorMsg").style.display="block";
            } else if (! document.getElementById("address").value) {
                document.getElementById("ErrorMsg").innerHTML = "Vyplnte prosím svoju Adresu"
                document.getElementById("ErrorMsg").style.display="block";
            } else if (! document.getElementById("quantity").value || document.getElementById("quantity").value < 1) {
                document.getElementById("ErrorMsg").innerHTML = "Zadajte prosím nenulový a kladný počet kusov"
                document.getElementById("ErrorMsg").style.display="block";
            } else {
                document.getElementById("store-form").submit();
            }
        }
    </script>
</body>
</html>