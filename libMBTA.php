<?php
// libMBTA.php
//
// This is the "central" script that ties together the 
// various requests and realtime queries. It's not strictly
// necessary to include this - the useful functions are in 
// each of the php scripts included here. 

namespace libMBTA;

require_once("config.php"); 
require_once("generic.php"); 
//require_once("alerts.php"); 
//require_once("vehicles.php"); 
//require_once("predictions.php"); 
require_once("schedule.php"); 
require_once("stops.php"); 
require_once("routes.php"); 

$schedules = new schedules; 

$params = array(
	'direction'	=> '1', 
	'max_time'	=> '120'
); 

try { 
	$arrSchedules = $schedules->getScheduleByRoute("CR-Franklin", $params); 
} catch ( ScheduleNotAvailable $e) { 
	echo $e->errorMessage(); 
	exit;
}

print_r($arrSchedules); 


?>
