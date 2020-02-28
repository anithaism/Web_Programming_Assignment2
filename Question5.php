<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $hamcount = test_input($_POST["hamburger"]);
     $chocmilkcount = test_input($_POST["chocmilk"]);
     $colacount = test_input($_POST["cola"]);
  }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  
  Enter quantity for Hamburger: <input type="text" name="hamburger" value="<?php echo $dimension;?>">
    <br><br>

Enter quantity for Chocolate Milk: <input type="text" name="chocmilk" value="<?php echo $dimension;?>">
    <br><br>

Enter quantity for Cola: <input type="text" name="cola" value="<?php echo $dimension;?>">
    <br><br>

    <input type="submit" name="submit" value="Calculate Bill">  
</form>

<?php

if($hamcount>0)
{
generateBill($hamcount,$chocmilkcount,$colacount);
}

function generateBill($hamcount,$chocmilkcount,$colacount)
{
$hamburger=4.95;
$chocmilk=1.95;
$cola=0.85;

$salestax=0.075;
$taxtip=0.16;


$hamtotal=$hamburger*$hamcount;
$choccost=$chocmilk*$chocmilkcount;
$colacost=$cola*$colacount;


$totalcost=$hamtotal+$choccost+$colacost;
$taxamt=$salestax*$totalcost;
$totalcosttax=$totalcost+$taxamt;
$tipamt=$taxtip*$totalcosttax;
$totalcosttaxtip=$totalcosttax+$tipamt;

echo "<h1>Restaurant Bill</h1><br><br>";

echo str_repeat('&nbsp;', 30);
echo "SAMPLE RESTAURANT<br><br>";
echo str_repeat('&nbsp;', 30);
echo "1775 COLLEGE PARKWAY<br>";
echo str_repeat('&nbsp;', 30);
echo "ALPHARETTA 30004<br>"; 
echo str_repeat('&nbsp;', 30);
echo "ph: (404) 666 7777<br><br>";


echo "DATE : " . date("Y/m/d").str_repeat('&nbsp;', 5) ."TIME :" .date("h:i:sa");
echo "<br>";
echo str_repeat('-', 90);
echo "<br><br>";

echo "ITEM" .str_repeat('&nbsp;', 35). "PRICE" .str_repeat('&nbsp;', 10). "QUANTITY" .str_repeat('&nbsp;', 10). "COST" .str_repeat('&nbsp;', 10);

echo "<br><br>";

echo "HAMBURGER" .str_repeat('&nbsp;', 20). $hamburger .str_repeat('&nbsp;', 20) .$hamcount .str_repeat('&nbsp;', 23) .$hamtotal;

echo "<br><br>";

echo "CHOCOLATE MILK" .str_repeat('&nbsp;', 10). $chocmilk .str_repeat('&nbsp;', 20) .$chocmilkcount .str_repeat('&nbsp;', 23) .$choccost;

echo "<br><br>";

echo "COLA" .str_repeat('&nbsp;', 34). $cola .str_repeat('&nbsp;', 20) .$colacount .str_repeat('&nbsp;', 23) .$colacost;

echo "<br>";
echo str_repeat('-', 90);
echo "<br>";

echo str_repeat('&nbsp;', 70) . "TOTAL COST : " .$totalcost;
echo "<br><br>";
echo str_repeat('&nbsp;', 60) . "SALES TAX(7.5%) : " .$taxamt;
echo "<br>";
echo str_repeat('-', 90);
echo "<br>";
echo str_repeat('&nbsp;', 45) . "TOTAL COST WITH TAX : " .$totalcosttax;
echo "<br><br>";
echo str_repeat('&nbsp;', 75) . "TIP(16%) : " .$tipamt;
echo "<br>";
echo str_repeat('-', 90);
echo "<br>";
echo str_repeat('&nbsp;', 60) . "FINAL AMOUNT : " .$totalcosttaxtip;

}

?>

</body>
</html>