<?php 
		session_start();
		
		if (isset($_SESSION['sessionid']))
		{
			session_destroy();
			setcookie('PHPSESSID', '', time() - 86400, '/');
			echo '<h1>Page Déconnexion</h1>';
			echo "Votre session a été détruite";
			echo '<meta http-equiv="refresh" content="5;URL=connexion.php">';
		}
		
		else
		{
			setcookie('PHPSESSID', '', time() - 86400, '/');
			echo '<meta http-equiv="refresh" content="0;URL=connexion.php">';
		}
?>


