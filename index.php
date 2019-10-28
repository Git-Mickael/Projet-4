<?php

require 'Controller/controller.php';

try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'ticket') {
            if (isset($_GET['id'])) {
                $idTicket = intval($_GET['id']);
                if ($idTicket != 0)
                    ticket($idTicket);
                else
                    throw new Exception("Identifiant de billet non valide");
                }
            else
                throw new Exception("Identifiant de billet non défini");
            }
        else
            throw new Exception("Action non valide");
            }
    else {
        home();
    }
}
catch (Exception $e) {
    error($e->getMessage());
}
