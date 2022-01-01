<?php 
  
  if(isset($_POST['owner id'])){
	echo $_POST['ssn'];
	echo $_POST['name'];
	
   }
?>
<!DOCTYPE html>
<html>
<?php include('templates/header.php') ?>
<section class="container grey-text">
	<h4 class="center">OWNER DETAILS<h4>
	<form class="white" action="add.php" method="POST">
		<label>Owner id:</label>
		<input type="text" name="ownerid">
		<label>SSN:</label>
		<input type="text" name="ssn">
		<label>Name:</label>
		<input type="text" name="name">
		<div class="center">
			<input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
		</div>
	</form>	
</section>
<?php include('templates/footer.php') ?>
</body>
</html>