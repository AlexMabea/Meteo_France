<?php
	include "include/fonctions.inc.php";
?>

<?php
	$title="Weather Forecast - Provence-Alpes-Côte D'azur";
	$nom="Provence-Alpes-Cote_d'Azur";
	require_once "include/header.inc.php";
?>

<section>
	<h2> Région - Provence-Alpes-Côte D'azur </h2>
	
	<article>
		<h3> Choisir un département parmis ceux proposée </h3>
		
	<div id="box3">
		<form method="get" action="ville.php">    
	    <fieldset>
        <label for="depart"> Choisir un département de la région Provence-Alpes-Côte D'azur :</label>
        <select name="departement">
          <option value="4"> Alpes-de-Haute-Provence </option>
          <option value="5"> Hautes-Alpes </option>
          <option value="6"> Alpes-Maritimes </option>
          <option value="13"> Bouches-du-Rhône </option>
		  <option value="83"> Var </option>
          <option value="84"> Vaucluse </option>
        </select>
        <input type="submit" name="table" value="valider" id="depart"/>       
      </fieldset>
      </form>
	</div>
	</article>
	

</section>
	
	
<?php
	Compteur($nom);
	require_once "include/footer.inc.php";
?>