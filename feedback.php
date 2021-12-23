<?php 
  
  if(isset($_POST['submit'])){
	echo $_POST['name'];
	echo $_POST['e-mail id'];
	echo $_POST['message'];
	echo $_POST['date'];
   }
?>
<!DOCTYPE html>
<html>
<?php include('templates/header.php') ?>
<section class="container grey-text">
	<h4 class="center">FEEDBACK FORM<h4>
	<form class="white" action="add.php" method="POST">
		<label>Name:</label>
		<input type="text" name="name">
		<label>E-mail ID:</label>
		<input type="text" name="e-mail id">
		<label>Message:</label>
		<input type="text" name="message">
		<label>Date:</label>
		<input type="text" name="date">
		<div class="center">
			<input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
		</div>
	</form>	
</section>
<?php include('templates/footer.php') ?>
</body>
</html>