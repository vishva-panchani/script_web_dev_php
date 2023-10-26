<?php
$student=array("name"=>"vishva","age"=>22,"email"=>"vk67@gmail.com");
$clg=array("faculty"=>"cs&it","department"=>"MCA","uni"=>"atmiya");
$merge=array_merge($student,$clg);
print_r($merge);
?>