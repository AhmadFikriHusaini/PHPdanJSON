<?php
$json_data = '{
    "nama": "ahmad fikri husaini",
    "kelas": "PTI 2020 B",
    "Nim": 20050974030,
    "hobby": [
        "gaming",
        "programming"
    ],
    "contact": {
        "No.Hp": 8168818281,
        "email": "ahmadfikri.20030@mhs.unesa.ac.id",
        "Address": "JL.Melati"
    }
}';

$objson = json_decode($json_data);
$assocjson = json_decode($json_data, true);

echo "<b>Decode Json data menjadi Object di PHP</b>";
echo "<pre>";
var_dump($objson);
echo "<b>akses variabel dari objek JSON (\$objson->Nim) = </b>" . $objson->Nim;
echo "</pre>";
echo "<b>Decode Json data menjadi Array Asosiatif di PHP</b>";
echo "<pre>";
var_dump($assocjson);
echo "<b>akses vairabel dari array asosiatif JSON (\$assocjson['Nim']) = </b>" . $assocjson['Nim'];