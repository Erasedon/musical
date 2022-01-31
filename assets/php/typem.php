
<?php
  include "connexion.php";
?>
<form method="get" action="index.php">
		<div >	
			<p>Type de musique</p>
			    <select name="typem">
				    <option value="rock">Rock</option>
				    <option value="rap">Rap</option>
                    
		    <input type="submit" value="Envoyer"></input>
	   	</div>
	</form>

		<div>
		    <P>Liste des Musiques </P>
			    <textarea>
			    	<?php
						while ($donnees = $reponse->fetch()){
						echo $donnees['nomm'] . "\n";
						}

						$reponse->closeCursor(); // Termine le traitement de la requête
			    	?>
			   	</textarea>
		</div>