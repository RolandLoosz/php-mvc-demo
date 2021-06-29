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

main {
    display: flex;
    justify-content: space-around;
}


main > a {
	border-radius: 30px;
    display: flex;
    align-items: center;
    justify-content: center;

    width: 100%;
    min-height: 250px;
    margin: 10px;
    border: 3px solid #333;
    color: #333333;
	background: #00BFFF;
}

main > a > h3 {
    font-size: 28px;
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

</style>


</head>
<body>

	<header>
		<h2>Advertisement Page</h2>
	</header>
	<main>
		<a href="<?php echo URLROOT; ?>/pages/users"><h3>Users</h3></a> <!-- href. <?php //echo URLROOT; ?> -->
		<a href="<?php echo URLROOT; ?>/pages/advertisement"><h3>Advertisement</h3></a>
		<!-- <a href="?page=ads"><h3>Advertisements</h3></a> -->
	</main>

</body>
</html>