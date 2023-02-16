<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        function mathProject(int $num){
            for($i=1;$i<=10;$i++){
                echo "$i x $num = ".$i*$num."<br/>";
            }
        }
    ?>
    <div class="block">
      <h2>Math Project</h2>
      <form action="" method="post">
          <table>
            <tr>
              <td></td>
              <td> <input type="text" name="num" placeholder="Enter your any integer value..."></td>
            </tr>
            <tr>
              <td></td>
              <td>
                <input type="reset" value="Reset"class="button1"/>
                <input type="submit" name="submit" value="Submit" class="button1"/>
              </td>
            </tr>
          </table>
      </form>
      <div class="showOutput">
        <?php
            if(isset($_POST['submit'])){
                if(empty($_POST['num'])){
                    echo "<span style='color:#ef6262'><b>Number is Required!</b></span>";
                }elseif(!is_numeric($_POST['num'])){
                    echo "<span style='color:#ec5353'><b>String Not valid!</b></span>";
                }else{
                    $num = $_POST['num'];
                    mathProject($num);
                }
            }
        ?>
      </div>
      <div class="date">
        <?php
          date_default_timezone_set('Asia/Dhaka');
          echo date('d-F-Y h:i:s A');
        ?>
      </div>
    </div>
</body>
</html>