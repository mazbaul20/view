<?php
    include_once "Person.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment Module-5 Task-3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $person = new Person();
        if(isset($_POST['submit'])){
            if(!empty($_POST['name'] && $_POST['email'])){
                if(preg_match('/^[a-zA-Z\s]+$/',$_POST['name'])){
                    $pname  = $_POST['name'];
                    $pemail = $_POST['email'];

                    $person->setName($pname);
                    $person->setEmail($pemail);
                }else{
                    $err = "<span style='color:#ef6262'><b>Invalid Name</b></span>";
                }
            }else{
                $err = "<span style='color:#ef6262'><b>Field must not be Empty!</b></span>";
            }
            
        }
    ?>
    <div class="form-design">
        <?php 
            if(!empty($err)){
                echo $err;
            }
            
        ?>
        <form action="" method="post">
            
            <label for="name">Name</label>
            <input type="text"  name="name" placeholder="Your name..">

            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Your email..">

            <input type="submit" name="submit" value="Submit">
        </form>
        <form action="">
                <?php
                echo <<<DOC
                <b>{$person->getName()}</b><br/>
                <b>{$person->getEmail()}</b><br/>
                DOC;
                ?>
        </form>
    </div>
</body>
</html>