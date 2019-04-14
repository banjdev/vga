<?php
ob_start();
	require ("connexion.php");

	if (isset($_POST['pseudo']) && isset($_POST['email']) && isset($_POST['pass'])  && isset($_POST['passconfirm']))
	{
		$pseudo = $_POST['pseudo'];
		$email = $_POST['email'];
		$password = $_POST['pass'];
		$passconfirm = $_POST['passconfirm'];

		if($password!=$passconfirm)
		{
			header('Location:signup.html');
		}else{
					$var=false;
					$result=$bdd->query('select * from utilisateur');

					while($data=$result->fetch())
					{
						if(($data['email']==$email) || ($data['password']==$password))
						{
							$var=true;
							session_start();
							$_SESSION['pseudo']=$data['pseudo'];
						}
					}

					if ($var)
					{
						header('Location:signup.html');
					}
						else
						{
			      	$req='insert into utilisateur values(NULL,"'.$pseudo.'","'.$email.'","'.$password.'","'.$passconfirm.'")';
						  $result = $bdd -> query($req);

						   if ($result)
						   {
							   header('Location:form_cv.html');
					     }else{
						        header('Location:signup.html');
						        }
            }
	    	}
	}else{
		echo"Erreur Variable";
	}

?>
