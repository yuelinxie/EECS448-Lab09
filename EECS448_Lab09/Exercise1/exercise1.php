<?php
//output possible errors
error_reporting(E_ALL);
ini_set("display_errors", 1);

//table
echo "<table style= 'width:100%' border = 1px>";
echo "<tr border = '1'>";
echo "<th>y\x</th>";

for($x = 1;$x <= 100; $x++){
    echo "<th>$x</th>";
  }
  echo "</tr>";
  for($y = 1;$y <= 100; $y++){
    echo "<tr>";
    echo "<th>$y</th>";
    for($z = 1;$z <= 100; $z++){
        echo "<td> " . $y * $z . "</td>";
    }
    echo "</tr>";
  }
  echo "</tr>";
  echo "</table>";
?>
    
