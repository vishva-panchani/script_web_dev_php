<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php script 15</title>
</head>
<body>
    <h1>script to find the largest number out of three</h1>
    <form action="" method="post">
        Enter a number 1: <input type="number" name="number_1"><br/>
        Enter a number 2: <input type="number" name="number_2"><br/>
        Enter a number 3: <input type="number" name="number_3"><br/>
        <input type="submit" name="submit" value="Largest Number">
    </form>
<?php
if(isset($_POST['submit'])){

$i =$_POST['number_1'];
$j = $_POST['number_2'];
$k = $_POST['number_3'];
 
if($i > $j && $i > $k){
    echo "<b>$i is greatest.</b>";
}
elseif($j > $i && $j > $k){
    echo "<b>$j is greatest.</b>";
}
else{
    echo "<b>$k is greatest.</b>";
}
}
?>

</body>
</html>