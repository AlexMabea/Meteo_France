<?php
	include "include/fonctions.inc.php";
?>

<?php
	$title="Weather Forecast - Hauts-de-France";
	$nom="Hauts-de-France";
	require_once "include/header.inc.php";
?>

<section>
	<h2> Région - Hauts-de-France </h2>
	
	<article>
		<h3> Choisir un département parmis ceux proposée </h3>
		
	<div id="box3">
		<form method="get" action="ville.php">    
	    <fieldset>
        <label for="depart"> Choisir un département de la région Hauts-de-France :</label>
        <select name="departement">
          <option value="2"> Aisne </option>
          <option value="59"> Nord </option>
          <option value="60"> Oise </option>
          <option value="62"> Pas-de-Calais </option>
		  <option value="80"> Somme </option>
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