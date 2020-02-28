<!DOCTYPE HTML>  
<html>
<head>

</head>
<body> 

<table width="300px" cellspacing="0px" cellpadding="1px" border="1px">

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $dimension = test_input($_POST["dimension"]);
  }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Enter dimension for Checkerboard: <input type="text" name="dimension" value="<?php echo $dimension;?>">
    <br><br>
    <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2> Checkerboard for $dimension * $dimension</h2>";
echo "<br>";

for($row=1;$row<=$dimension;$row++)
{
 echo "<tr>";
 for($col=1;$col<=$dimension;$col++)
 {
  $total=$row+$col;
  if($total%2==0)
  {
   echo "<td height=35px width=35px bgcolor=red></td>";
  }
  else
  {
   echo "<td height=35px width=35px bgcolor=#000000></td>";
  }
 }
 echo "</tr>";
}

?>


</body>
</html>