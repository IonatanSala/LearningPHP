<!-- This is not part of the project 
This is just for me to get familiar with arrays in PHP -->
<?php 
	
	$flavours = array("Vanilla", "Chocolate", "Straberry", "Cookie Dough");

	// var_dump($flavours);
?>

<!doctype html>

<html>
	<head>
		
	</head>
	<body>
		<div>
			<ul>

				<?php foreach ($flavours as $flavour) { ?>

				<li><?php echo $flavour ; ?></li>

				<?php } ?>

			</ul>
		</div>



	


<?php 
	
	// $countries = array();
	// $countries["US"] = "United States";
	// $countries["DE"] = "Germany";
	// echo $countries["DE"];  this will echo Germany

	$country = array();
	$country["code"] = "US";
	$country["name"] = "United States";
	$country["capital"] = "Washington D.C";
	$country["population"] = 2250000000;
	$country["anthem"] = "The Star-spangled Banner";

	$country = array(
		"code" => "US",
		"ANEM" => "United States",
		"capital" => "Washington D.C",
		"popultaion" => 225000000,
		"anthem" => "The Star-Spangled Banner"
	);
?>










	</body>
</html>
