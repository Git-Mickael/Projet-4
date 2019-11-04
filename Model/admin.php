<?php
require_once 'Model/model.php';
class Admin extends Model{


    public function getAdmin($name, $password){
        $sql = 'SELECT LOGIN_ID as id, LOGIN_NAME as name, LOGIN_PASSWORD as password from login where LOGIN_NAME=? and LOGIN_PASSWORD=?';
        $login = $this->executerRequete($sql, array($name, $password));
        if ($login->rowCount() == 1)
            return $login->fetch();
        else 
            throw new Exception("Mauvais identifiant ou mot de passe");       
    }
    
    public function addTickets($title, $description){
        $sql = 'INSERT into tickets(TICKETS_DATE, TICKETS_TITLE, TICKETS_DESCRIPTION) values(NOW(), ?, ?)';
        $this->executerRequete($sql, array($title, $description));                
    }
    public function removeTickets($id){
        $sql = 'DELETE FROM tickets WHERE TICKETS_ID=?';
        $this->executerRequete($sql, array($id));
    }
}