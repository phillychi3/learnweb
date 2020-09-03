<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ISBN 長度校驗碼檢查</title>
</head><body>
<form method="POST">
    ISBN:
    <textarea name="text" cols="" rows=""></textarea>
    <input name="button" type="submit" value="傳送"/>
</form>
<?php
//setting
error_reporting(0);
$while_end=1;
$pattern= "/^([0-9]+)$/";
//run
if(isset($_POST["button"])){	
	$text = explode("\n",$_POST["text"]);
	print_r ($text);
	while($while_end<=$text[0]){
		$text_step=str_replace(array(' ','-', "\r", "\n"),"",$text[$while_end]);
		if(preg_match($pattern,$text_step)){			
			$text_step=str_split($text_step);
			$all=($text_step[0]*1)+($text_step[1]*3)+($text_step[2]*1)+($text_step[3]*3)+($text_step[4]*1)+($text_step[5]*3)+($text_step[6]*1)+($text_step[7]*3)+($text_step[8]*1)+($text_step[9]*3)+($text_step[10]*1)+($text_step[11]*3);
			$r= $all % 10;
            $ans= 10-$r;
			if ($ans == $text_step[12]){
				print "<br/>";print "O";            
			}
			else{
				print "<br/>";print "X";
			}
		}	
		else{
			print "<br/>";print "X";
		}
		$while_end++;		
	}	
}
?>
</body>
</html>