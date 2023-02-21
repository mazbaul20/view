<?php
    include "function.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/favicon-32x32.png" type="image/x-icon">
</head>
<body>
    <div class="card">
        <h1>PASSWORD GENERATOR</h1>
        <form action="" method="post">
            <?php
                if(isset($_POST['submit'])){
                    if(empty($_POST['paw_gen'])){
                        $err = "<span style='color:#ef6262'><b>Number is Required!</b></span>";
                    }elseif(!is_numeric($_POST['paw_gen'])){
                        $err = "<span style='color:#ec5353'><b>String Not valid!</b></span>";
                    }else{
                        $pwd_length = $_POST['paw_gen'];
                        if($pwd_length >=8 && $pwd_length <= 50){
                            $view_pwd = password_generator($pwd_length);
                        }else{
                            $err = "<span style='color:#ec5353'><b>Generate password with minimum 8 and maximum 50 characters!</b></span>";
                        }
                    }
                }
            ?>
            <div class="form-group">
                <table>
                    <tr>
                        <td></td>
                        <td>
                            <?php 
                                global $view_pwd;
                                if(isset($view_pwd)){
                                    echo $view_pwd;
                                }elseif(isset($err)){
                                    echo $err;
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="text" name="paw_gen" placeholder="Number of password">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <div class="btn-size">
                                <input type="reset" id="button1" value="Reset">
                                <input type="submit" id="button1" name="submit" value="Submit">
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </form>

    </div>
</body>
</html>