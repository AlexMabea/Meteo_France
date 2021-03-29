<?php
	include "include/fonctions.inc.php";
?>
<?php
	$title="Weather Forecast -  Nouvelle-Aquitaine";
	$nom="Nouvelle-Aquitaine";
	require_once "include/header.inc.php";
?>

<section>
	<h2> Région - Nouvelle-Aquitaine </h2>
	
	<article>
		<h3> Choisir un département parmis ceux proposée </h3>
		
	<div id="box3">
		<form method="get" action="ville.php">    
	    <fieldset>
        <label for="depart"> Choisir un département de la région Nouvelle-Aquitaine :</label>
        <select name="departement">
          <option value="16"> Charente </option>
          <option value="17"> Charente-Maritime </option>
          <option value="19"> Corrèze </option>
          <option value="23"> Creuse </option>
		  <option value="24"> Dordogne </option>
          <option value="33"> Gironde </option>
          <option value="40"> Landes </option>
          <option value="47"> Lot-et-Garonne </option>
		  <option value="64"> Pyrénées-Atlantiques </option>
          <option value="79"> Deux-Sèvres </option>
          <option value="86"> Vienne </option>
          <option value="87"> Haute-Vienne </option>
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