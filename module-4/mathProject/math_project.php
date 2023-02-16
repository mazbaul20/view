<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .block{
        width:400px;
        height:400px;
        background-color: #f9f9fa;
        margin:0 auto;
        position: relative;
        font-family: sans-serif;
        border-radius: 5px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    .block h2{
      text-align:center;
      padding-top:10px;
    }
    .block table{
        padding-left: 20px;
    }
    .showOutput{
      padding-top:10px;
      padding-left:28px;

    }
    .date{
      position: absolute;
      bottom: 0px;
      padding:20px;
      font-family: sans-serif;
    }

    .button1 {
      background-color:#2596be;
      padding: 7px 19px;
      text-align: center;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
      color:white;
      border:none;
      border-radius: 2px;
      /* transition-duration: 0.4s; */
    }

    .button1:hover {
      border: 1px solid #4CAF50;
      color:black;
      background-color: white;
    }
    input[type=text] {
    width: 100%;
    padding: 8px 17px;
    margin: 8px 0;
    box-sizing: border-box;
  }
  </style>
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
//          if(isset($_POST['submit'])){
//            if(!empty($_POST['num'])){
//              $num = $_POST['num'];
//              mathProject($num);
//            }else{
//              echo "<span style='color:red'><b>Number is Required!</b></span>";
//            }
//          }
            if(isset($_POST['submit'])){
                if(empty($_POST['num'])){
                    echo "<span style='color:red'><b>Number is Required!</b></span>";
                }elseif(!is_numeric($_POST['num'])){
                    echo "<span style='color:red'><b>Number is Required!</b></span>";
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