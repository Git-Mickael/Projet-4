<?php 

require_once 'Model/ticket.php';
require_once 'Model/comments.php';
require_once 'View/view.php';

class TicketController{
	private $ticket;
	private $comments;

	public function __construct(){
		$this->ticket = new Ticket();
		$this->comments = new Comments();
	}

	public function ticket($idTicket){
		$ticket = $this->ticket->getTicket($idTicket);
		$comments = $this->comments->getComments($idTicket);
		$view = new AllView("Ticket");
		$view->generate(array('ticket' => $ticket, 'comments' => $comments));
	}
}
