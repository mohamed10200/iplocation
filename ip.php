<?php 

$my_file = fopen("location.txt" "w");
$information = "lat:" . $_GET["lat"] . "/nlong:" . $_GET["lat"];
fwrite($my_file, $information);
fclose($my_file);

?>