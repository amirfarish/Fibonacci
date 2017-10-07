<?php  
$a = 1;  
$b = 0;  
$jumlah = 0;  
$n = 0;  
while ($n < 4000000)   
{  
 $n = $a + $b;  
 echo $n ;
 echo " , ";
 $b = $a;  
 $a = $n;  
	if (!($n % 2))   
	{  
	 	$jumlah += $n;  
	}  
 } 
 echo "<br> <br>";
 echo "Sum Of Even Value = " . $jumlah;  
?>  