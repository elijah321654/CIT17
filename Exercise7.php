<html>	
<body>
<?php

print " Exercise 7 ";
echo "<table>" ;

for ($i = 1; $i <= 7; $i++) {
    echo "<tr>"; 
  
    for($j = 1; $j <= 7; $j++){
        echo "<td>" . $i * $j . "</td>"; 
    }
    echo "</tr>";
}
echo "</table>";
?>  

	</body>
</html>