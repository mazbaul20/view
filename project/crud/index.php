<?php
require_once "inc/functions.php";
$info = "";
$task  = isset($_GET['task']) ? $_GET['task'] : 'report';
$error = isset($_GET['error']) ? $_GET['error'] : '0';
if('seed'==$task){
    seed();
    $info = "Seeding in complete";
}
$fname = "";
$lname = "";
$roll="";
if(isset($_POST['submit'])){
    $fname = filter_input(INPUT_POST,'fname',FILTER_SANITIZE_STRING);
    $lname = filter_input(INPUT_POST,'lname',FILTER_SANITIZE_STRING);
    $roll = filter_input(INPUT_POST,'roll',FILTER_SANITIZE_STRING);
    if($fname != "" && $lname != "" && $roll != ""){
        $stdinfo = addstudent($fname,$lname,$roll);
        if($stdinfo){
            header('Location: index.php?task=report');
        }else{
            $error = 1;
        }
    }
}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>crud project</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h2>CRUD Project</h2>
                <p>A sample project to perform CRUD operations using plain files and PHP</p>
                <?php include_once('inc/templates/nav.php');?>
                <hr>
                <?php
                    if($info!=''){
                        echo "<p>{$info}</p>";
                    }
                ?>
            </div>
        </div>
        <?php if('1'==$error):?>
            <div class="row">
                <div class="column column-60 column-offset-20">
                    <blockquote>
                        Duplicate Roll Number
                    </blockquote>
                </div>
            </div>
        <?php endif; ?>
        <?php if('report'==$task):?>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <?php generateReport();?>
            </div>
        </div>
        <?php endif; ?>
        <?php if('add'==$task): ?>
            <div class="row">
                <div class="column column-60 column-offset-20">
                    <form action="index.php?task=add" method="POST">
                        <label for="fname">First Name</label>
                        <input type="text" name="fname" id="fname" placeholder="first name" required value="<?php echo $fname; ?>">
                        <label for="lname">Last Name</label>
                        <input type="text" name="lname" id="lname" placeholder="last name" required value="<?php echo $lname; ?>">
                        <label for="roll">Roll</label>
                        <input type="number" name="roll" id="roll" placeholder="roll" required value="<?php echo $roll; ?>">
                        <label for=""></label>
                        <button type="submit" name="submit" class="button-primary">Save</button>
                    </form>
                </div>
            </div>
        <?php
            endif;
        ?>
        <?php if('edit'==$task):
            $id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_STRING);
            $student = getStudent($id);
            if($student):
        ?>
            <div class="row">
                <div class="column column-60 column-offset-20">
                    <form method="POST">
                        <input type="hidden" name="id" value="<?php echo $student['id']; ?>">
                        <label for="fname">First Name</label>
                        <input type="text" name="fname" id="fname" required value="<?php echo $student['fname']; ?>">
                        <label for="lname">Last Name</label>
                        <input type="text" name="lname" id="lname" required value="<?php echo $student['lname']; ?>">
                        <label for="roll">Roll</label>
                        <input type="number" name="roll" id="roll" required value="<?php echo $student['roll']; ?>">
                        <label for=""></label>
                        <button type="submit" name="submit" class="button-primary">Update</button>
                    </form>
                </div>
            </div>
        <?php
            endif;
        endif;
        ?>
    </div>
</body>
</html>