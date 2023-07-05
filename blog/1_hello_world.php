<!DOCTYPE html>
<html>
	<head>
		<script type="module" src='https://unpkg.com/html-include-element'></script>
		<link rel="stylesheet" href="../simple.css">
	</head>

    <header>
	<h2>  #1 - Hello World </h2>
	<?php
			$val = file_get_contents("../navbar2.php");
			echo $val;
	?>

    </header>


	<body>
		
		<p>Creating a web page is one of those things that I always felt like doing but never quite took the time. In the wilderness of the internet, there are too many options, so even though I was strongly tempted by Jekyll or Hugo (static site generators) , I opted for the simplicity of <a href="https://simplecss.org/">simple.css</a>, which is just a minimal style file for a blog site.</p>
		<p>This should also eventually serve as an extended CV, so it SHOULD be updated with my work. Let's hope so.</p>
	</body>
</html>
