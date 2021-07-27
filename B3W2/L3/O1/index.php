<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
<?php
    if(isset($_POST['name'], $_POST['email'])) {
        echo $_POST["name"]. "<br>";
        echo $_POST["email"];
    };
    ?>
    <form action="" method="post">
        <label for="nameInput">Name:</label>
        <input type="text" name="name" id="nameInput"> <br>
        <label for="emailInput">Email:</label>
        <input type="email" name="email" id="emailInput"> <br>
        <input type="submit" value="Submit">
    </form>

</body>
</html>