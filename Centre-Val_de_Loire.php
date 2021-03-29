<?php
	include "include/fonctions.inc.php";
?>

<?php
	$title="Weather Forecast - Centre-Val de Loire";
	$nom="Centre-Val_de_Loire";
	require_once "include/header.inc.php";
?>

<section>
	<h2> Région - Centre-Val de Loire </h2>
	
	<article>
		<h3> Choisir un département parmis ceux proposée </h3>
		
	<div id="box3">
		<form method="get" action="ville.php">    
	    <fieldset>
        <label for="depart"> Choisir un département de la région Centre-Val de Loire :</label>
        <select name="departement">
          <option value="18"> Cher </option>
          <option value="28"> Eure-et-Loir </option>
		  <option value="36"> Indre </option>
          <option value="37"> Indre-et-Loire </option>
          <option value="41"> Loir-et-Cher </option>
		  <option value="45"> Loiret </option>
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