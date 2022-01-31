
<h2 class="art"> l'Ajout de musique</h2>
<div class="blockflex">
<FORM action="assets/php/enregistrement.php" method="post">
<div class="form-group">
    		<label for="exampleInputEmail1">Pseudo</label>
    		<input type="text" class="form-control" placeholder="Entrez le Pseudonime de l'artiste" name="pseudo" required>
  	</div>
      <div class="form-group">
    		<label for="exampleInputEmail1">Image de l'ablum</label>
    		<input type="text" class="form-control" placeholder="Envoyer le nom du fichier" name="Fichier">
  	</div>
		<div class="form-group">
    		<label for="exampleInputEmail1">Nom de la musique</label>
    		<input id="nomm"  type="text" class="form-control" placeholder="Nom de la musique" name="nomm" required>
  	</div>
    <div class="form-group">
        <label for="exampleInputEmail1">Type de musique </label>
        <input id="typem"  class="form-control" placeholder="type de la musique" name="typem" required>
    </div>
	
		<input type="Submit" value="Enregistrer la musique" id="submit" >
	</FORM>
</div>
