<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>form</title>
</head>
<body>
<?php
    if(isset($_POST['name'])) {
        echo $_POST["name"]. "<br>";
        if(empty($_POST['name'])){
           $name_error = "Voer een naam in <br />";
        }
        }

    // if(isset($_POST['email'])) {
    //     echo $_POST["email"];
    //     if(empty($_POST['email'])){
    //         $email_error = "Voer een email in <br />";
    //     }
    // };
    if(isset($_POST['email'])) && empty($_POST['email']) == false) {
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            echo $_POST["email"];
            if(empty($_POST['email'])){
                $email_error = "Voer een email in <br />";
            }
            else{
                Pog
            }
        };
        }
    }
    ?>
    <form action="" method="post">
        <input type="text" value=<?php echo $_POST['name'] ?> name="name" id="nameInput" placeholder="Naam"><p class="required"> * <?php echo $name_error ?> </p> <br>
        <input type="email" value=<?php echo $_POST['email'] ?> name="email" id="emailInput" placeholder="Email"><p class="required"> * <?php echo $email_error ?> </p><br>
        <input type="submit" value="Submit">
    </form>

</body>
</html>