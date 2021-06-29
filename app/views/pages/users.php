<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo SITENAME; ?></title>


	<style>

	header {
		text-align: center;
	}


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

    tr {
        background-color: #3A49D6;
        color: white;
    }

	tr:nth-child(even) {
		background-color: #1D8EEB;
	}

	tr:hover {
		background-color: #126db8;
	}
	tr:hover:nth-child(odd) {
		background-color: #0019ff;
	}

	th {
		padding-top: 12px;
		padding-bottom: 12px;
		text-align: left;
		background-color: #3A49D6;
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

			<h1>Users:</h1>

			<table>
				<tr>
					<th>Id</th>
					<th>Name</th>
				</tr>

				<?php

                set_include_path('../../models/Model.php');


                $users = Model::getUsers();


                while ($sor = mysqli_fetch_assoc($users)) {
                    echo '<tr>';
                    echo '<td>' . $sor["id"] . '</td>';
                    echo '<td>' . $sor["name"] . '</td>';
                    echo '</tr>';
                }
                mysqli_free_result($users);

				?>

			</table>
		</div>

	</main>

</body>
</html>