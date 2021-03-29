<?php
	include "include/fonctions.inc.php";
?>
<?php
	$title="Weather Forecast - Statistiques";
	$once=0;
	setcookie('once',$once);
	require_once "include/header.inc.php";
?>
<section>
	<h2> Statistiques et Graphiques </h2> 
<article>
	<h3> Visites par régions : </h3>
	
	<?php
		$IDF="Ile-de-france";
		$Auvergne="Auvergne";
		$Bourgogne="Bourgogne-Franche-Compté";
		$Bret="Bretagne";
		$CentreVal="Centre-Val_de_Loire";
		$Cors="Corse";
		$GrandE="Grand_Est";
		$Hauts="Hauts-de-France";
		$Normand="Normandie";
		$Nouv="Nouvelle-Aquitaine";
		$Occitan="Occitanie";
		$Pays="Pays_de_la_Loire";
		$Provence="Provence-Alpes-Cote_d'Azur";
		$index="index";
		
		$index=returnCompteur($index);
		$Janvier=returnCompteur("Janvier");
		$Fevrier=returnCompteur("Fevrier");
		$Mars=returnCompteur("Mars");
		$Avril=returnCompteur("Avril");
		$Mai=returnCompteur("Mai");
		$Juin=returnCompteur("Juin");
		$Juillet=returnCompteur("Juillet");
		$Aout=returnCompteur("Aout");
		$Septembre=returnCompteur("Septembre");
		$Octobre=returnCompteur("Octobre");
		$Novembre=returnCompteur("Novembre");
		$Decembre=returnCompteur("Decembre");
		
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
		
		$correspondance = array(
		'Janvier' => $Janvier,
		'Fevrier' => $Fevrier,
		'Mars' => $Mars,
		'Avril' => $Avril,
		'Mai' => $Mai,
		'Juin' => $Juin,
		'Juillet' => $Juillet,
		'Aout' => $Aout,
		'Septembre' => $Septembre,
		'Octobre' => $Octobre,
		'Novembre' => $Novembre,
		'Decembre' => $Decembre
		);
		
		$i1=returnCompteur($IDF);
		$i2=returnCompteur($Auvergne);
		$i3=returnCompteur($Bourgogne);
		$i4=returnCompteur($Bret);
		$i5=returnCompteur($CentreVal);
		$i6=returnCompteur($Cors);
		$i7=returnCompteur($GrandE);
		$i8=returnCompteur($Hauts);
		$i9=returnCompteur($Normand);
		$i10=returnCompteur($Nouv);
		$i11=returnCompteur($Occitan);
		$i12=returnCompteur($Pays);
		$i13=returnCompteur($Provence);

		$total=$i1+$i2+$i3+$i4+$i5+$i6+$i7+$i8+$i9+$i10+$i11+$i12+$i13;
		
		$valeur_p = 100;
		
		$v1=calcul_pourcentage($i1,$total,$valeur_p);
		$v2=calcul_pourcentage($i2,$total,$valeur_p);
		$v3=calcul_pourcentage($i3,$total,$valeur_p);
		$v4=calcul_pourcentage($i4,$total,$valeur_p);
		$v5=calcul_pourcentage($i5,$total,$valeur_p);
		$v6=calcul_pourcentage($i6,$total,$valeur_p);
		$v7=calcul_pourcentage($i7,$total,$valeur_p);
		$v8=calcul_pourcentage($i8,$total,$valeur_p);
		$v9=calcul_pourcentage($i9,$total,$valeur_p);
		$v10=calcul_pourcentage($i10,$total,$valeur_p);
		$v11=calcul_pourcentage($i11,$total,$valeur_p);
		$v12=calcul_pourcentage($i12,$total,$valeur_p);
		$v13=calcul_pourcentage($i13,$total,$valeur_p);
		echo "<h3> Nombre total de recherches de météo : ".$total."</h3>";
		echo "<img src='./figure1.php?var1=$v1&amp;var2=$v2&amp;var3=$v3&amp;var4=$v4&amp;var5=$v5&amp;var6=$v6&amp;var7=$v7&amp;var8=$v8&amp;var9=$v9&amp;var10=$v10&amp;var11=$v11&amp;var12=$v12&amp;var13=$v13' alt=\"camembert\" />";
		
	?>
</article>
<article>
	<?php echo "<h2> Nombre total de visite du site :". $index."</h2>" ?>
	
	<h3> Nombre de visites par mois : </h3>
		<ul>
			<?php foreach($mois as $i => $nom): ?>
			<li>
				<?php echo $nom." : ".$correspondance[$nom]; ?>
			</li>
			<?php endforeach; ?>
		</ul>

</article>
</section>
	
<?php
	require_once "include/footer.inc.php";
?>