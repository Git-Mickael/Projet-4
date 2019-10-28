<?php

require 'Model.php';

try {
    if (isset($_GET['id'])) {
        $id = intval($_GET['id']);
        if ($id != 0) {
            $ticket = getTicket($id);
            $comments = getComments($id);
            require 'ticketView.php';
        }
        else
            throw new Exception("Identifiant de billet incorrect");
    }
    else
        throw new Exception("Aucun identifiant de billet");
}
catch (Exception $e) {
    $msgErreur = $e->getMessage();
    require 'errorView.php';
}