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

$assocjson = json_decode($json_data, true);

echo "<b>Data Json :</b>";
echo "<pre>";
var_dump($assocjson);
echo "</pre>";

if (isset($_POST['submit'])) {
    $filename = date("Y-m-d") . " " . rand(1, 1000) . '.json';

    if (file_put_contents($filename, $json_data) === false) {
        echo '<script>alert("gagal menyimpan file !!!");</script>';
        die();
    }

    echo '<script>alert("berhasil menyimpan file !!!");</script>';
}
?>

<br>
<form action="" method="post">
    <label for="">Simpan ke dalam file .JSON ?</label>
    <input type="submit" value="Simpan" name="submit">
</form>