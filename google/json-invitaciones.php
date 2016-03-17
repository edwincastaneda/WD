<?php
require_once 'google-spreadsheet-to-array.php';
$key="1M3WafwxMNnvgCT0JIRFhzH_ujmPoSJclCLabDmbTo2U";
$arreglo=google_spreadsheet_to_array($key);

$json=array();
$count=-1;
foreach ($arreglo as $k => $v) {
$count++;

$a="";
$b="";
$c="";
$d="";
$f="";
$g="";
$h="";
$i="";

if(isset($v['A'])){$a=$v['A'];}
if(isset($v['B'])){$b=$v['B'];}
if(isset($v['C'])){$c=$v['C'];}
if(isset($v['D'])){$d=$v['D'];}
if(isset($v['F'])){$f=$v['F'];}
if(isset($v['G'])){$g=$v['G'];}
if(isset($v['H'])){$h=$v['H'];}
if(isset($v['I'])){$i=$v['I'];}


if($count>0){
	$json[]=
	array(
	"familia" => $a,
	"adultos" => $b,
	"ninos" => $c,
	"total" => $d,
	"rsvp_id" => $f,
	"rsvp_adultos" => $g,
	"rsvp_ninos" => $h,
	"email" => $i
	);
}

}

print_r(json_encode($json));

?>
