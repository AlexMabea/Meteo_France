<?php
	include "include/fonctions.inc.php";
?>

<?php
	$title="Weather Forecast - Grand Est";
	$nom="Grand_Est";
	require_once "include/header.inc.php";
?>

<section>
	<h2> Région - Grand Est </h2>
	
	<article>
		<h3> Choisir un département parmis ceux proposée </h3>
		
	<div id="box3">
		<form method="get" action="ville.php">    
	    <fieldset>
        <label for="depart"> Choisir un département de la région Grand Est :</label>
        <select name="departement">
          <option value="8"> Ardennes </option>
          <option value="10"> Aude </option>
          <option value="51"> Marne </option>
          <option value="52"> Haute-Marne </option>
		  <option value="54"> Meurthe-et-Moselle </option>
          <option value="55"> Meuse </option>
          <option value="57"> Moselle </option>
          <option value="67"> Bas-Rhin </option>
		  <option value="68"> Haut-Rhin </option>
          <option value="88"> Vosges </option>
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