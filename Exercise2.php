<html>	
<body>
<?php 
        print "<h4> Exercise 2 </h4>";
        $x=10;
        $y=7;

        $txt2 = "10 + 7 = "; $sum = $x + $y;
        $txt3 = "10 - 7 = "; $difference = $x - $y;
        $txt4 = "10 * 7 = "; $product = $x * $y;
        $txt5 = "10 / 7 = "; $quotient = $x / $y;
        $txt6 = "10 % 7 = "; $modulo = $x % $y;
        
        echo $txt2 ;
        echo $sum. "<br>";
        echo $txt3;
        echo $difference. "<br>";
        echo $txt4;
        echo $product. "<br>";
        echo $txt5;
        echo $quotient. "<br>";
        echo $txt6;
        echo $modulo;
    php?>
	</body>
</html>