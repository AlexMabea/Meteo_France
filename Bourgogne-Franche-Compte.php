<?php
	include "include/fonctions.inc.php";
?>
<?php
	$title="Weather Forecast - Bourgogne-Franche-Compte";
	$nom="Bourgogne-Franche-Compté";
	require_once "include/header.inc.php";
?>


<section>
	<h2> Région - Bourgogne-Franche-Compte </h2>
	
	<article>
		<h3> Choisir un département parmis ceux proposée </h3>
		
	<div id="box3">
		<form method="get" action="ville.php">    
	    <fieldset>
        <label for="depart"> Choisir un département de la région Bourgogne-Franche-Compte :</label>
        <select name="departement">
          <option value="21"> Côtes-d'Or </option>
          <option value="25"> Doubs </option>
          <option value="39"> Jura</option>
          <option value="58"> Nièvre </option>
		  <option value="70"> Haute-Saône </option>
          <option value="71"> Saône-et-Loire </option>
          <option value="89"> Yonne </option>
          <option value="90"> Territoire de Belfort </option>
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