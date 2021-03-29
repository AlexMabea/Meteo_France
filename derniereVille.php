<?php
	$LastVille = unserialize($_COOKIE['LastVille']);
	$once = $_COOKIE['once'];
	$jour = (int)$LastVille['jour'];
	$desc = (int)$LastVille['description'];
	$ress = (int)$LastVille['ressenti'];
	$humi = (int)$LastVille['humidité'];
	$vent = (int)$LastVille['vent'];

	
    if(isset($_COOKIE["LastVille"])){
        $ville=$LastVille["ville"];
        $adresse = "http://api.openweathermap.org/data/2.5/weather?q=$ville&appid=0feec7c7be1758e2479830f158251c51&units=metric&lang=fr";
        $file_headers = @get_headers($adresse);
            if(!$file_headers || $file_headers[0] == 'HTTP/1.1 404 Not Found') 
            {
                echo "La météo pour $ville est indisponible";
            }
            else 
            {
                $json = file_get_contents($adresse);
                $file=json_decode($json,true);
                    $Meteo=[
                        'temps'=> $file['main']['temp'],
                        'ressenti'=>$file['main']['feels_like'],
                        'humidité'=>$file['main']['humidity'],
                        'description'=> $file['weather'][0]['description'],
                        'vent'=>$file['wind']['speed'],
                        'date'=>date('d/m/Y', $file['dt']),
						'image'=>$file['weather'][0]['icon']
                    ];
            }
    }
	
	 $adresse1 = "http://api.openweathermap.org/data/2.5/forecast?q=$ville&appid=0feec7c7be1758e2479830f158251c51&units=metric&lang=fr";
	 $file_headers = @get_headers($adresse);
            if(!$file_headers || $file_headers[0] == 'HTTP/1.1 404 Not Found') 
            {
                echo "La météo pour $ville est indisponible ";
            }
            else 
            {
                $json = file_get_contents($adresse1);
                $file=json_decode($json,true);
                $MeteoDonnees=[];
                $donnees=[];
                $j=date('d/m');
                foreach ($file['list'] as $day) {
                    $j1=date('d/m', $day['dt']);
                    if($j==$j1) {
                        $donnee=[
                        'temps'=> $day['main']['temp'],
                        'ressenti'=>$day['main']['feels_like'],
                        'humidité'=>$day['main']['humidity'],
                        'description'=> $day['weather'][0]['description'],
                        'vent'=>$day['wind']['speed'],
                        'date'=>date('d/m/Y', $day['dt']),
						'heure'=>date('H', $day['dt'])."H",
						'image'=>$day['weather'][0]['icon']
                        ];
                        array_push($donnees, $donnee);
                    }
                    else{
                        $j=date('d/m', $day['dt']);
                        array_push($MeteoDonnees, $donnees);
                        $donnees=[];
                    }
                }
            }
?>

<?php
	$title="Weather Forecast - Villes";
	require_once "include/header.inc.php";
?>

