<?php

require_once 'Model/admin.php';
require_once 'View/view.php';
require_once 'Model/ticket.php';

class AdminController{
    private $connect;
    
    public function __construct(){
        $this->connect = new Admin();
        $this->adminTicket = new Ticket();
    }
    public function verifyPass($name, $password){
        $this->connect->getAdmin($name, $password);
        header('Location: index.php?action=test');
    }
    public function admin(){
        $tickets = $this->adminTicket->getTickets();
        $reports = $this->connect->reportCommentsList();
        $view = new AllView("admin");
        $view->generate(array('tickets' => $tickets, 'reports' => $reports));
    }
    public function createTickets($title, $description){
        $this->connect->addTickets($title, $description);
        if (isset($_SESSION['id']) AND isset($_SESSION['pseudo'])){
            header('Location: index.php?action=test');
        }
        else {
            header('Location: index.php');
        }
    }
    public function deleteTickets($id){
        $this->connect->removeTickets($id);
        header('Location: index.php?action=test');
    }
    public function modifyTickets($newTitle, $newDescription, $id){
        $this->connect->changeTickets($newTitle, $newDescription, $id);
    }
    public function deleteComments($id){
        $this->connect->removeComments($id);
    }
    public function cancel($cancel){
        $this->comments->reportComments($cancel);
    }
}