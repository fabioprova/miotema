<?php

	$prodotto =  $_GET["name"];
	
	$prodotto = str_replace("-", " ", $prodotto);
	//echo $prodotto;
	
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

	$sql = "SELECT * FROM prodotti WHERE nomep='".$prodotto."'";
	//echo $sql;
	$statement = $conn->query($sql);
			
	
	$result = $statement->fetch();
	echo "<br>";
	echo $result["nomep"];
	echo "<br>";
	echo $result["fotop"];
	echo "<br>";
	echo $result["datip"];
	echo "<br>";
	echo $result["prezzop"];
	
	//while($result = $statement->fetch()) {
			
		
	//}
		
		
	$conn->close();

	

?>