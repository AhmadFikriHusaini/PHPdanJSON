<p><b>Upload File Json Untuk Di tampilkan Ke PHP!!</b></p>
<form action="" enctype="multipart/form-data" method="post">
    <input type="file" name="file" id="">
    <input type="submit" name="submit" value="submit">
</form>

<?php
if (isset($_POST['submit'])) {
    $filename = $_FILES['file']['name'];
    $filetemp = $_FILES['file']['tmp_name'];
    $filetype = $_FILES['file']['type'];
    $filesize = $_FILES['file']['size'];

    if ($filetype == 'application/json') {
        if (move_uploaded_file($filetemp, $filename)) {
            
            echo '<script>alert("Berhasil");</script>';
            
            $target = file_get_contents($filename);
            $json = json_decode($target, TRUE);
            echo '<pre>';
            echo '<b>ISI JSON ANDA !!!</b><br><br>';
            var_dump($json);

        }
    } else {
        echo '<script>alert("hanya dapat upload file JSON");</script>';
    }
}
?>