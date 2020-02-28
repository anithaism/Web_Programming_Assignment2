<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>

<?php

echo "<h2>10 BEST RESTAURANTS IN ATLANTA </h2><br>";

$hotels=array("Chama Gaucha"=>"$40.50", "Aviva by Kameel"=>"$15.00", "Bone’s Restaurant"=>"$65.00", "Umi Sushi Buckhead"=>"$40.50", "Fandangles"=>"$30.00", "Capital Grille"=>"$60.50", "Canoe"=>"$35.50", "One Flew South"=>"$21.00", "Fox Bros. BBQ"=>"$15.00", "South City Kitchen Midtown"=>"$29.00");

echo "<table border='4' class='hotellist' cellspacing='0'>

<tr>
  <th>HOTEL NAME</th>
  <th>AVERAGE COST</th>
</tr>";

foreach ($hotels as $key=>$val) 
    { 
        echo '<tr>';
        echo '<td>' . $key . '</td>';
        echo '<td>' . $val . '</td>';
        echo '</tr>';
    }


function sortByCost($array)
{

 asort($array);

echo "<table border='4' class='hotellist' cellspacing='0'>

<tr>
  <th>HOTEL NAME</th>
  <th>AVERAGE COST</th>
</tr>";

foreach ($array as $key=>$val) 
    { 
        echo '<tr>';
        echo '<td>' . $key . '</td>';
        echo '<td>' . $val . '</td>';
        echo '</tr>';
    }
}

function sortByName($array)
{
 ksort($array);

echo "<table border='4' class='hotellist' cellspacing='0'>

<tr>
  <th>HOTEL NAME</th>
  <th>AVERAGE COST</th>
</tr>";

foreach ($array as $key=>$val) 
    { 
        echo '<tr>';
        echo '<td>' . $key . '</td>';
        echo '<td>' . $val . '</td>';
        echo '</tr>';
    }

}

sortByCost($hotels);
echo "<br><br>";
echo "THE SORTED LIST OF HOTELS BASED ON PRICE: <br>";


sortByName($hotels);
echo "<br><br>";
echo "THE SORTED LIST OF HOTELS BASED ON HOTEL NAME: <br>";

?>

</body>
</html>