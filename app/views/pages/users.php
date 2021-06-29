<?php 
// todo . check later
// require APPROOT . '/views/includes/head.php';
/*
foreach ($data['users'] as $user) {
	echo "Information: " . $user->name;
	echo '<br>';
}
*/

// <?php echo URLROOT;

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo SITENAME; ?></title>
	<!-- todo . remove -->
	<link rel="stylesheet" type="text/css" href="style.css">


	<style>

	header {
		text-align: center;
	}


	// todo . check if needed ? keep : delete
	a:link,
	a:visited
	{
		text-decoration: none;
	}

	a:hover {
		background-color: #17c5ff;
	}

	a:active
	{
		text-decoration: none;
	}

	body {
		background: linear-gradient(90deg, #00d2ff 0%, #3a47d5 100%);
	}

	table {
		font-family: Arial, Helvetica, sans-serif;
		border-collapse: collapse;
		width: 100%;
	}

	td, th {
		border: 1px solid #ddd;
		padding: 8px;
	}

	tr:nth-child(even) {
		background-color: chocolate;
	}
	tr:hover {
		background-color: #bf5f1b;
	}
	tr:hover:nth-child(odd) {
		background-color: #703812;
	}

	th {
		padding-top: 12px;
		padding-bottom: 12px;
		text-align: left;
		background-color: chocolate;
		color: white;
	}

</style>


</head>
<body>

	<header>
		<h2>User List Page</h2>
	</header>
	<main>
		<div style="width: 50%; margin-left: 20%;">

			<h1>Felhasználók:</h1>

			<table>
				<tr>
					<th>Id</th>
					<th>Név</th>
				</tr>

				<?php

				//$vendegek = vendegeketLeker();
				/*
				while ($sor = mysqli_fetch_assoc($vendegek)) {
					echo '<form action="vendegszerkesztes.php" method="POST">';
					echo '<tr>';
					echo '<td>' . $sor["szemelyiszam"] . '</td>';
					echo '<td>' . $sor["nev"] . '</td>';
					echo '<td><input type = "submit" value="Szerkeszt"></td>';
					echo '</tr>';
					echo '<input type="hidden" name="szemelyiszam" value="'.$sor["szemelyiszam"].'">';
					echo '</form>';
				}
				mysqli_free_result($vendegek);

				*/
				?>

			</table>
		</div>


		<!-- todo ? back link/button -->
	</main>

</body>
</html>