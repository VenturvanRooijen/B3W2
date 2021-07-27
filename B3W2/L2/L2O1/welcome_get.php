<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>De ingevulde gegevens zijn:</h1>
<?php
if($_SERVER["REQUEST_METHOD"] == "GET") {
    echo "Naam: ". $_GET["nameInput"]. "<br>";
    
    echo "Emailadres: ". $_GET["emailInput"];
}
?>
</body>
</html>