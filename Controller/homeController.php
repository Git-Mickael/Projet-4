<?php 

require_once 'Model/ticket.php';
require_once 'View/view.php';

class HomeController{
	private $ticket;

	public function __construct(){
		$this->ticket = new Ticket();
	}

	public function home(){
		$tickets = $this->ticket->getTickets();
		$view = new AllView("home");
		$view->generate(array('tickets' => $tickets));
	}
}