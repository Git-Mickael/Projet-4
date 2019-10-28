<?php 
require_once 'Model/model.php';

class Comments extends Model{

	public function getComments($idTicket){
		$sql = 'SELECT COM_ID as id, COM_DATE as date, COM_AUTHOR as author, COM_TEXT as text from commentary where ID_TICKET=?';
		$comments = $this->executerRequete($sql, array($idTicket));
		return $comments;
	}
}