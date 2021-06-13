<html>
	<body>
		<?php
			function grade ($m)
			{
				if($m>="90")
				{
					echo "<h1> A+ </h1>";
				}
				else if($m>=80 && $m<90)
				{
					echo "<h1> A </h1>";
				}
				else if($m>=70 && $m<80)
				{
					echo "<h1> B </h1>";
				}
				else if($m>=60 && $m<70)
				{
					echo "<h1> C </h1>";
				}
				else 
				{
					echo "<h1> F </h1>";
				}
			}
			$marks=90;
			grade($marks);
		?>
	</body>
</html>