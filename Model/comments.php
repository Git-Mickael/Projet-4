<?php 
require_once 'Model/model.php';

class Comments extends Model{

    public function getComments($idTicket){
        $sql = 'SELECT COM_ID as id, COM_DATE as date, COM_AUTHOR as author, COM_TEXT as text from commentary where ID_TICKET=?';
        $comments = $this->executerRequete($sql, array($idTicket));
        return $comments;
    }
    
    public function addComments($author, $contents, $idTicket) {
        $sql = 'INSERT into commentary(COM_DATE, COM_AUTHOR, COM_TEXT, ID_TICKET) values(NOW(), ?, ?, ?)';
        $this->executerRequete($sql, array($author, $contents, $idTicket));
    }      
}