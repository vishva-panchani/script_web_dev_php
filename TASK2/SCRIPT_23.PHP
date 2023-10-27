<?php
$i =45;
$j = 75;
$k = 7;
 
if($i > $j && $i > $k)
{
    echo "<b>$i is greatest.</b>";
}
elseif($j > $i && $j > $k)
{
    echo "<b>$j is greatest.</b>";
}
else
{
    echo "<b>$k is greatest.</b>";
}

?>