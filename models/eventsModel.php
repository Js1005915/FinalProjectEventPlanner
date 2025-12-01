<?php 
date_default_timezone_set('America/Chicago');
$date = date('d-m-y h:i A');

include __DIR__ . '/../models/db.php';

function get_events() {

    $pdo = getPDO();

    $stmt = $pdo->prepare("SELECT * FROM events");
    $stmt->execute();
    return $stmt->fetchAll();


}




?>