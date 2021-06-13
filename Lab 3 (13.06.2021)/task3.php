<html>
	<body>
		<?php
			function area($l,$w)
			{
				$perimeter = (2*$l)+(2*$w);
				if($l==$w)
				{
					$area = $l*$w;
					echo"the shape is a square<br>";
					echo"Perimeter: $perimeter<br>";
					echo "Area:$area";
				}
				else
				{
					$area = $l*$w;
					echo"Perimeter: $perimeter<br>";
					echo "Area:$area";
				}
			}
			$length = 15;
			$width =15;
		
			echo "Length: ".$length."<br>Width:".$width."<br>";
			area($length,$width);
		?>
	</body>
</html>