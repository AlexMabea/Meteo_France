<?php
	include "include/fonctions.inc.php";
?>
<?php
	$title="Weather Forecast - Index";
	require_once "include/header.inc.php";
	$nom="index";
	$once=0;
	setcookie('once',$once);
	$mois = array(
		'1' => 'Janvier',
		'2' => 'Fevrier',
		'3' => 'Mars',
		'4' => 'Avril',
		'5' => 'Mai',
		'6' => 'Juin',
		'7' => 'Juillet',
		'8' => 'Aout',
		'9' => 'Septembre',
		'10' => 'Octobre',
		'11' => 'Novembre',
		'12' => 'Decembre'
		);
	$mois_Actuel=$mois[date('n')];
?>

<section>
	<h2> Weather Forecast - Site dédié à la météo en France </h2>  
	<article>
		<h3> Carte des régions </h3>
		<h4> Sélectionnez une région dans laquelle vous souhaitez avoir la météo. </h4>
<div id="box1">	
<img src="images/cartefrance.jpg" usemap="#image-map" alt="cartefrance"/>

<map name="image-map">
    <area target="a" alt="Bretagne" title="Bretagne" href="Bretagne.php" coords="47,226,134,262,189,238,184,208,125,187,39,183" shape="poly"/>
    <area target="b" alt="Normandie" title="Normandie" href="Normandie.php" coords="188,195,272,211,310,153,305,106,245,147,172,137" shape="poly"/>
    <area target="c" alt="Hauts-de-France" title="Hauts-de-France" href="Hauts-de-France.php" coords="327,153,392,165,416,97,336,50,319,63" shape="poly"/>
    <area target="d" alt="Grand Est" title="Grand Est" href="Grand_Est.php" coords="438,115,398,209,473,238,568,239,577,177" shape="poly"/>
    <area target="e" alt="Ile-de-France" title="Ile-de-France" href="Ile-de-France.php" coords="382,208,334,217,312,180,345,170,377,180" shape="poly"/>
    <area target="f" alt="Pays de la Loire" title="Pays de la Loire" href="Pays_de_la_Loire.php" coords="198,293,199,345,144,313,150,268,202,243,207,208,271,231,234,282" shape="poly"/>
    <area target="g" alt="Centre-Val de Loire" title="Centre-Val de Loire" href="Centre-Val_de_Loire.php" coords="303,200,251,287,300,343,358,318,357,244" shape="poly"/>
    <area target="h" alt="Bourgogne-Franche-Compte" title="Bourgogne-Franche-Compte" href="Bourgogne-Franche-Compte.php" coords="376,269,385,312,433,341,502,336,540,252,471,271,386,233" shape="poly"/>
    <area target="i" alt="Nouvelle-Aquitaine" title="Nouvelle-Aquitaine" href="Nouvelle-Aquitaine.php" coords="188,362,164,543,202,575,219,505,265,481,291,432,327,424,332,364,220,306,213,353" shape="poly"/>
    <area target="j" alt="Auvergne-Rhône-Alpes" title="Auvergne-Rhône-Alpes" href="Auvergne-Rhone-Alpes.php" coords="347,440,401,440,458,478,546,412,534,354,432,371,388,343,364,339" shape="poly"/>
    <area target="k" alt="Occitanie" title="Occitanie" href="Occitanie.php" coords="233,572,353,601,376,553,435,516,405,459,357,467,308,456,238,528" shape="poly"/>
    <area target="l" alt="Provence-Alpes Côte d'Azur" title="Provence-Alpes Côte d'Azur" href="Provence-Alpes-Cote_D'azur.php" coords="507,501,501,471,540,438,572,510,525,554,455,532,463,495" shape="poly"/>
    <area target="m" alt="Corse" title="Corse" href="Corse.php" coords="679,572,639,585,650,644,675,664,690,606" shape="poly"/>
</map>
</div>
	</article>
	
	
	<div id="box2">
	<article>
		<h3> Choix de la région </h3>
	
		<ul>
			<li>
				<a href="Ile-de-France.php"> Ile-de-France </a> 
			</li>
			<li> 
				<a href="Bretagne.php"> Bretagne </a> 
			</li>
			<li> 
				<a href="Normandie.php"> Normandie </a> 
			</li>
			<li> 
				<a href="Hauts-de-France.php"> Hauts-De-France </a> 
			</li>
			<li>
				<a href="Grand_Est.php"> Grand Est </a> 
			</li>
			<li> 
				<a href="Pays_de_la_Loire.php"> Pays de la Loire </a> 
			</li>
			<li> 
				<a href="Centre-Val_de_Loire.php"> Centre-Val de Loire </a> 
			</li>
			<li> 
				<a href="Bourgogne-Franche-Compte.php"> Bourgogne-Franche-Compte </a> 
			</li>
			<li>
				<a href="Nouvelle-Aquitaine.php"> Nouvelle-Aquitaine </a> 
			</li>
			<li> 
				<a href="Auvergne-Rhone-Alpes.php"> Auvergne-Rhône-Alpes </a> 
			</li>
			<li> 
				<a href="Occitanie.php"> Occitanie </a> 
			</li>
			<li> 
				<a href="Provence-Alpes-Cote_D'azur.php"> Provence-Alpes-Côte D'azur </a> 
			</li>
			<li> 
				<a href="Corse.php"> Corse </a> 
			</li>
			
		</ul>
	</article>
	</div>


</section>
	
<?php
	require_once "include/footer.inc.php";
	Compteur($nom);
	Compteur($mois_Actuel);
?>