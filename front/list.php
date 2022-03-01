<!DOCTYPE html>
<html lang="en">
<head>
<title>Standard Coding Practice</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">

	<?php 
	include_once('../front/include/hero.php');
	include_once('../front/include/link.php');
	require_once '../db/DatabaseClass.php';

	?>

	<h2>Student List </h2>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">First</th>
				<th scope="col">Last</th>
				<th scope="col">Handle</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$mysqliConn = new DatabaseClass();
			echo  $mysqliConn->studentDetails();
			?>
		</tbody>
	</table>
</div>
</body>
</html>
