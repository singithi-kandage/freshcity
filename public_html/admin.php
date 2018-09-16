<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/sign-in.css">
	<link rel="stylesheet" type="text/css" href="css/admin.css">
	<script src="../resources/library/js/jquery/jquery-3.3.1.min.js"></script>
	<script src="../resources/library/js/bootstrap/bootstrap.min.js"></script>
	
	<?php
	
		require_once('../resources/config.php');
		
		$connection = ConnectToDatabase();
	?>
</head>
<body>

		<div class="background-overlay">
		
			<a href="index.php"><button class="form-control" id="home-button">Home</button></a>	
		
			<div class="rounded-box w-75 mx-auto" id="productCRUD">
			
				<div class="rounded-box-header">
					<h1 class="text-center">Manage Products</h1>
				</div>
				<div class="rounded-box-body">
				
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-12">
						<ul>
						<?php
									
							$productQuery = "SELECT * FROM product";
							$preparedProductQuery = $connection->prepare($productQuery);
							$preparedProductQuery->execute();
							
							while($row = $preparedProductQuery->fetch()){						
								echo "<li>".$row['name']."</li>";
							}
						?>
						</ul>
					</div>
					
					<div class="col-lg-9 col-md-6 col-sm-12">
						<form action="php/sign-in.php" method="post" onsubmit=" return ValidateAdmin()">
						
							<div class="form-group">
								<label for="name">Product Name</label>
								<input class="form-control" type="text" name="name" id="name">
							</div>
						
							<div class="row">
								<div class="form-group col-6">
									<label for="color">Product Type</label><br/>
									<select class="form-control" name='productType'>
										<?php
										
											$ptQuery = "SELECT * FROM productType";
											$preparedPTQuery = $connection->prepare($ptQuery);
											$preparedPTQuery->execute();
											
											while($row = $preparedPTQuery->fetch()){
												
												echo "<option value=".$row['productTypeID'].">".$row['name']."</option>";
											}
										?>
									</select>
								</div>
								
								<div class="form-group col-6">
									<label for="brand">Demographic</label><br/>
									<select class="form-control" name='brand'>
										<?php
						
											$connection = ConnectToDatabase();
											
											$demoQuery = "SELECT * FROM demographic";
											$preparedDemoSelect = $connection->prepare($demoQuery);
											$preparedDemoSelect->execute();				

											while($row = $preparedDemoSelect->fetch()){	
												
												echo "<option value=".$row['demographicID'].">".$row['name']."</option>";			
											}						
										?>	
									</select>
								</div>
							</div>
							
							<div class="row">
								<div class="form-group col-6">
									<label for="color">Color</label><br/>
									<select class="form-control" name='color'>
										<?php
										
											$colorQuery = "SELECT * FROM color";
											$preparedColorQuery = $connection->prepare($colorQuery);
											$preparedColorQuery->execute();
											
											while($row = $preparedColorQuery->fetch()){
												
												echo "<option value=".$row['id'].">".$row['name']."</option>";
											}
										?>
									</select>
								</div>
								
								<div class="form-group col-6">
									<label for="brand">Brand</label><br/>
									<select class="form-control" name='brand'>
										<?php
						
											$connection = ConnectToDatabase();
											
											$brandQuery = "SELECT * FROM brand";
											$preparedBrandSelect = $connection->prepare($brandQuery);
											$preparedBrandSelect->execute();				

											while($row = $preparedBrandSelect->fetch()){	
												
												echo "<option value=".$row['brandID'].">".$row['name']."</option>";			
											}						
										?>	
									</select>
								</div>
							</div>
													
							<div class="form-group">
								<label for="materials">Materials</label>
								<textarea class="form-control" name="materials" id="materials"></textarea>
							</div>
							
							<div class="row">							
								<div class="form-group col-6">
									<label for="price">Price</label>
									<input class="form-control" type="text" name="price" id="price">
								</div>	
								
								<div class="form-group col-6">
									<label for="onSale">On Sale</label><br/>
									<input type="checkbox" name="onSale" id="onSale"> Yes
								</div>								
							</div>
							
							<div class="form-group">
								<label for="name">Image File Path</label>
								<input class="form-control" type="text" name="imageFilePath" id="imageFilePath">
							</div>
							
							<input class="form-control d-inline w-20" type="submit" name="add" id="add" value="Add">
							<input class="form-control d-inline w-20" type="submit" name="update" id="update" value="Update">
							<input class="form-control d-inline w-20" type="submit" name="delete" id="delete" value="Delete">
							<input class="form-control d-inline w-20" type="submit" name="cancel" id="cancel" value="Cancel">
							<input class="form-control d-inline w-20" type="submit" name="save" id="save" value="Save">
						<form>
					</div>
				</div>
							
				</div>
				
			</div>
			
		</div>
</body>
</html>

