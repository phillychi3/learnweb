<?php ob_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd%22%3E
<html xmlns="http://www.w3.org/1999/xhtml%22%3E
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ISBN 長度校驗碼檢查</title>
</head>
<body>
<form action="" method="POST">
    ISBN:  <input type="text" name="n1">
           <input type="submit" value="傳送"/><br/>
</form>
<?php
$n1=$_POST["n1"];
echo "你輸入的是 : $n1<br/>";
echo "陣列值是 : ";
$a = str_split($n1);
print_r($a);
//陣列編號是從0開始，不是1
$s = ($a[0]1)+($a[1]3)+($a[2]1)+($a[3]3)+($a[4]1)+($a[5]3)+($a[6]1)+($a[7]3)+($a[8]1)+($a[9]3)+($a[10]1)+($a[11]3);
echo "<br/>";
echo "S的值是: $s"; //計算加權總和
$r= $s % 10;
echo "<br/>";
echo "R的值是: $r"; //求餘數
$n= 10-$r;

echo "<br/>";
echo "N的值是: $n"; //校驗碼
if ($n == 10) {
echo "<br/>";
echo "O";
}
else {
    echo "<br/>";
    echo "X";
    } //若 N=10，校驗碼是0，否則為N
?> 
</body>
</html>