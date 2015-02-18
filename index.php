<!--Author:		George Hall
	File:	  index.php
	Purpose:  Recursively add numbers until it returns single digit. 
	Example: 10 + 5 = 15 = 1 + 5  = 6
-->

<html>
<head>
	<title>Number Chart</title>
	<link rel ="stylesheet" type="text/css" href="style.css" >
</head>
<body>

	<?php
		$number = 0;
		$const = 8;
		$maxNum = 200;
		print("<table><tr><td align=\"right\" colspan=\"4\">Total</td></tr>");

		for($i = $number; $i <= $maxNum; $i=$i+$const) {
			$resultWholeNum = $i + $const;
			/*$resultParse = $resultWholeNum / 10;
			$resultInteger = floor($resultParse);
			$resultDecimal = ($resultParse - $resultInteger) * 10;
			*/
			$resultInteger = floor($resultWholeNum / 10);
			
			$resultDecimal = $resultWholeNum % 10;
			$resultTotal = $resultInteger + $resultDecimal;
				while($resultTotal >= 10) {
					$resultInteger2 = floor($resultTotal / 10);
					$resultDecimal2 = ($resultTotal) % 10;
					$resultTotal = $resultInteger2 + $resultDecimal2;
				}
			print("<tr><td width=\"70px\" class=\"bottomborder\">$i + $const</td><td width=\"45px\" class=\"bottomborder\">$resultWholeNum</td><td width=\"25%\" class=\"bottomborder\">$resultInteger + $resultDecimal</td><td width=\"25%\" class=\"bottomborder\"><strong>$resultTotal</strong></td></tr>");
			// print("$i + $const = $resultWholeNum = $resultInteger + $resultDecimal = $resultTotal<br/><br/>");
		}
/*
		print("</table>Starting Number: $number <br />
				Constant: $const<br />
				Result: $resultNumber<br />
				Integer: $resultInteger<br />
				Decimal: $resultDecimal<br />
				First and Second Number: $first $second");
				*/
	?>
</body>
</html>