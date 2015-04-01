<html>
	<head>
		<title> exercice 1 </title>
		<meta charset = "UTF-8" />
		
		<style>
			td 
			{
				border : 1px solid black;
			}
		</style>
	</head>
	
	<body>
	<table>
		<?php
			$i;
			$j;
			for($i = 0; $i <= 13; $i++)
			{
				echo "<tr> </tr>";
				for($j = 0; $j <= 13; $j++)
				{
					echo "<td> </td>";
				}
			}
		?>
		</table>
		
		<a href="exo2.php"> exercice suivant </a>
	</body>
</html>
