<?php
	
	function DisplayProductPage($querySelect, $resultsQuery){
?>		
<div class="row">
	<div class="col-lg-2 col-md-6 col-sm-12" id="filter">
		<form action="#" method="post">
	
		<div class="form-group">
			<label for="txtKeyword">Keyword</label>
			<input type="text" class="form-control" id="txtKeyword" name="txtKeyword">		
		</div>
		
		<div class="form-group">
			<label for="selType">Product Type</label>
			<select class="form-control" name="selType">
				<?php
					
					$connection = ConnectToDatabase();
					
					$preparedQuerySelect = $connection->prepare($querySelect);
					$preparedQuerySelect->execute();				

					while($row = $preparedQuerySelect->fetch()){	
						
						echo "<option value=".$row['name'].">".$row['name']."</option>";			
					}						
				?>		
			</select>
		</div>
		
		<div class="form-group">
			<label for="selBrand">Brand</label>
			<select class="form-control" name="selBrand">
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
		
		<div class="form-group">
			<label>Color</label>
			<div class="row">
				<div class="col-lg-6 col-md-12 col-md-12">
					<div class="d-block"><input type="checkbox" name="chxRed" value="Red">Red</div>
					<div class="d-block"><input type="checkbox" name="chxYellow" value="Yellow">Yellow</div>
					<div class="d-block"><input type="checkbox" name="chxOrange" value="Orange">Orange</div>
					<div class="d-block"><input type="checkbox" name="chxPink" value="Pink">Pink</div>
					<div class="d-block"><input type="checkbox" name="chxBrown" value="Brown">Brown</div>
					<div class="d-block"><input type="checkbox" name="chxGold" value="Gold">Gold</div>
				</div>
				<div class="col-lg-6 col-md-12 col-md-12">
					<div class="d-block"><input type="checkbox" name="chxBlue" value="Blue">Blue</div>
					<div class="d-block"><input type="checkbox" name="chxGreen" value="Green">Green</div>
					<div class="d-block"><input type="checkbox" name="chxPurple" value="Purple">Purple</div>
					<div class="d-block"><input type="checkbox" name="chxBlack" value="Black">Black</div>
					<div class="d-block"><input type="checkbox" name="chxWhite" value="White">White</div>
				</div>
			</div>
		</div>
		
		<div data-role="main" class="ui-content">
		  <div data-role="rangeslider">
		  
			<div class="form-group">
				<label for="price-min">Min Price</label><br/>
				<span>$0</span>
				<input type="range" name="price-min" id="price-min" value="200" min="0" max="1000">
				<span>$1000</span>
				<input class="form-control d-inline w-25"type="text" name="price-min-value" id="price-min-value">
			</div>
			
			<div class="form-group">
				<label for="price-max">Max Price</label><br/>
				<span>$0</span>
				<input type="range" name="price-max" id="price-max" value="800" min="0" max="1000">
				<span>$1000</span>
				<input class="form-control d-inline w-25"type="text" name="price-max-value" id="price-max-value">
			</div>
		  </div>
		</div>
	
		<input class="form-control w-75 mx-auto" type="submit" value="Search"/>
		
	</form>
	</div>
	<div class="col-lg-9 col-md-6 col-sm-12" id="searchResults">
		
		<div class="row">
			<?php		

					$preparedResultsSelect = $connection->prepare($resultsQuery);
					$preparedResultsSelect->execute();
					
					$resultsSet = "";
					
					while($row = $preparedResultsSelect->fetch()){
						
						$resultsSet .= "<div class='col-lg-3 col-md-6 col-sm-12'>";
						$resultsSet .= "<div class='searchItem'>";
						$resultsSet .= "<div class='img-container'>";
						$resultsSet .= "<img src='".$row['imageFilePath']."' />";
						$resultsSet .= "</div>";
						$resultsSet .= "<p>".$row['name']."</p>";
						if($row['onSale'] == true)
						{
							$resultsSet .= "<p class='text-danger'>$".$row['price']." ON SALE!</p>";
							
						}
						else{
							$resultsSet .= "<p>$".$row['price']."</p>";
						}
						$resultsSet .= "</div>";
						$resultsSet .= "</div>";
					}
			
					echo $resultsSet;
			?>
		</div>
		
	</div>
</div>
		
<?php		
	}
?>






