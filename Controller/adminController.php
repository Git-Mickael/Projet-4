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
    public function admin($name, $password){
        $tickets = $this->adminTicket->getTickets();
        $admin = $this->connect->getAdmin($name, $password);
        $view = new AllView("admin");
        $view->generate(array('admin' => $admin, 'tickets' => $tickets));
    }
    public function createTickets($title, $description){
        $this->connect->addTickets($title, $description);     
    }
    public function deleteTickets($id){
        $this->connect->removeTickets($id);
    }
}