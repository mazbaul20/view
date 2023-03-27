<?php
    session_start();
    
    //$_SESSION['email'];
    //$_SESSION['password'] ;
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
                <h1>Assignment Module-8</h1>
            </div>
        </div>
        <div class="row">
            <div class="column column-50 column-offset-20">
            <?php
                if(isset($_POST["login"])){
                    $email = $_POST["email"];
                    $password = $_POST["password"];
            
                    // Check if email and password are filled
                    if(empty($email) || empty($password)){
                        echo "<p style='color:red;'>Both fields are required and must not be empty</p>";
                    }
                    // Check if email and password are correct
                    // Here, you would usually check the database or session for the user's data
                    // and verify that the email and password match
                    elseif($email != "example@gmail.com" || $password != "password"){
                        echo "<p style='color:red;'>Invalid login credentials</p>";
                    }
                    // Login successful
                    else{
                        echo "Login Successful";
                        header("locatio");
                    }
                }
                $filename = "data.csv";
                $data = file_get_contents($filename);
                
            ?>
                <form method="post">
                    <label for="email">E-Mail</label>
                    <input type="email" name="email" id="email" placeholder="email" required>
                                        
                    <label for="pass">Password</label>
                    <input type="password" name="password" id="password" placeholder="password" required>
                    
                    <label for=""></label>
                    <input type="submit" name="login" value="Login">
                </form>
            </div>
        </div>
    </div>
</body>
</html>