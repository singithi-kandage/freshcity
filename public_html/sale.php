<?php
    require_once("../resources/config.php");
    require_once("../resources/templates/header.php");
	require_once("../resources/templates/top-nav.php");
	require_once("../resources/templates/logo.php");
    require_once("../resources/templates/navbar.php");
?>

<body>
	<section>
		<h1 class="text-center">Sale</h1>
		
		<?php
			require_once('../resources/templates/filter.php');
		
			$querySelect = "SELECT productType.name FROM productType";
			
			$resultsQuery = "SELECT * FROM product 
							WHERE onSale = true";
			
			DisplayProductPage($querySelect, $resultsQuery);
		
		?>
	</section>
</body>
<?php
    require_once("../resources/templates/footer.php");
?>