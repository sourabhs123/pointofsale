<?php session_start(); ?>
<html>
	<head>
		<?php require_once 'header.php' ?>
	</head>
	<body>
		
		<form action="controller/pointofsale_cntr.php" method="POST"   >
		  <div class="form-group">
			<label for="exampleInputEmail1">Scan Products:</label>
			<input type="text" name="prodsname"   class="form-control"  placeholder="Enter scan product names">
		  </div>
			<input type="hidden" name="action" value="scan" />
		  <button type="submit" class="btn btn-primary">Submit</button>
			
			<label> <?php if (isset($_SESSION['final_price']) && $_SESSION['final_price'] != '' )  echo $_SESSION['final_price']; ?> </label>
		</form>
		
	</body>
</html>
