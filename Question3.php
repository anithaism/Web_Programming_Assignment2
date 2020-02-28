<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>

<?php

$month = array ('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August','September', 'October', 'November', 'December');

$count=count($month);

echo "The list of months using standard FOR loop are: <br>" ;

for($x=0;$x<$count;$x++)
{
 echo $month[$x];
 echo "<br>";
}

echo "<br>";
echo "The sorted list of months using standard FOR loop are: <br>";

sort($month);

for($x=0;$x<$count;$x++)
{
 echo $month[$x];
 echo "<br>";
}

$month = array ('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August','September', 'October', 'November', 'December');

echo "<br>";
echo "The list of months using FOREACH loop are: <br>";

$count=count($month);


foreach($month as $element)
{
 echo $element;
 echo "<br>";
}

echo "<br>";
echo "The sorted list of months using FOREACH loop are: <br>";

sort($month);

foreach($month as $element)
{
 echo $element;
 echo "<br>";
}

?>

</body>
</html>  