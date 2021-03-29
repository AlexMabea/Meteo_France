<?php
	include "include/fonctions.inc.php";
?>
<?php
	$title="Weather Forecast - Ile-de-France";
	$nom="Ile-de-france";
	require_once "include/header.inc.php";
?>

<section>
	<h2> Région - Ile-de-France </h2>
	
	<article>
		<h3> Choisir un département parmis ceux proposée </h3>
		
	<div id="box3">
		<form method="get" action="ville.php">    
	    <fieldset>
        <label for="depart"> Choisir un département de la région Ile-de-France :</label>
        <select name="departement">
          <option value="75"> Paris </option>
          <option value="77"> Seine-et-Marne </option>
          <option value="78"> Yvelines </option>
          <option value="91"> Essonne </option>
		  <option value="92"> Hauts-de-Seine </option>
          <option value="93"> Seine-Saint-Denis </option>
          <option value="94"> Val-de-Marne </option>
          <option value="95"> Val-d'Oise </option>
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