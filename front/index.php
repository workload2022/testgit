<!DOCTYPE html>
<html lang="en">
<head>
<title>Coding Standard Practice</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<?php 
	include_once('front/include/hero.php');
	include_once('front/include/link.php');
	?>

	<h2>Student Registration Form</h2>
	<form action="core/Insert.php" method="post" >
		<div class="form-group">
			<label for="name">Full Name:</label>
			<input
				type="text"
				class="form-control"
				id="name"
				placeholder="Enter Student Name"
				name="name"
			/>
		</div>

		<div class="form-group">
			<label for="phone">Phone:</label>
			<input 
				type="phone"
				class="form-control"
				id="pwd"
				placeholder="Enter phone number" name="phone"
			>
		</div>

		<div class="form-group">
			<label for="email">Email:</label>
			<input
				type="email"
				class="form-control"
				id="email"
				placeholder="Enter email"
				name="email"
			>
		</div>

		<button type="submit" class="btn btn-success">Add New</button>
	</form>
</div>

</body>
</html>
