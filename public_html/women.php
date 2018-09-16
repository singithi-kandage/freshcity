<?php
    // require_once("../resources/config.php");
    require_once("../resources/templates/header.php");
	require_once("../resources/templates/top-nav.php");
	require_once("../resources/templates/logo.php");
    require_once("../resources/templates/navbar.php");
?>

<body>
    <section>
		<h1 class="text-center">Women's Fashion</h1>
		<?php
			require_once("../resources/templates/filter.php");
			
			$querySelect = "SELECT productType.name FROM productType 
				JOIN productTypeDemographic USING (productTypeID) 
				JOIN demographic USING (demographicID)
				WHERE demographic.name = 'Women'";
			
			$resultsQuery = "SELECT * FROM product 
							WHERE demographicID = 2";
			
			DisplayProductPage($querySelect, $resultsQuery);
		?>
<?php
	require_once("../resources/templates/footer.php");
	require_once("../resources/templates/end-doc.php");
?>