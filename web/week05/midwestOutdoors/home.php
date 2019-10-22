<html>
<head>
<title>Restaurants</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
<div id="back">
	<?php include 'navbar.php'; ?>
	
	<?php
	include 'db_access.php';
		
	foreach ($db->query("SELECT * FROM state") as $row) {
		echo "<h3>" . $row["name"] . "</h3>";
		$stateId = $row["id"];
			
		foreach ($db->query("SELECT * FROM city WHERE state_id=$stateId") as $state_st) {
			echo "<h4>" . $state_st["name"] . "</h4>";
			echo "<ul>";
			$countyId = $state_st["id"];
				
			foreach ($db->query("SELECT * FROM restaurant WHERE city_id=$countyId") as $restaurant_row) {
				$siteId = $restaurant_row["id"];
				echo "<li><a href='site.php?siteId=$siteId'>" . $restaurant_row["name"] . "</a></li>";
			}
				
			echo "</ul>";
		}
	}
	?>
</div>

</body>
</html>