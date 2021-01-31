<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>data</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title> Title </title>
</head>

	<body>
	<?php
        include("connect.php");
        
        $ql = "SELECT * FROM na";
        echo "query:".$ql ."<br>";
        $r = mysqli_query($connect,"SET NAMES 'utf8'");
        
        $result = mysqli_query($connect,$ql);
        $n = mysqli_num_rows($result);
        echo "Count:".$n ."<br>";
        echo "<table border=1>";
        echo "<td>id</td>";
        echo "<td>name</td>";
        echo "<td>data</td>";
        while($meta = mysqli_fetch_assoc($result))
        {
            echo "<tr>";
            echo "<td>". $meta["id"] ."</td>";
            echo "<td>". $meta["name"] ."</td>";
            echo "<td>". $meta["data"] ."</td></tr>";
        }
        
        $sql1 = "select * from 表單名稱 where data = ".$time;
        $result1 = mysql_query($sql1) or die('MySQL query error');
  
        while($row = mysql_fetch_array($result1))
        {
         echo $row['name']." ";
         echo $row['data']."<br>";  
        }
        
        while($meta = mysqli_fetch_assoc($result))
        {
            echo "<tr>";
            echo "<td>". $meta["id"] ."</td>";
            echo "<td>". $meta["name"] ."</td>";
            echo "<td>". $meta["data"] ."</td></tr>";
        }
        mysqli_close($connect);
        ?>
    <!--選單-->
	<form  name="t1" method="get" action="#" id="i1">
            <select name=" name"  > 
            <option value="0"> LA </option>
            <option value="1"> TP  </option>
            <option value="2"> UA  </option>
            <option value="3"> US  </option>
	 </select>
	<input type="submit" name="送出資料" /><br>
	</form>
	<!--輸入-->
	<form  name="t2" method="get" action="#" id="i2">
	<input type="text"  name="textbox" />
	<input type="submit" name="送出資料" /><br>
	</form>
	<!--日期-->
	<form  name="t3" method="get" action="#" id="i3">
	<input type="date"  name="time" />
	<input type="submit" name="送出資料" />
	</form>
	

</body>
</html>
