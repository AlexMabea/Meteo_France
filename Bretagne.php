<?php
	include "include/fonctions.inc.php";
?>
<?php
	$title="Weather Forecast - Bretagne";
	$nom="Bretagne";
	require_once "include/header.inc.php";
?>


<section>
	<h2> Région - Bretagne </h2>
	
	<article>
		<h3> Choisir un département parmis ceux proposée </h3>
		
	<div id="box3">
		<form method="get" action="ville.php">    
	    <fieldset>
        <label for="depart"> Choisir un département de la région Bretagne :</label>
        <select name="departement">
          <option value="22"> Côtes-d'Armor </option>
          <option value="29"> Finistère </option>
          <option value="35"> Ille-et-Vilaine </option>
          <option value="56"> Morbihan </option>
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