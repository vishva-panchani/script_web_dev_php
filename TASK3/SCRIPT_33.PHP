<?php
$exits=array("a"=>"India","b"=>"Dubai","c"=>"London");
if(array_key_exists("a",$exits))
{
	echo "key exits!";
}
else
{
	echo "key does not exits!";
}
?>