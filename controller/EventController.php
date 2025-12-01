<?php 

include __DIR__ . '/../models/eventsModel.php';


function showEvents() {
    $events = get_events();

    include __DIR__ . '/../views/eventslist.php';

}

function showEventPage() {
    
}


function showRegistration() {

}









?>