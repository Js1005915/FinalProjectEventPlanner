<?php 

require_once __DIR__ . '/controller/EventController.php';

$page = $_GET['page'] ?? 'main';

switch($page) {
    case 'main':
        showEvents();
        break;
    case 'info':
        
        break;
}


?>

