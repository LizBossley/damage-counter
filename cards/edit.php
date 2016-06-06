<!DOCTYPE html>
<html lang="en">
  	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	    <title>Card Edit</title>
		<?php include '../resources/imports/resources.php'; ?>
		<script src="submit.js"></script>
	</head>
	<body>
		<?php include '../resources/imports/header.php'; ?>
		<div class="container">
			<div class="jumbotron">
				<p> Welcome to this card-edit page </p>
				<form id="card-edit">
					<label>Name :</label>
					<input id="name" type="text">
					<label>Faction :</label>
					<select id="faction">
						<option value="">Select a faction:</option>
					<optgroup label="Warmachine">
						<option value="1">Convergence</option>
						<option value="2">Cryx</option>
						<option value="3">Cygnar</option>
						<option value="4">Khador</option>
						<option value="5">Protectorate</option>
						<option value="6">Retribution</option>
						<option value="7">Mercenaries</option>
					</optgroup>
					<optgroup label="Hordes">
						<option value="8">Circle</option>
						<option value="9">Legion</option>
						<option value="10">Skorne</option>
						<option value="11">Trollbloods</option>
						<option value="12">Minions</option>
					</optgroup>
					</select>
					<label>Base size:</label>
					<input type="radio" name="size" value="1" checked> Small
					<input type="radio" name="size" value="2"> Medium
					<input type="radio" name="size" value="3"> Large
					<input id="submit" type="button" value="Submit">
				</form>
			</div>
		</div>
	</body>
</html>