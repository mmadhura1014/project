<?php 
  
  if(isset($_POST['submit'])){
	echo $_POST['date'];
	echo $_POST['taxinum'];
	echo $_POST['customername'];
	echo $_POST['destination'];
	echo $_POST['pickuplocation'];
	echo $_POST['amount'];
   }
?>
<!DOCTYPE html>
<html>
<?php include('templates/header.php') ?>
<section class="container grey-text">
	<h4 class="center">BOOK TAXI<h4>
	<form class="white" action="add.php" method="POST">
		<label>Date:</label>
		<input type="text" name="date">
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