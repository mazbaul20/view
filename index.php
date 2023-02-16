<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <style>
        body{
            margin:0px;
            border:0px;
            padding:0px;
            outline:0;
        }
        .pgBlock{
            margin:0px auto;
            width:80%;
            height:80%;
        }

    </style>
</head>
<body>
    
    <?php
            function mathProject(int $num){
                for ($i = 1; $i <= 10; $i++) {
                    echo "{$i} x {$num} = ".$i*$num."<br/>";
                }
            }
    ?>
    <div class="pgBlock">
        <h2>Simple Math Project</h2>
        <form action="" method="POST" class="form">
            <table class="table">
                <tr>
                    <td>Input</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="reset">
                        <input type="submit" name="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </div>

        <?php
            if($_SERVER['REQUEST_METHOD']=="POST"){
                if(empty($_POST['name'])){
                    $errname = "<span style='color:red;'>Name is Required</span>";
                }else{
                    $num = $_POST['name'];
                    $result = mathProject($num);
                }
                
            }
        ?>
</body>
</html>