<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
	<div class="container">
		<h1><?php echo 'Bienvenue sur Encylvin' ?></h1>
			
			<h2>Vous y trouverez notament des information sur : </h2>
			
			<h4><ul>
				<li>Baobab</li>
				<li>Sapin</li>
				<li>Eucaliptus</li>
				<li>Érable</li>
				<li>Ginko</li>
				<li>Cerisier du japon</li>
				<li>Chêne</li>
				<li>Thé des jésuites</li>
				<li>Hêtre</li>
				<li>Pin</li>
			</ul></h4>
			<ul>
				<?php for ($i = 1; $i <= 10; $i++) { 
				echo "<li> Voici la ligne $i </li>\r";
				} ?>
			</ul>
			</div>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>

