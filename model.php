<?php
function getTickets(){
    $bdd = new PDO('mysql:host=localhost;dbname=project_4;charset=utf8',
        'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $tickets = $bdd->query('SELECT TICKETS_ID as id, TICKETS_DATE as date, TICKETS_TITLE as title, TICKETS_DESCRIPTION as description from tickets order by TICKETS_ID desc');
    return $tickets;
}

