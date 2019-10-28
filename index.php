<?php
require 'model.php';


try {
    $tickets = getTickets();
    require 'homeView.php';
} 
catch (Exception $e) {
    $msgErreur = $e->getMessage();
    require 'errorView.php';
}




