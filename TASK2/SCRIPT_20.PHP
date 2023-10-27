<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Script_20</title>
    <form action="" method='post'>
        Enter any Number:<input type="number" name='nm'>
        <input type="submit" value='submit'>
    </form>
 </head>
 <body>
    
 </body>
 </html>
 <?php
 error_reporting(0);
 $i = $_POST['nm'];
 $factorial=1;
 for($j=1;$j<=$i;$j++){
    $factorial= $factorial*$j;
 }
 echo "The factorial of $i is $factorial";
 ?>