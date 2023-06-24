<?php
session_start();
$generate_json = json_encode ( $_SESSION['history'] );

// Create filename
$filename = 'generated_json_' . date( 'Y-m-d' );

// Force download .json file with JSON in it
header("Content-type: application/vnd.ms-excel");
header("Content-Type: application/force-download");
header("Content-Type: application/download");
header("Content-disposition: " . $filename . ".json");
header("Content-disposition: filename=" . $filename . ".json");

print $generate_json;
exit;
?>
