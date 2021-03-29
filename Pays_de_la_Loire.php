<?php
	include "include/fonctions.inc.php";
?>
<?php
	$title="Weather Forecast - Pays de la Loire";
	$nom="Pays_de_la_Loire";
	require_once "include/header.inc.php";
?>
<section>
	<h2> Région - Pays de la Loire </h2>
	
	<article>
		<h3> Choisir un département parmis ceux proposée </h3>
		
	<div id="box3">
		<form method="get" action="ville.php">    
	    <fieldset>
        <label for="depart"> Choisir un département de la région Pays de la Loire :</label>
        <select name="departement">
          <option value="44"> Loire-Atlantique </option>
          <option value="49"> Maine-et-Loire </option>
          <option value="53"> Mayenne </option>
          <option value="72"> Sarthe </option>
		  <option value="85"> Vendée </option>
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