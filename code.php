<!DOCTYPE html>
<html>
    <head>
        <title>N. Barnafi - Personal page</title>
	<link rel="stylesheet" href="./simple.css">
    </head>

    <header>
	<h1> Nicol&aacutes Barnafi - Code dev </h1>
	<?php
			$val = file_get_contents("./navbar.php");
			echo $val;
	?>
    </header>
    <body>
	<p>Here are links and small descriptions to the codes I use. I mainly work with <a href="">FEniCS</a><img src="images/fenics.png" height=28pt>  and <a href="">deal.II</a><img src="images/dealii.png" height=28pt> . </p>
	<dl>
		<dt> <a href="https://bitbucket.org/nabarnaf/regfem/src/master/">RegFem</a> <img src="images/python.png" height=28pt> <img src="images/fenics.png" height=28pt> </dt>
			<dd>Image registration library. Its main focus is the study of mixed formulations for elastic registration. </dd>
		<dt> <a href="https://bitbucket.org/nabarnaf/ferosity/src/master/">FErosity</a> <img src="images/python.png" height=28pt> <img src="images/fenics.png" height=28pt> </dt>
			<dd>Library for the solution of nonlinear poromechanics problem.</dd>
		<dt> <a href="https://bitbucket.org/nabarnaf/poroelasticity_iterative/src/master/">Poroelasticity iterative</a> <img src="images/python.png" height=28pt> <img src="images/fenics.png" height=28pt> </dt>
			<dd>Library for testing block-splitting schemes for a three-field poroelastic model.</dd>
		<dt> <a href="https://github.com/nabw/poroelasticity-linear-solvers">Poroelasticity preconditioners</a> <img src="images/python.png" height=28pt> <img src="images/fenics.png" height=28pt> </dt>
			<dd>Library for testing the effectiveness of splitting schemes as preconditioners. </dd>
		<dt> <a>lifex </a>  <img src="images/cpp.png" height=28pt> <img src="images/lifex.png" height=28pt> </dt>
			<dd>Library used for the development of a complete human heart model (to be released soon).</dd>

	</dl>
    <p>More side projects can be found in my <a href="https://gitlab.com/nabarnaf">Gitlab</a>, <a href="https://github.com/nabw">Github</a> and <a href="https://bitbucket.org/nabarnaf/">Bitbucket</a> repositories.</p>
    </body>
</html>
