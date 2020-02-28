<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php

function isBitten()
{
$x=rand(0,100);
if($x<50) 
  echo "Charlie ate my lunch";
else 
  echo "Charlie didnt eat my lunch";
}

echo "Probability : <br><br> ";
isBitten();

?>




</body>
</html>