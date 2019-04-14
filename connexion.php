<!DOTCYPE Html>
<html lang="en">
      <head>
	        <title>Site</title>
			<meta charset = "utf-8"/>
	  </head>

	  <body>
<?php
	  $serveur ="localhost";
	  $login="id9291083_root";
	  $pass="11111111";

	  try{
		  $bdd= new PDO("mysql:host=$serveur;dbname=id9291083_ant", $login, $pass);
		  $bdd -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


	  }

	  catch(PDOException $e){
		  echo 'Echec de la connexion:' .$e->getMessage();
	  }
?>


	  </body>
</html>
