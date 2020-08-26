<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NMSL</title>
</head>
<body>
<form action="" method="POST">
    in:<textarea name="data" cols="" rows="" style="width: 300px; height: 200px"></textarea>
            <input type="submit" value="傳送"/>
</form>

<?php
$str=$_POST["data"];
$str_sec = explode("\n",$str);

echo "<br>------------------<br>";
echo $str_sec[0];
echo "<br>------------------<br>";
$Arr=$str_sec;
foreach($Arr as $key => $str_sec){
	echo $str_sec;
	echo $key;
}


$str_sec1= explode(" ",$str_sec);
print_r($str_sec1);
?> 

</body>
</html>