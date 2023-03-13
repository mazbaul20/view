<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Design</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <style>
        .row{
            margin: 30px;
            flex-wrap: wrap;
        }
        .card{
            margin: 30px;
            border:1px solid gray;
            width: 250px;
            height: 250px;
            padding: 10px;
            box-sizing: border-box;
            background-color: rgb(252, 250, 250);
            position: relative;
            font-family: sans-serif;
            border-radius: 5px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
        .card img{
            position: absolute;
            top:-50px;
            left: 28%;
            width: 100px;
            height: 100px;
            border: 1px solid #ddd;
            border-radius: 50%;
        }
        .card p{
            text-align: left;
            position: absolute;
            top:60px;
        }
    </style>
</head>
<body>
        <div class="row">
                <?php
                    //show output
                    require_once "./user.php";

                    $data = fopen("users.csv", "r");
                    while($info = fgetcsv($data)){
                        showInfo($info);
                    }
                    fclose($data);
                ?>
        </div>
</body>
</html>