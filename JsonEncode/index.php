<?php
$assoc = array("nama" => "ahmad fikri husaini", 
"kelas" => "PTI 2020 B", 
"Nim" => 20050974030, 
"hobby" => array("gaming", "programming"),
"contact" => array("No.Hp" => "08168818281","email" => "ahmadfikri.20030@mhs.unesa.ac.id", "Address" => "JL.Melati"));
$array = array("Ahmad Fikri Husaini", "PTI 2020 B", 20050974030);
$json1 = json_encode($assoc, JSON_PRETTY_PRINT | JSON_NUMERIC_CHECK);
$json2 = json_encode($array, JSON_PRETTY_PRINT);
echo "<b>Encode PHP array menjadi Json Object</b>";
echo "<pre>";
echo $json1;
echo "</pre>";
echo "<b>Encode PHP array menjadi Json Array</b>";
echo "<pre>";
echo $json2;
?>