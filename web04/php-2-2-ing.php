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

//data=資料輸入
//$data=資料轉陣列
//$ts暫存
//$out=輸出陣列
//$out_count計算
<?php
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
$out_count=0;
for($i=$data[0]+2;$i<=$data[$data[0]+1]+$data[0]+1;$i++){
    for($o=0;$o<=2;$o++){
        $ts= explode(" ",$data[$i]);
        $out[$out_count][$o]=$ts[$o];
        
    }
$out_count++;
}

echo "<br>------------------<br>";
print_r($out);
echo "<br>------------------<br>";





?> 

</body>
</html>