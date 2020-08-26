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
$test[] = ["face"=>"aa", "item"=>"black", "money"=>100];
$test[] = ["face"=>"a2a", "item"=>"b2lack", "money"=>1000];
$test[] = ["face"=>"a3a", "item"=>"b3lack", "money"=>10000];
$test[] = ["face"=>"a4a", "item"=>"4black", "money"=>100000];
$test[] = ["face"=>"a5a", "item"=>"b5lack", "money"=>1000000	];
print_r($test);
$aa = $test[2];
$test[2] = $test[4];
$test[4] = $aa;
print_r($test);
$test[3]["item"]=green; 
print_r($test);

$str=$_POST["data"];
$str_sec = explode("\n",$str);

echo "<br>------------------<br>";
echo $str_sec[0];
echo "<br>------------------<br>";
$Arr=$str_sec;
foreach($Arr as $key => $str_sec){
	$data[$key]=$str_sec;
	
}
print_r($data);

print_r(intval($data[0]+1));

echo "<br>------------------<br>";
$data[0]=intval($data[0]);	

echo $data[$data[0] + 1];

$for2=$data[0]+1;

echo is_numeric($for2);

for($i= 1;$i<=$data[$data[0]+1];$i++){
	echo hello;
	for($o=0;$o>=2;$o++){
		$str_sec1= explode(" ",$str_sec);
		$face[$o]=$str_sec1[0];
		$item[$o]=$str_sec1[1];
		$money[$o]=$str_sec1[2];


	}
}


?> 

</body>
</html>