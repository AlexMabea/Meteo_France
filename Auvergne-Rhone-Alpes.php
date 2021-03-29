<?php
	include "include/fonctions.inc.php";
?>

<?php
	$title="Weather Forecast - Auvergne-Rhône-Alpes";
	$nom="Auvergne";
	require_once "include/header.inc.php";
?>



<section>
	<h2> Région - Auvergne-Rhône-Alpes </h2>
	
	<article>
		<h3> Choisir un département parmis ceux proposée </h3>
		
	<div id="box3">
		<form method="get" action="ville.php">    
	    <fieldset>
        <label for="depart"> Choisir un département de la région Auvergne-Rhône-Alpes :</label>
        <select name="departement">
          <option value="1"> Ain </option>
          <option value="3"> Allier </option>
          <option value="7"> Ardèche </option>
          <option value="15"> Cantal </option>
		  <option value="26"> Drôme </option>
          <option value="38"> Isère </option>
          <option value="42"> Loire </option>
          <option value="43"> Haute-Loire </option>
		  <option value="63"> Puy-de-Dôme </option>
          <option value="69"> Rhône </option>
          <option value="73"> Savoie </option>
		  <option value="74"> Haute-Savoie </option>
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