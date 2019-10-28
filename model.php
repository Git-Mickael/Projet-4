<?php
function getTickets(){
    $bdd = getBdd();
    $tickets = $bdd->query('SELECT TICKETS_ID as id, TICKETS_DATE as date, TICKETS_TITLE as title, TICKETS_DESCRIPTION as description from tickets order by TICKETS_ID desc');
    return $tickets;
}

function getTicket($idTicket){
    $bdd = getBdd();
    $ticket = $bdd->prepare('SELECT TICKETS_ID as id, TICKETS_DATE as date, TICKETS_TITLE as title, TICKETS_DESCRIPTION as description from tickets where TICKETS_ID=?') ;
    $ticket->execute(array($idTicket));
    if ($ticket->rowCount() == 1)
        return $ticket->fetch();
    else
        throw new Exception("Aucun billet ne correspond à l'identifiant '$idTicket'");
}

function getComments($idTicket){
    $bdd = getBdd();
    $comments = $bdd->prepare('SELECT COM_ID as id, COM_DATE as date, COM_AUTHOR as author, COM_TEXT as text from commentary where ID_TICKET=?') ;
    $comments->execute(array($idTicket));
    return $comments;
}

function getBdd(){
    $bdd = new PDO('mysql:host=localhost;dbname=project_4;charset=utf8',
        'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    return $bdd;
}