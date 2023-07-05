<!DOCTYPE html>
<html>
    <head>
        <title>N. Barnafi - Personal page</title>
	<link rel="stylesheet" href="./simple.css">
    </head>

    <header>
	<h1> Nicol&aacutes Barnafi - About Me </h1>
	<?php
			$val = file_get_contents("./navbar.php");
			echo $val;
	?>
    </header>
    <body>
<p><img src="images/me.jpg" width="100" align="left" style="padding:0px 10px 0px 0px;">I am chilean, and very proud of it! In case you were in doubt: yes, you should visit Chile, we have all weathers so you will probably find something to suit your needs. We do have tropical weather in what I believe to be our biggest marketing failure: Easter island. My higher education started at Pontificia Universidad Cat&oacutelica de Chile, where I got my Bachelor and M.Sc. in Engineering Sciences, together with a professional degree in Industrial Engineering, diploma in Mathematics. During the master, I had the fortune of working with Daniel Hurtado and Gabriel Gatica on image registration. Then I got my Ph.D. in Italy, at Politecnico di Milano. I was part of a big research group under a project (iHeart) where I met fantastic people. I worked mainly with Paolo Zunino, and also with Luca Dede' and Alfio Quarteroni on cardiac poromechanics. I then changed a bit my focus during my first year of post-doc at the University of Milan, where I worked with Simone Scacchi on the development of scalable domain decomposition preconditioners, with cardiac mechanics being our target physics. Currently, I'm a post-doc researcher at the Unversity of Pavia, continuing the work of my previous post-doc also in collaboration with Luca Pavarino. If any of this captures even a tiny bit of your attention, most of my work is freely available online, so check the Research and Coding pages on this site, and also contact me! These are hard problems, so the more the merrier.</p>


<p>I am quite the advocate of open source, which refers to all software that makes its source code available. This gets translated into the following choices: </p>
      <ul>
	<li>Windows/MacOSS &rarr; Linux, BSD </li>
	<li>Android/iOS &rarr; Lineage OS, /e/ (Murena), Plasma, Phosh</li>
	<li>Matlab &rarr; Octave</li>
	<li>COMSOL, Abaqus &rarr; (FEniCS || deal.II) + Gmsh</li>
	<li>Microsoft Offige &rarr; Free Office, Libre Office, Open Office, LaTeX</li>
	<li>GMail &rarr; Email (/e/), Protonmail, Tutanota</li>
	<li>Google Chrome &rarr; Brave, Tor, Vivaldi</li>
	<li>Google (search) &rarr; Qwant, DuckDuckGo, Brave Search</li>
	<li>Social Networks &rarr; SlimSocial, Barinsta, Mastodon, PixelFed</li>
	<li>Cloud storage (Dropbox) &rarr; Self-hosted storage (i.e. Nextcloud)</li>
        <li> GitHub, BitBucket, gitlab &rarr; Codeberg</li>
      </ul>
<p>I strongly encourage people to choose such software whenever possible. There are two motivations for this: the first one is ethical. If you own something, you should be able to see what it has, right? You own your house, so you get its blueprints. You own your boiler, so you can disassemble it. With software it is usually not that way, except for open source software of course. The second aspect is environmental, as Linux is a potentially much lighter operating system that has been able to do what most people expect form a computer for the last 20 years. In addition, computers are capable of yielding such services since the dawn of the 20th century, so perhaps PC production should really slow down.</p>

<p> Slowing down prodution, and in general technological austerity, is something we should embrace as the earth's resources are finite, and the extraction is taking a heavy toll on it, but for this you can google on the impacts of technology production and disposal... in fact, even solar panels are not much of a green solution. For more info, you can start looking at the EEB (European Environmental Boureau), specifically <a href="https://eeb.org/library/coolproducts-report/">here</a>.</p>

<p>Indeed, the scope of using a dark background on this site is not readability, as the impact of darker backgrounds is not yet totally understood, but instead power-efficiency, as some [phone] screens turn pitch black pixels off.</p>
</body>
</html>
