<?php 
	require_once 'Controller/homeController.php';
	require_once 'Controller/ticketController.php';
	require_once 'View/view.php';

class Routeur{
	private $ctrlHome;
	private $ctrlTicket;

	public function __construct(){
		$this->ctrlHome = new HomeController();
		$this->ctrlTicket = new TicketController();
	}

	public function routerRequest(){
		try {
		  	if (isset($_GET['action'])) {
		    	if ($_GET['action'] == 'ticket') {
		      		if (isset($_GET['id'])) {
		        		$idTicket = intval($_GET['id']);
		        		if ($idTicket != 0)
		          			$this->ctrlTicket->ticket($idTicket);
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
			    $this->ctrlHome->home();
			}
		}
		catch (Exception $e) {
		    $this->erreur($e->getMessage());
		}
	}
}
