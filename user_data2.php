<?php
$list = array (
  array("Celestina", "habtwotwoproject@gmail.com" , "2018-07-22" , "female" , "Nigeria"),
);

$file = fopen("userdata.csv","w");

foreach ($list as $line) {
  fputcsv($file, $line);
}

fclose($file);
?>