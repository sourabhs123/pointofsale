<html>
	<head>
		<?php require_once 'header.php' ?>
	</head>
	<body>
		
		<form action="controller/addproduct_cntr.php" method="POST"   >
		  <div class="form-group">
			<label for="exampleInputEmail1">Product Name:</label>
			<input type="text" name="prodname"  placeholder="Enter product name">
		  </div>
		  <div class="form-group">
			<label for="exampleInputEmail1">Product Price:</label>
			<input type="number" name="prodprice" placeholder="Enter product price">
		  </div>
		  <div class="form-group">
			<label for="exampleInputEmail1">Discount Quantity:</label>
			<input type="number" name="prodqty" placeholder="Enter discount quantity">
		  </div>
		 <div class="form-group">
			<label for="exampleInputEmail1">Discount Quantity Final Price:</label>
			<input type="number" name="proddisprice" placeholder="Discount quantity final price">
		  </div>
			<input type="hidden" name="action" value="add" />
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
		
	</body>
</html>
