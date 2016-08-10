<?php
$xml=simplexml_load_file("http://apps.cbp.gov/bwt/bwt.xml");
$var = (string) $xml->port[7]->port_number;
$i = 0;
while ($i < 80) {
  $var =(string) $xml->port[$i]->port_number;
  $tiempo = $xml->port[$i]->passenger_vehicle_lanes->standard_lanes->delay_minutes;
  $esperaysidro1=null;
  if ($var=="250401")
            {
            $esperaysidro1= $tiempo;
            $i=80;
            }else{
            $i++;
            }  
}
$i = 0;
while ($i < 80) {
  $var =(string) $xml->port[$i]->port_number;
  $tiempo = $xml->port[$i]->passenger_vehicle_lanes->NEXUS_SENTRI_lanes->delay_minutes;
  if ($var=="250401")
            {
            $esperaysidro2= $tiempo;
            $i=80;
            }else{
            $i++;
            }
}
$i = 0;
while ($i < 80) {
  $var =(string) $xml->port[$i]->port_number;
  $tiempo = $xml->port[$i]->passenger_vehicle_lanes->ready_lanes->delay_minutes;
  if ($var=="250401")
            {
            $esperaysidro3= $tiempo;
            $i=80;
            }else{
              $i=80;
            }
}
$i = 0;
while ($i < 80) {
  $var =(string) $xml->port[$i]->port_number;
  $tiempo = $xml->port[$i]->pedestrian_lanes->standard_lanes->delay_minutes;
  if ($var=="250401")
            {
            $esperaysidro4= $tiempo;
            $i=80;
            }else{
              $i++;
            }
}
// $var = (string) $xml->port[7]->port_number;
$i = 0;
while ($i < 80) {
  $var =(string) $xml->port[$i]->port_number;
  $tiempo = $xml->port[$i]->passenger_vehicle_lanes->standard_lanes->delay_minutes;
  if ($var=="250601")
            {
            $esperaOtay1= $tiempo;
            $i=80;
            }else{
              $i++;
            }
}
// $var = (string) $xml->port[7]->port_number;
$i = 0;
while ($i < 80) {
  $var =(string) $xml->port[$i]->port_number;
  $tiempo = $xml->port[$i]->passenger_vehicle_lanes->NEXUS_SENTRI_lanes->delay_minutes;
  if ($var=="250601")
            {
            $esperaOtay2= $tiempo;
            $i=80;
            }else{
              $i++;
            }
}
$i = 0;
while ($i < 80) {
  $var =(string) $xml->port[$i]->port_number;
  $tiempo = $xml->port[$i]->passenger_vehicle_lanes->ready_lanes->delay_minutes;
  if ($var=="250601")
            {
            $esperaOtay3= $tiempo;
            $i=80;
            }else{
              $i++;
            }
}
$i = 0;
while ($i < 80) {
  $var =(string) $xml->port[$i]->port_number;
  $tiempo = $xml->port[$i]->pedestrian_lanes->standard_lanes->delay_minutes;
  if ($var=="250601")
            {
            $esperaOtay4= $tiempo;
            $i=80;
            }else{
              $i++;
            }
}
//tecate
 // 250501
$i = 0;
while ($i < 80) {
  $var =(string) $xml->port[$i]->port_number;
  $tiempo = $xml->port[$i]->passenger_vehicle_lanes->standard_lanes->delay_minutes;
  if ($var=="250501")
            {
            $esperaTecate1= $tiempo;
            $i=80;
            }else{
              $i++;
            }
}
//SENTRI TECATE
$i = 0;
while ($i < 80) {
  $var =(string) $xml->port[$i]->port_number;
  $tiempo = $xml->port[$i]->passenger_vehicle_lanes->NEXUS_SENTRI_lanes->delay_minutes;
  if ($var=="250501")
            {
            $esperaTecate2= $tiempo;
            $i=80;
            }else{
              $i++;
            }
}
//READY LINE TECATE
$i = 0;
while ($i < 80) {
  $var =(string) $xml->port[$i]->port_number;
  $tiempo = $xml->port[$i]->passenger_vehicle_lanes->ready_lanes->delay_minutes;
  if ($var=="250501")
            {
            $esperaTecate3= $tiempo;
            $i=80;
            }else{
              $i++;
            }
}
?>
