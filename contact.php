	<form method=post enctype="text/plain" action="index.php">
	
		<fieldset>
			<h2>Envoyez moi un message !</h2>
		
			<div id="formLeft">
				<label for="nom">Nom :</label><input id="nom" name="name" type="text" /><br />
				<label for="mail">Adresse Mail :</label><input name="mail" id="mail" type="text" />
			</div>
			
			<div id="formRight">
				<label for="message">Message :</label><textarea name="message" id="message" placeholder="Entrez votre message !" ></textarea>
			</div>
			
			<input id="submit" type="submit" />
		</fieldset>
		
	</form>