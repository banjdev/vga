
<?PHP
	require("connexion.php");
	if(isset($_POST['emailConnect']) && isset($_POST['passwordConnect'])){
		$email = $_POST['emailConnect'];
		$password = $_POST['passwordConnect'];

		$ver=false;

		$result=$bdd->query('select * from utilisateur');
		while($data=$result->fetch()){
			if(($data['email']==$email)&&($data['password']==$password)){
				session_start();
				$_SESSION['pseudo']=$data['pseudo'];
				//$_SESSION['admin_web']="Alexis";
				$ver=true;
			}
		}
		if($ver){
			header('Location:index.php?pseudo='.$_SESSION['pseudo']);
		}
		else{
			header('Location:signup.html ?errorlogin');
		}
	}
?>
