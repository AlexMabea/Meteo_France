<?php 
// content="text/plain; charset=utf-8"
require_once ('./jpgraph/src/jpgraph.php');
require_once ('./jpgraph/src/jpgraph_pie.php');
require_once ('./jpgraph/src/jpgraph_pie3d.php');

$var1=$_REQUEST['var1'];
$var2=$_REQUEST['var2'];
$var3=$_REQUEST['var3'];
$var4=$_REQUEST['var4'];
$var5=$_REQUEST['var5'];
$var6=$_REQUEST['var6'];
$var7=$_REQUEST['var7'];
$var8=$_REQUEST['var8'];
$var9=$_REQUEST['var9'];
$var10=$_REQUEST['var10'];
$var11=$_REQUEST['var11'];
$var12=$_REQUEST['var12'];
$var13=$_REQUEST['var13'];

// Some data
$data = array($var1,$var2,$var3,$var4,$var5,$var6,$var7,$var8,$var9,$var10,$var11,$var12,$var13);

// Create the Pie Graph. 
$graph = new PieGraph(720,550);

$theme_class= new VividTheme;


// Set A title for the plot
$graph->title->Set("Graphe des recherches par régions");

// Create
$p1 = new PiePlot3D($data);
$graph->Add($p1);

$p1->SetTheme('sand');
$p1->ExplodeAll();
$p1-> SetCenter(0.5,0.4);
$p1->ShowBorder();
$p1->SetColor('red');
$p1->SetLegends(array("Ile-de-France","Auvergne-Rhône-Alpes","Bourgogne-Franche-Compté","Bretagne","Centre-Val de Loire","Corse","Grand Est","Hauts-de-France","Normandie","Nouvelle-Aquitaine","Occitanie","Pays de la Loire","Provence-Alpes-Côte-d'Azur"));

$graph->Stroke();

?>