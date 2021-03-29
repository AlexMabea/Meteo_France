<?php
	function listeVille(){
		$lecture=file("tri.csv");
		$cookie=null;
		echo "<form method=\"get\" action=\"traitement.php\">    
				<fieldset>
				<label for=\"choix\"> Choisir ville :</label>
				<select name=\"ville\">";
		for($i=0;$i<count($lecture);$i++)
			{
				$numero[$i]=strtok($lecture[$i],",");
				$ville[$i]=strtok("\n");
				$departement=$_GET["departement"];
				if($departement == $numero[$i]){
				echo "\t <option value=\"$ville[$i]\">".$ville[$i]."</option> \n";
				}
			}
			
		echo"</select>
				<input type=\"submit\" value=\"valider\" id=\"choix\"/>
				</fieldset>
		</form>";
	}
	
		function afficheDepartement($departement){
		$departements=array(
		'75'=>"Paris",'74'=>"Haute-Savoie","75"=>"Paris",
        "77"=>"Seine-et-Marne", "78"=>"Yvelines","91"=>"Essonne",
		"92"=>"Hauts-de-Seine","93"=>"Seine-Saint-Denis","94"=>"Val-de-Marne",
        "95"=>"Val-d'Oise","1"=>"Ain","3"=>"Allier","7"=>"Ardèche",
        "15"=>"Cantal","26"=>"Drôme","38"=>"Isère", "42"=>"Loire", 
        "43"=>"Haute-Loire", "63"=>"Puy-de-Dôme", "69"=>"Rhône", 
        "73"=>"Savoie","74"=>"Haute-Savoie","21"=>"Côtes-d'Or",
        "25"=>"Doubs","39"=>"Jura","58"=>"Nièvre","70"=>"Haute-Saône",
        "71"=>"Saône-et-Loire","89"=>"Yonne","90"=>"Territoire de Belfort",
		"22"=>"Côtes-d'Armor","29"=>"Finistère","35"=>"Ille-et-Vilaine",
        "56"=>"Morbihan","18"=>"Cher","28"=>"Eure-et-Loir",
		"36"=>"Indre","37"=>"Indre-et-Loire","41"=>"Loir-et-Cher",
		"45"=>"Loiret","2B"=>"Haute-Corse","2A"=>"Corse du Sud",
		"8"=>"Ardennes","10"=>"Aude","51"=>"Marne",
        "52"=>"Haute-Marne","54"=>"Meurthe-et-Moselle","55"=>"Meuse ",
        "57"=>"Moselle ","67"=>"Bas-Rhin ","68"=>"Haut-Rhin ",
        "88"=>"Vosges ","2"=>"Aisne ","59"=>"Nord ",
        "60"=>"Oise ","62"=>"Pas-de-Calais ",
		"80"=>"Somme ","14"=>"Calvados ","27"=>"Eure ",
        "50"=>"Manche","61"=>"Orne ","76"=>"Seine-Maritime ",
		"16"=>"Charente ","17"=>"Charente-Maritime ",
        "19"=>"Corrèze","23"=>"Creuse","24"=>"Dordogne",
        "33"=>"Gironde","40"=>"Landes","47"=>"Lot-et-Garonne",
		"64"=>"Pyrénées-Atlantiques","79"=>"Deux-Sèvres",
        "86"=>"Vienne","87"=>"Haute-Vienne","9"=>"Ariège",
        "11"=>"Aude","12"=>"Aveyron","30"=>"Gard",
		"31"=>"Haute-Garonne","32"=>"Gers","34"=>"Hérault",
        "46"=>"Lot","48"=>"Lozère","65"=>"Hautes-Pyrénées",
        "66"=>"Pyrénées-Orientales","81"=>"Tarn",
		"82"=>"Tarn-et-Garonne","44"=>"Loire-Atlantique",
        "49"=>"Maine-et-Loire","53"=>"Mayenne","72"=>"Sarthe",
		"85"=>"Vendée","4"=>"Alpes-de-Haute-Provence","5"=>"Hautes-Alpes",
        "6"=>"Alpes-Maritimes","13"=>"Bouches-du-Rhône","83"=>"Var",
        "84"=>"Vaucluse",
		);
		$ap=$departement;
		return $departements[$ap];
		}
?>

<?php
	$title="Weather Forecast - Villes";
	require_once "include/header.inc.php";
?>

<section>
	<h2> <?php 	echo "Département : ".afficheDepartement($_GET["departement"]); ?> 
	</h2>
	<article>
		<div id="box3">
		<h3> Choisir une ville où vous souhaitez avoir la météo </h3>
		<?php 
		listeVille();
		?>
	
		</div>
	</article>
</section>
<?php
	require_once "include/footer.inc.php";
?>