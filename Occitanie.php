<?php
	include "include/fonctions.inc.php";
?>
<?php
	$title="Weather Forecast - Occitanie";
	$nom="Occitanie";
	require_once "include/header.inc.php";
?>

<section>
	<h2> Région - Occitanie </h2>
	
	<article>
		<h3> Choisir un département parmis ceux proposée </h3>
		
	<div id="box3">
		<form method="get" action="ville.php">    
	    <fieldset>
        <label for="depart"> Choisir un département de la région Occitanie :</label>
        <select name="departement">
          <option value="9"> Ariège </option>
          <option value="11"> Aude </option>
          <option value="12"> Aveyron </option>
          <option value="30"> Gard </option>
		  <option value="31"> Haute-Garonne </option>
          <option value="32"> Gers </option>
          <option value="34"> Hérault </option>
          <option value="46"> Lot </option>
		  <option value="48"> Lozère </option>
          <option value="65"> Hautes-Pyrénées </option>
          <option value="66"> Pyrénées-Orientales </option>
          <option value="81"> Tarn </option>
		  <option value="82"> Tarn-et-Garonne </option>
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