<?php
    require_once "./uploadPhoto.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment module-6</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="column column-50 column-offset-20">
                <h1>Assignment Module-6</h1>
                <?php
                    if($_SERVER['REQUEST_METHOD']=='POST'){ 
                        $name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                        $email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
                        $password = filter_input(INPUT_POST,'password');
                        
                        $uphoto = new UploadPhoto("photo","uploads/");
                        // if($_FILES['photo']){
                        //     $file_name = $_FILES['photo']['name'];
                        //     $tmp_name  = $_FILES['photo']['tmp_name'];
                        //     move_uploaded_file($tmp_name,"uploads/".str_replace(" ","_",$file_name));
                        //     echo "photo uploaded successfully";
                        // }
                        if($uphoto->get_error()==1 && $name && $email && $password){
                            $uphoto->photo_uploaded();
                            //$password = md5($password);

                            date_default_timezone_set('Asia/Dhaka');
                            $time = new DateTime();
                            $times = date_format($time,'h:i:sa d-M-Y');

                            file_put_contents("./users.csv","{$times},{$name},{$email},{$password},{$uphoto->get_photo_name()}\n",FILE_APPEND);

                            //session
                            session_start();
                            $_SESSION['username'] = $name;
                            setcookie('usernamecookie',$name);

                            header("location:users.php");
                        }else{
                            echo "Please try again!";
                        }
                    }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="column column-50 column-offset-20">
                <form method="post" enctype="multipart/form-data">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" placeholder="username" required>
                    <label for="email">E-mail</label>
                    <input type="text" name="email" id="email" placeholder="email" required>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="password" required>
                    <label for="photo">Profile Picture</label>
                    <input type="file" name="photo" id="photo" required>
                    <label for=""></label>
                    <input type="submit" name="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>