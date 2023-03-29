<?php
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment module-8</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="column column-50 column-offset-20">
                <h1>Login form</h1>
            </div>
        </div>
        <div class="row">
            <div class="column column-50 column-offset-20">
                <?php
                    echo "<h3>WellCome ".$_SESSION['name']."</h3>";
                    
                    if (!isset($_SESSION['login']) || $_SESSION['login'] !== true){
                        header('Location: login.php');
                        exit;
                    }
                    if(isset($_POST['logout'])){
                        session_destroy();
                        header('location:login.php');
                        exit;
                    }
                ?>
                <form action="" method="post">
                    <input type="submit" name="logout" value="logout">
                </form>
            </div>
        </div>
    </div>
</body>
</html>