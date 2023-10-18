<?php
   	function lookforTen(int $a,int $b){
	  if($a==10||$b==10||$a+$b==10){
	    echo "True";
	  }
	  else{
	    echo "False";
	  }
	}
  fscanf(STDIN, "%d %d\n",$a,$b);
	lookforTen($a,$b);
?>
