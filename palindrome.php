<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js">
      </script>
  </head>
  <title>PHP Palindrome Test</title>

 <body>
     <div class="container">
         <h1>PHP Palindrome Test</h1>
     <form action="/palindrome.php" method="post">
  Possible Palindrome: <input type="text" name="palindrome">
  <input type="submit" value="Submit">
         <br><br>
</form>
     </div>
     <div class="container">
<?php
function isPalindrome($palindrome) {
    
    echo "<p>You have entered: $palindrome</p>";

    //remove special characters
    $palindrome = strtolower(preg_replace('/[^A-Za-z0-9\-]/', '', $palindrome));

    //reverse the string
    $reverse = strrev($palindrome);

    if ($palindrome == $reverse and strlen($palindrome)>0) {
        echo "<h2>This is a palindrome</h2>";
    } 
    else {
        echo "<h2>This is not a palindrome</h2>";
    }
}
         
if ( ! empty($_POST['palindrome'])){
    $palindrome = $_POST['palindrome'];
}
else
{
    $palindrome = "";
}
         

isPalindrome($palindrome);
 ?>

     </div>

 </body>
</html>