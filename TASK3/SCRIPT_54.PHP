<?php
$a = array(array("id"=>101,"name"=>"vishva","age"=>22),
           array("id"=>102,"name"=>"pari","age"=>24),
	       array("id"=>103,"name"=>"jiya","age"=>17)
	             
);
$student=array_column($a,"name");
print_r($student);
?>
