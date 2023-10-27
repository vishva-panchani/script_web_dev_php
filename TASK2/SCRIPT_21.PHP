<?php
//palindrome numbers are number which are same from reverse example 4554,1221
$num=232 ;
$num1=strrev($num);
if($num1==$num){
    echo "The Number is Palindrome";
}
else
{
    echo "The Number is not Palindrome";
}
?>