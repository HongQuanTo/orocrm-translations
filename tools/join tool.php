<?php

$inputFiles = array(
	'slipted1.csv', 'slipted2.csv', 'slipted3.csv', 'slipted4.csv', 'slipted5.csv', 'slipted6.csv', 'slipted7.csv', 'slipted8.csv', 'slipted9.csv' , 
	'slipted10.csv', 'slipted11.csv', 'slipted12.csv', 'slipted13.csv', 'slipted14.csv', 'slipted15.csv', 'slipted16.csv', 'slipted17.csv', 'slipted18.csv', 'slipted19.csv',  'slipted20.csv', 'slipted21.csv', 'slipted22.csv', 'slipted23.csv', 'slipted24.csv', 'slipted25.csv', 'slipted26.csv', 'slipted27.csv', 'slipted28.csv', 'slipted29.csv', 'slipted30.csv', 'slipted31.csv', 'slipted32.csv'
	);
$outputFile = 'vi-vn.csv';

joinFiles($inputFiles, $outputFile);

function joinFiles(array $files, $result) {
    if(!is_array($files)) {
        throw new Exception($files. 'must be an array');
    }

    $wH = fopen($result, "w+");

    foreach($files as $file) {
        $fh = fopen($file, "r");
        while(!feof($fh)) {
            fwrite($wH, fgets($fh));
        }
        fclose($fh);
        unset($fh);
        // fwrite($wH, "\n"); //usually last line doesn't have a newline
    }
    fclose($wH);
    unset($wH);
}
?>
