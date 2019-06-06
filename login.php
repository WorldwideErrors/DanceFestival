<?php
session_start();
?>
<form method="POST">
Gebruikersnaam: <input type="text" name="txtGebruiker" /><br/>
Wachtwoord: <input type="password" name="txtWachtwoord" /><br/>
<input type="submit" name="btnOpslaan" value="Opslaan"/>
</form>

<?php

include("config.php");

if(isset($_POST['btnOpslaan'])){
	
	$gebruiker = $_POST['txtGebruiker'];
	$wachtwoord = $_POST['txtWachtwoord'];
	
	$query = "SELECT * FROM customer where gebruiker = '$gebruiker' AND wachtwoord = '$wachtwoord'";
	$stm = $con->prepare($query);
	if($stm->execute()){
		echo "Gelukt";
		
		$lijst = $stm->fetchAll(PDO::FETCH_OBJ);
		if(count($lijst) > 0){
			$_SESSION['gebruiker'] = $lijst[0];
			echo $lijst[0]->voornaam.", u bent ingelogd!!";
		}else echo "<h2>mislukt!</h2>";
		
	}
}
?>