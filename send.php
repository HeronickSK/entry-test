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
            $servername = "sql4.webzdarma.cz:3306";
            $username = "entrytestmou7379";
            $password = "(d@XhJ^Nb_N4R(zNcon%";
            $dbname = "entrytestmou7379";

            $firstname = $_SESSION["firstname"];
            $lastname = $_SESSION["lastname"];
            $product = $_SESSION["product"];
            $storage = $_SESSION["storage"];
            $quantity = $_SESSION["quantity"];
            $email = $_SESSION["email"];
            $address = $_SESSION["address"];
            $priceforone = $_SESSION["priceforone"];
            $pricetotal = $_SESSION["pricetotal"];

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "INSERT INTO receipts (firstName, lastName, email, address, product, storage, quantity, pricePerPiece, priceTotal)
            VALUES ('$firstname', '$lastname', '$email', '$address', '$product', '$storage', '$quantity', '$priceforone', '$pricetotal')";

            if ( ! ($conn->query($sql) === TRUE) ) {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();    
        ?>
        
        <h1 style="padding-top: 10px; margin-top: 400px">Ďakujeme za objednávku!</h1>
    </body>
</html>
