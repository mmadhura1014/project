<?php 
  
  if(isset($_POST['submit'])){
	echo $_POST['date'];
	echo $_POST['taxinumber'];
	echo $_POST['drivername'];
	echo $_POST['customerid'];
	echo $_POST['customername'];
	echo $_POST['contactnumber'];
	echo $_POST['destination'];
	echo $_POST['pickuplocation'];
   }
?>
<!DOCTYPE html>
<html>
<?php include('templates/header.php') ?>
<section class="container grey-text">
	<h4 class="center">MANAGE ORDERS<h4>
	<form class="white" action="add.php" method="POST">
		<label>Date:</label>
		<input type="text" name="date">
		<label>Taxi Number:</label>
		<input type="text" name="taxinumber">
		<label>Driver Name:</label>
		<input type="text" name="drivername">
		<label>Driver Contact Number:</label>
		<input type="text" name="driver contact number">
		<label>Customer ID:</label>
		<input type="text" name="customerid">
    <label>Customer Name:</label>
		<input type="text" name="customername">
		<label>Contact Number:</label>
		<input type="text" name="contactnumber">
    <label>Destination:</label>
		<input type="text" name="destination">
		<label>Pickup Location:</label>
		<input type="text" name="pickuplocation">
		<div class="center">
			<input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
		</div>
	</form>	
</section>
<?php include('templates/footer.php') ?>
</body>
</html>