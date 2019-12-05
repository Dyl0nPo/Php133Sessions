<?php
echo '
		<h1> Page Connexion </h1>
		<form action="" method="post">
		<p>
			<p> Email : </p>
			<input type="email" name="email" />
			<br>
			<p> Mot de passe :</p>
			<input type="password" name="mdp" />
			<br>
			<br>
			<input type="submit" value="Connexion" />
		</p>
		</form>';



		if (isset($_POST["email"]) || isset($_POST["mdp"]))
		{
			if ($_POST["email"]=="exemple@gmail.com" && $_POST["mdp"]=="1234")
			{
				session_start();
				$_SESSION['email']=htmlspecialchars($_POST["email"]);
				$_SESSION['mdp']=htmlspecialchars($_POST["mdp"]);
				$_SESSION['sessionid']=session_id();
				echo '<meta http-equiv="refresh" content="0;URL=session.php">';
			}
		
			else
			{
				echo "Saisessez le bon email et le bon mot de passe";
				echo '<meta http-equiv="refresh" content="5;URL=connexion.php">';
			}
		}	
	?>




