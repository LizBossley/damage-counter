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
		<script src="../resources/js/jquery.validate.min.js"></script>
	</head>
	<body>
		<?php include '../resources/imports/header.php'; ?>
		<div class="container">
			<div class="jumbotron">
				<p> Welcome to this card-edit page </p>
				<form id="card-edit" onsubmit="validateForm()">
					<label>Name :</label>
					<input id="name" name="name" type="text">
					<label>Faction :</label>
					<select id="faction" name="faction">
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

					<label>SPD :</label>
					<input id="spd" name="spd" type="text">
					<label>STR :</label>
					<input id="str" name="str" type="text">
					<label>MAT :</label>
					<input id="mat" name="mat" type="text">
					<label>RAT :</label>
					<input id="rat" name="rat" type="text">
					<label>DEF :</label>
					<input id="def" name="def" type="text">
					<label>ARM :</label>
					<input id="arm" name="arm" type="text">
					<label>CMD :</label>
					<input id="cmd" name="cmd" type="text">
					<label>FURY :</label>
					<input id="fury" name="fury" type="text">
					<label>THR :</label>
					<input id="thr" name="thr" type="text">
					<label>FOCUS :</label>
					<input id="focus" name="focus" type="text">
					<input id="submit" type="submit">
				</form>
			</div>
		</div>
	</body>
</html>