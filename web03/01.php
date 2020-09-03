<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd%22%3E
<html xmlns="http://www.w3.org/1999/xhtml%22%3E
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ISBN 長度校驗碼檢查</title>
</head><body>
<form action="" method="POST">
  ISBN:
  <textarea name="n1" cols="" rows=""></textarea>
  <input type="submit" value="傳送"/>
</form>
<?php
    error_reporting(0);
    $n1=$_POST["n1"];
    $n1=str_replace(array(' ','-', "\r", "\n"),"",$n1);
    $a = str_split($n1);
    $a0=$a[0];
    array_splice($a, 0, 1);
    
    while($o<=$a0*13){
        for($i=0;$i<=12;$i++){
            $s=($a[0]*1)+($a[1]*3)+($a[2]*1)+($a[3]*3)+($a[4]*1)+($a[5]*3)+($a[6]*1)+($a[7]*3)+($a[8]*1)+($a[9]*3)+($a[10]*1)+($a[11]*3);
        }
        $r=$s%10;
        $n=10-$r;
        if ($n == $a[12] ) {
            print "<br/>";
            print "O";
            $s=0;            
        }
        else {
            print "<br/>";
            print "X";
            $s=0;            
        }
        array_splice($a, 0, 13);       

    }
    
?>
</body>
</html>
