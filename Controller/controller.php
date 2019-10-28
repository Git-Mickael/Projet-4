<?php 
require 'Model/model.php';

function home(){
    $tickets = getTickets();
    require 'View/homeView.php';
}

function ticket($idTicket){
    $ticket = getTicket($idTicket);
    $comments = getComments($idTicket);
    require 'View/ticketView.php';
}

function error($msgError){
    require 'View/errorView.php';
}