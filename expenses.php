<?php 
  
  if(isset($_POST['submit'])){
	echo $_POST['billdate'];
	echo $_POST['billnumber'];
	echo $_POST['advanceamount'];
	echo $_POST['totalAmount'];
	echo $_POST['discount'];
	echo $_POST['finalAmount'];
	echo $_POST['date'];
	echo $_POST['taxinum'];
	echo $_POST['Driver'];
   }
?>
<!DOCTYPE html>
<html>
<?php include('templates/header.php') ?>
<section class="container grey-text">
	<h4 class="center">Add Expenses<h4>
	<form class="white" action="add.php" method="POST">
		<label>Bill Date:</label>
		<input type="text" name="billdate">
		<label>Bill Number:</label>
		<input type="text" name="billnumber">
		<label>Advance Amount:</label>
		<input type="text" name="advanceamount">
		<label>Total Amount:</label>
		<input type="text" name="totalAmount">
		<label>Discount Amount:</label>
		<input type="text" name="discount">
		<label>Final Amount:</label>
		<input type="text" name="finalAmount">
		<label>Date:</label>
		<input type="text" name="date">
		<label>Taxi Number:</label>
		<input type="text" name="taxinum">
		<label>Driver:</label>
		<input type="text" name="Driver">
		<div class="center">
			<input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
		</div>
	</form>	
</section>
<?php include('templates/footer.php') ?>
</body>
</html>