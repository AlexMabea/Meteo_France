<?php
	include "include/fonctions.inc.php";
?>
<?php
	$title="Weather Forecast - Corse";
	$nom="Corse";
	require_once "include/header.inc.php";
?>

<section>
	<h2> Région - Corse </h2>
	
	<article>
		<h3> Choisir un département parmis ceux proposée </h3>
		
	<div id="box3">
		<form method="get" action="ville.php">    
	    <fieldset>
        <label for="depart"> Choisir un département de la région Corse :</label>
        <select name="departement">
          <option value="2B"> Haute-Corse </option>
          <option value="2A"> Corse du Sud </option>
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