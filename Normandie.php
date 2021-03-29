<?php
	include "include/fonctions.inc.php";
?>
<?php
	$title="Weather Forecast - Normandie";
	$nom="Normandie";
	require_once "include/header.inc.php";
?>

<section>
	<h2> Région - Normandie </h2>
	
	<article>
		<h3> Choisir un département parmis ceux proposée </h3>
		
	<div id="box3">
		<form method="get" action="ville.php">    
	    <fieldset>
        <label for="depart"> Choisir un département de la région Normandie :</label>
        <select name="departement">
          <option value="14"> Calvados </option>
          <option value="27"> Eure </option>
          <option value="50"> Manche </option>
          <option value="61"> Orne </option>
		  <option value="76"> Seine-Maritime </option>
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