<?php
header('Content-Type: application/json');

$team = [
    "individual" => "individual",
    "section" => "BSIT-3K",
    "school" => "Pamantasan ng Lungsod ng Muntinlupa",
     [
            "name" => "Andrei Dela Torre",
            "location" => "Muntinlupa City, Philippines",
            "email" => "delatorreandrei_bsit@plmun.edu.ph",
            "role" => "Development Support"
        ]
    
   ];
echo json_encode($team, JSON_PRETTY_PRINT);
?>
