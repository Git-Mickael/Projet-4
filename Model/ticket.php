<?php 
require_once 'Model/model.php';

class Ticket extends Model {

	public function getTickets(){
	    $sql = 'SELECT TICKETS_ID as id, TICKETS_DATE as date, TICKETS_TITLE as title, TICKETS_DESCRIPTION as description from tickets order by TICKETS_ID desc';
	    $tickets = $this->executerRequete($sql);
	    return $tickets;
	}

	public function getTicket($idTicket){
		$sql = 'SELECT TICKETS_ID as id, TICKETS_DATE as date, TICKETS_TITLE as title, TICKETS_DESCRIPTION as description from tickets where TICKETS_ID=?';
		$ticket = $this->executerRequete($sql, array($idTicket));
		if ($ticket->rowCount() == 1)
			return $ticket->fetch();
		else
			throw new Exception("Aucun billet ne correspond à l'identifiant '$idTicket'");
	}
}
