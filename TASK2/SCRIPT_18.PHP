<?php
	 $i = $_POST['num'];
	 $j=rand(1,10);
	 if($i>10){
		echo "Invalid Number";
	 }
	 elseif($i==$j){
		echo "You guessed the number correctly ";
	 }
	 else{
		echo "You guessed the number incorrectly. The number was $j";
	 }
?>