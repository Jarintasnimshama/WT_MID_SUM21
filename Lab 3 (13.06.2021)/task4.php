<html>
	<body>
		<?php
			function hello($l)
			{
				
				if($l=="raju" || $l=="mina" || $l=="mithu")
				{
					
					echo "<b>Hello</b><span style= 'color:red;'>&nbsp $l </span>";
					echo "<br>";
				}
				
				else
				{
					echo "<span style= 'color:red;'>you are not recognized </span>";
					echo "<br>";
				}
			}
			
			$name = "mina";
		
			hello($name);
			// hello("ahme");
		?>
	</body>
</html>