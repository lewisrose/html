<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Title </title>
</head>

<body>
    <?php
  //與mysql連線
  $connect = mysqli_connect(
      'localhost',
      'lewis',
      'zx159951zx'
  ) or die("fail to connect to masql! <br>");
  //與db連線
  $db = "nba";
  if(!mysqli_select_db($connect, $db))
  {
      echo "db:". $db. "fail<br>";
  }
  else
  {
      echo "db:". $db. "ok!<br>";
  }
  
  $ql = "SELECT *FFORM na";
  echo "query:".$ql ."<br>";
  $r = mysqli_query($connect,"SET NAMES 'utf8'")
        
  
?>
</body>

</html>
