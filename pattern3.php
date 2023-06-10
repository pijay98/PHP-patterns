<?php 
$n=4;
for($i=1;$i<=4;$i++){
	
	for($j=1;$j<=(2*$n)-1;$j++){
		if($j>=$n-($i-1) &&  $j<=$n+($i-1)){
			echo " * ";
		}
		else{
			echo '&nbsp;&nbsp;&nbsp;';
		}
	}
	echo '</br>';
}
 ?>