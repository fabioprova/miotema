<html>

	<head>

		<link rel="stylesheet" href="style.css">
		<link rel="icon" href="img/logo.png">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
		<script src="scrippete.js"></script>
		<title>Nome</title>


	</head>

	<body>

		<header width="100%" height="70%">
		
			<a href="carello.php"><img style="display: block; border-radius: 50%; margin-left: auto; margin-right: 5px;" src="img/c.png" width="50px" ></a>

			<div id="title">

			   <div style="position: relative; left: 0; right: 0; margin-left:auto;"><a onClick="cambia_sito()">
			      <img src="img/logo.png" width="50px" height="50px" />
			   </a></div>

			   <div style="margin-right: auto;">NOME SITO</div>

			</div>


			<br>

			<div id="barmenu">
				<a href="#" id="amenu"> HOME </a>
				<a href="chisiamo.php" id="amenu"> CHI SIAMO </a>
				<a href="contatti.php" id="amenu"> CONTATTI </a>
			</div>

		</header>

		<div id="ltitle"> Migliori Prodotti </div>

		<br>
		<br>

		<li id="center">

		 <a href="prodotto.php/?name=prodotto-stupido" style="margin-left: auto;">
			<div id="photobox">

				<div id="boxtitle">

					TITOLO BOX

				</div>

				<div id="boxtext">

					Questa e' una descrizione del prodotto, molto ma molto ma molto veramente lunga

				</div>

			</div>
		  </a>

		  <a href="#" style="margin-left: auto; margin-right: auto;">
			<div id="photobox">

				<div id="boxtitle">

					TITOLO BOX

				</div>

				<div id="boxtext">

					Questa e' una descrizione del prodotto, molto ma molto ma molto veramente lunga

				</div>

			</div>
		  </a>

		  <a href="#" style="margin-right: auto;">
			<div id="photobox">

				<div id="boxtitle">

					TITOLO BOX

				</div>

				<div id="boxtext">

					Questa e' una descrizione del prodotto, molto ma molto ma molto veramente lunga

				</div>

			</div>
		  </a>

		</li>

		<div id="divisione" style="border-top-left-radius: 50%;border-top-right-radius: 50%;">

			<div> [~] Negozio [~] </div>

		</div>





		<?php

			include 'config.php';
			// connessione al db
			
			try {
				$conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
				
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				
				//echo "Connesso"; 
				
				} catch(PDOException $e) {    
				
				echo "Connessione fallita: " . $e->getMessage();
			}

			// caricamento prodotti

			$sql = "SELECT * FROM prodotti";
			$statement = $conn->query($sql);
			
			echo "<br>";
			
			echo "<li id='center'>";
			
			while($result = $statement->fetch()) {

				//$result["fotop"]
				//$result["prezzop"];
				
				echo str_replace("#", "prodotto.php?name=".str_replace(" ", "-", $result["nomep"]),"<a href='#' style='margin-right: auto; margin-left: auto;'>");
				
				echo '<div id="photobox" style="background-image:url(\'img/' . $result["fotop"].'\');">';

				echo	"<div id='boxtitle'>";

				echo	$result["nomep"];

				echo "</div>";

				echo	"<div id='boxtext'>";

				echo	$result["datip"];

				echo 	"</div>";

				echo	"</div>";
				echo "</a>";
				

			}
			
			echo "</li>";

			$conn->close();

		?>

	</body>


</html>
