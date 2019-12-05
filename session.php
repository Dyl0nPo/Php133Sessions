<?php
		session_start();
		if (isset($_SESSION['sessionid']))
		{	
			echo 
			'
			<h1>Page Session</h1>
			
			<p>
				Votre session est désormais ouverte, votre email est : ' . $_SESSION['email'] . ' et votre mot de passe est : ' . $_SESSION['mdp'] .'
				<br>
				Appuyer sur le bouton déconnexion pour retourner à la page connexion
			</p>
			<br>
			<form action="" method="post">
				<p> Session : ' . $_SESSION['sessionid'] . ' </p>
				<input type="submit" name="button" value="Déconnexion"/>
			</form>
			';

			if ($_SESSION['sessionid'] == true)
			{
					
				if (isset($_POST["button"]))
				{
					echo '<meta http-equiv="refresh" content="0;URL=deconnexion.php">';
				}
			}
			
			else
			{
				echo '<meta http-equiv="refresh" content="0;URL=connexion.php">';
			}
		}
		
		else
		{
			setcookie('PHPSESSID', '', time() - 86400, '/');
			echo '<meta http-equiv="refresh" content="0;URL=connexion.php">';
		}
?>



