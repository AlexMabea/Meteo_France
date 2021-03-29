 <?php
 	 function calcul_pourcentage($nombre,$total,$pourcentage)
    { 
      $resultat = ($nombre/$total) * $pourcentage;
      return round($resultat); // Arrondi la valeur
    } 
	
 function Compteur($nom){
	$nom1=$nom . ".txt";
	$fichier=fopen("$nom1","c+");
	$Compteur=intval(fgets($fichier));
	$Compteur++;
	fseek($fichier,0);
	fputs($fichier,$Compteur);
	fclose($fichier);
  }
  
  function returnCompteur($nom){
	$nom1=$nom . ".txt";
	$fichier=fopen("$nom1","c+");
	$Compteur=intval(fgets($fichier));
	fclose($fichier);
	return $Compteur;
  }
  
  function ajouter_vue(): void{
	  $fichier = 'compteurbasique.txt';
	  $fichier_journalier = $fichier .'-'.date('Y-m-d');
	  incrementer_compteur($fichier);
	  incrementer_compteur($fichier_journalier);
  }
  
  function incrementer_compteur($fichier):void{
	$compteur = 1;
	if (file_exists($fichier)){
		$compteur =(int)file_get_contents($fichier);
		$compteur++;
	}
	file_put_contents($fichier, $compteur);
  }
  
  function nombre_vues():string {
	  $fichier = dirname(__DIR__) . DIRECTORY_SEPARATOR .'data' . DIRECTORY_SEPARATOR .'compteur';
	  return file_get_contents($fichier);
  }
  
  function nb_vues_mois (int $year, int $mois){
	
  }

?>