<?php
ob_start();
	require ("connexion.php");

	if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['genre']) && isset($_POST['email']))
	{
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$dateNaissance = $_POST['dateNaissance'];
		$genre = $_POST['genre'];
		$adresse = $_POST['adresse'];
		$codePostal = $_POST['codePostal'];
		$commune = $_POST['commune'];
		$pays = $_POST['pays'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$languesJson = $_POST['languesJson'];

		$req='insert into cv values(NULL,"'.$nom.'","'.$prenom.'","'.$dateNaissance.'","'.$genre.'","'.$adresse.'","'.$codePostal.'","'.$commune.'","'.$pays.'","'.$email.'","'.$mobile.'","'.$languesJson.'")';
		$result = $bdd -> query($req);

		 if ($result)
		 {
		  	$result1=$bdd->query('select * from utilisateur where email="$email" ');
		  	while($data=$result1->fetch())
					{
	
							$var=true;
							session_start();
							$_SESSION['pseudo']=$data['pseudo'];
						
					}
		  header('Location:index.php?pseudo='.$_SESSION['pseudo']);
		 }else{
					header('Location:form_cv.html ?error');
					}

	}else{
	    	echo"Erreur Variable";
	     }

?>