<section>
	<h2> <?php 	echo " Ville choisie : ".$ville;?> </h2>
	
	<article>

	<?php
		echo "<h2> Il fait actuellement : ".$Meteo['temps']."&#176;C à ".$ville."</h2>
		  <img src=\"http://openweathermap.org/img/wn/".$Meteo['image']."@2x.png\" alt=\"meteo\"/>";
	?>
	
	<table>
	<?php
	if($once==0){
	$once=1;
	setcookie('once',$once);
	if (!empty($_COOKIE['LastVille']) && !empty($jour)) {
		
            for ($i=0; $i < $jour; $i++) {
			echo "<tr>";
			if ($i==0){
				echo "<th>".$Meteo['date']."</th>" ;
				foreach ($MeteoDonnees[$i] as $key) {
						echo "<th>".$key['heure']."</th>";
					}
			}
			else{
					$n=0;
					foreach ($MeteoDonnees[$i] as $key) {

						if($n==0){

						echo "<th>".$key['date']."</th>" ;
						$n=1;
						}
						echo "<th>".$key['heure']."</th>";
					}
			}
				echo "</tr>";
				echo "<tr> ";
				echo "<th> Températures: </th>" ;	
				 foreach ($MeteoDonnees[$i] as $key) {
					$texte="<p>".$key['temps']."&#176;C <img src=\"http://openweathermap.org/img/wn/".$key['image']."@2x.png\" alt=\"meteo\" /> </p>";
		
						if(!empty($desc)){
							$texte=$texte."<p>".$key['description']."</p>";
						}
						if(!empty($vent)){
							$texte=$texte."<p> Vent : ".$key['vent']." km/h </p>";
						}
						if(!empty($humi)){
							$texte=$texte."<p> Humidité : ".$key['humidité']."% </p>";
						}
						if(!empty($ress)){
							$texte=$texte."<p> Ressenti : ". $key['ressenti']."&#176;C </p>";
						}
                    echo " <td>".$texte."</td>";
					$texte="";
                }
				echo "</tr>";
			}
            }
		

	}
	
	else{

				$LastVille['jour']=$_GET['jour'];
				$LastVille['description']=$_GET['Description'];
				$LastVille['vent']=$_GET['Vent'];
				$LastVille['humidité']=$_GET['Humidité'];
				$LastVille['ressenti']=$_GET['Ressenti'];
				setcookie('LastVille', serialize($LastVille));
		if (!empty($_COOKIE['LastVille']) && !empty($_GET['jour'])) {
		
            for ($i=0; $i < $_GET['jour']; $i++) {
			echo "<tr>";
			if ($i==0){
				echo "<th>".$Meteo['date']."</th>" ;
				foreach ($MeteoDonnees[$i] as $key) {
						echo "<th>".$key['heure']."</th>";
					}
			}
			else{
					$n=0;
					foreach ($MeteoDonnees[$i] as $key) {

						if($n==0){

						echo "<th>".$key['date']."</th>" ;
						$n=1;
						}
						echo "<th>".$key['heure']."</th>";
					}
			}
				echo "</tr>";
				echo "<tr> ";
				echo "<th> Températures: </th>" ;	
				 foreach ($MeteoDonnees[$i] as $key) {
					$texte="<p>".$key['temps']."&#176;C <img src=\"http://openweathermap.org/img/wn/".$key['image']."@2x.png\" alt=\"meteo\" /> </p>";
		
						if(!empty($_GET['Description'])){
							$texte=$texte."<p>".$key['description']."<p>";
						}
						if(!empty($_GET['Vent'])){
							$texte=$texte."<p> Vent : ".$key['vent']." km/h </p>";
						}
						if(!empty($_GET['Humidité'])){
							$texte=$texte."<p> Humidité : ".$key['humidité']."% </p>";
						}
						if(!empty($_GET['Ressenti'])){
							$texte=$texte."<p> Ressenti : ".$key['ressenti']."&#176;C </p>";
						}
                    echo " <td>".$texte."</td>";
					$texte="";
                }
				echo "</tr>";
			}
            }
	
	}
	?>
	</table>
	
	
	</article>
	<article>
	<h3> Tableau de selection : </h3>

		<form action="#" method="get">
          <fieldset>
			<div id="box4">
			<h3> Selectionnez la durée pour laquelle vous souhaitez avoir la météo : </h3>
            <input type="radio" id="j1" name="jour" value="1" />
              <label for="j1">Pour aujourd'hui </label>

              <input type="radio" id="j2" name="jour" value="2"/>
              <label for="j2">Pour aujourd'hui et demain</label>

              <input type="radio" id="j3" name="jour" value="3"/>
              <label for="j3">Pour aujourd'hui et les 2 jours à venir</label>

              <input type="radio" id="j4" name="jour" value="4"/>
              <label for="j4">Pour aujourd'hui et les 3 jours à venir</label>

              <input type="hidden" name="ville" value="<?php print_r($ville) ;?>" />

				<h3> Options : </h3>
				<input type="checkbox" id="1" name="Description" value="1"/>
			    <label for="1">Description</label>

			    <input type="checkbox" id="2" name="Vent" value="1"/>
			    <label for="2">Vent</label>
			    
			    <input type="checkbox" id="3" name="Humidité" value="1"/>
			    <label for="3">Humidité</label>

			    <input type="checkbox" id="4" name="Ressenti" value="1"/>
			    <label for="4"> Ressenti</label>

				<button type="submit"> Valider </button>
				
			</div>
		  	</fieldset>
      </form>
	</article>
</section>
	
<?php
	require_once "include/footer.inc.php";
?>