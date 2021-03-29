<?php
	include "include/fonctions.inc.php";
?>
<?php
	$title="Weather Forecast - Mise à jour";
	$once=0;
	setcookie('once',$once);
	require_once "include/header.inc.php";
?>

<section>
	<h1> Mises à jour du site </h1>
	<article>
		<h2> 05 Mai 2020 </h2>
		<ul>
			<li> - Modification du Header et création de la page de suivi "Mise à jour". </li>
			<li> - Ajouts de marges (sur la gauche) concernant tout les éléments du site. </li>
			<li> - Modification du code du Tableau de la météo: il est plus compréhensible et visuellement clair. </li>
			<li> - Ajout de données Statistiques: ajout du nombre total de consultation et affichage du nombre total de recherches par régions. </li>
			<li> - Mise à jour CSS sur des éléments afin de correspondre à la charte graphique. </li>
		</ul>
	</article>
	<article>
	<h2> 07 Mai 2020 </h2>
		<ul>
			<li> - Ajouts de checkbox permettant l'affichage de détails à la météo: description, vent, humidité, température ressentie. </li>
			<li> - Ajouts d'éléments visuels représentant la météo: soleil, pluie, nuages. </li>
		</ul>
	</article>
	<article>
	<h2> 09 Mai 2020 </h2>
		<ul>
			<li> - Amélioration du cookie "LastVille": il contient dorénavent plus d'informations (description, vent, humidité, température ressentie.) </li>
			<li> - Ajout d'un cookie "once" qui permet d'executer la page derniereVille avec les informations précises de la derniere ville et d'ensuite avoir un déroulement basique </li>
			<li> - Ajout de statistiques : nombre de visiteurs total et de visiteurs par mois </li>
			<li> - Ajouts de compteurs de visite mois. </li>
		</ul>
	</article>
	<article>
	<h2> 10 Mai 2020 </h2>
		<ul>
			<li> - Vérifications de la validité de toutes les pages du site selon le validateur W3C </li>
			<li> - Vérifications de la validité XML de toutes les pages du site. </li>
			<li> - Vérifications de la validité des feuilles de style CSS selon le validateur W3C.
			<li> - Corrections syntaxique des pages html </li>
			<li> - Modifications, ajouts et corrections des pages web afin de correspondre aux différents validateurs. </li>
		</ul>
	</article>
</section>

<?php 
	require_once "include/footer.inc.php";
?>