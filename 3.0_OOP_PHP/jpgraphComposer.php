<?php
#PHP inbuilt constant
/*require_once 'CountyMix.php';
use Mixer\CountyMix;
$testObject=new CountyMix();

die(__DIR__);*/

#autoloading of classes

ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);

require_once 'vendor/autoload.php';

   use Amenadiel\JpGraph\Graph;
   use Amenadiel\JpGraph\Plot;

   // Create the Pie Graph.
   $graph = new Graph\PieGraph(550, 450);
   $graph->title->Set("A Simple Pie Plot");
   $graph->SetBox(true);

   $data = array(40, 21, 17, 14, 23);
   $p1   = new Plot\PiePlot($data);
   $p1->ShowBorder();
   $p1->SetColor('black');
   $p1->SetSliceColors(array('#1E90FF', '#2E8B57', '#ADFF2F', '#DC143C', '#BA55D3'));

   $graph->Add($p1);
   $graph->Stroke();