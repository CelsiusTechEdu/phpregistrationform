<?php
$file = "./userdata.csv";
fopen($file, "r");
$handle = fopen($filename, "w");
fputcsv($handle, "array 'Celestina', 'habtwotwoproject@gmail.com', '2018-07-22', 'female', 'Nigeria'");
fclose($handle);

