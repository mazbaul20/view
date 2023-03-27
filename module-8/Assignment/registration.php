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
            if(isset($_POST['submit']) && !empty($_POST['submit'])){
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $email = $_POST['email'];
                $pass  = $_POST['pass'];
                $Confirm_pass = $_POST['Confirm_pass'];

                // Check if email is valid
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    echo "<p style='color:red;'>Invalid email format</p>";
                }elseif($pass !== $Confirm_pass){
                    // Check if password and confirm password match
                    echo "<p style='color:red;'>Passwords do not match</p>";
                }else{
                    // Registration successful
                    echo "<p style='color:green;'>Registration successful!</p>";
                    
                    $filename = "data.csv";
                    file_put_contents($filename,"{$fname},{$lname},{$email},{$pass},\n",FILE_APPEND);
                }
                
            }


        ?>
                <form method="post">
                    <label for="fname">First name</label>
                    <input type="text" name="fname" id="fname" placeholder="First name" required>
                    <label for="lname">Last name</label>
                    <input type="text" name="lname" id="lname" placeholder="Last name" required>
                    <label for="email">Email address</label>
                    <input type="email" name="email" id="email" placeholder="Email address" required>
                    <label for="pass">Password</label>
                    <input type="password" name="pass" id="pass" placeholder="password" required>
                    <label for="Confirm_pass">Confirm password</label>
                    <input type="password" name="Confirm_pass" id="Confirm_pass" placeholder="Confirm password" required>
                    <label for=""></label>
                    <input type="submit" name="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>