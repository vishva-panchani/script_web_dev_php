

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Script_19</title>
    
    <form action="" method="post">
    Enter any number :<input type="number" name = 'num'>
    <input type="submit" value="submit">
    </form>
</head>
<body>
    
</body>
</html>










<?php
error_reporting(0);
$number = $_POST['num'];
if($number == 2){
    echo "$number is  a prime number";
}
elseif($number % 2 == 0 || $number % 3 == 0 || $number % 5 == 0){
    echo "$number is not a prime number";
}

else{
    echo "$number is a prime number";
}
?>
