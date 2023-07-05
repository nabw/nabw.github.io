<!DOCTYPE html>
<html>
    <head>
        <title>N. Barnafi - Personal page</title>
	<link rel="stylesheet" href="simple.css">
    </head>

    <header>
	<h1> Nicol&aacutes Barnafi - Personal Site </h1>
	<?php
			$val = file_get_contents("./navbar.php");
			echo $val;
	?>

    </header>

    <body>

<h3><a href="blog/2_linux_tips.php">#2 - Linux tips</a></h3>
<p>Some tips on the usage of a Linux machine.</p>
<h3><a href="blog/1_hello_world.php">#1 - Hello world</a></h3>
<p>First page entry.</p>
    </body>
</html>
