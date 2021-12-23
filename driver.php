<?php 
  
  if(isset($_POST['submit'])){
	echo $_POST['driverid'];
	echo $_POST['drivername'];
	echo $_POST['gender'];
	echo $_POST['age'];
	echo $_POST['contactnumber'];
	echo $_POST['Rating'];
	echo $_POST['licensenumber'];
   }
?>
<!DOCTYPE html>
<html>
<?php include('templates/header.php') ?>
<section class="container grey-text">
	<h4 class="center">DRIVER DETAILS<h4>
	<form class="white" action="add.php" method="POST">
		<label>Driver ID:</label>
		<input type="text" name="driverid">
		<label>Driver Name:</label>
		<input type="text" name="drivername">
		<label>Gender:</label>
		<input type="text" name="gender">
		<label>Age:</label>
		<input type="text" name="age">
    <label>Contact Number:</label>
		<input type="text" name="contactnumber">
		<label>Rating:</label>
		<input type="text" name="Rating">
		<label>License Number:</label>
		<input type="text" name="licensenumber">
		<div class="center">
			<input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
		</div>
	</form>	
</section>
<?php include('templates/footer.php') ?>
</body>
</html>