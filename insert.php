<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $raum = $_POST['raum'];
    $abteilung = $_POST['abteilung'];
    $personenzahl = $_POST['personenzahl'];
    $zeit1 = $_POST['zeit1'];
    $zeit2 = $_POST['zeit2'];
    $dozent = $_POST['dozent'];

    print_r($_POST);

    $file_path = 'data.txt';

    $data = "$raum, $abteilung, $personenzahl, $zeit1, $zeit2, $dozent\n";
    
    $file_handle = fopen($file_path, 'a');

    fwrite($file_handle, $data);

    fclose($file_handle);
}
?>