<?php
header('Content-Type: application/json');

$team = [
    "individual" => "individual",
    "section" => "BSIT-3K",
    "school" => "Pamantasan ng Lungsod ng Muntinlupa",
   ];
echo json_encode($team, JSON_PRETTY_PRINT);
?>
