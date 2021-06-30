<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Advertisements</title>

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
		<h2>Main Page</h2>
	</header>
	<main>
		<a href="http://localhost/php_app/pages/users"><h3>Users</h3></a>
		<a href="http://localhost/php_app/pages/advertisements"><h3>Advertisement</h3></a>
	</main>

</body>
</html>