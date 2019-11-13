<?php
require_once 'Model/model.php';
class Admin extends Model{


    public function getAdmin($name, $password){
        $sql = 'SELECT LOGIN_ID as id, LOGIN_NAME as name, LOGIN_PASSWORD as password from login where LOGIN_NAME=? and LOGIN_PASSWORD=?';
        $login = $this->executerRequete($sql, array($name, $password));
        
        
        if ($login->rowCount() == 1){
            return $login->fetch();
            $adminVerify = password_verify($_POST['name'], $name);
            $passwordVerify = password_verify($_POST['password'], $password);
            if ($adminVerify and $passwordVerify) {
                $_SESSION['name'] = $name;
                $_SESSION['password'] = $password;
            }
            else
                throw new Exception("Mauvais identifiant ou mot de passe");
        }    
        else {
            throw new Exception("Erreur d'identifiant ou mot de passe");            
        }       
    }
    
    public function addTickets($title, $description){
        $sql = 'INSERT into tickets(TICKETS_DATE, TICKETS_TITLE, TICKETS_DESCRIPTION) values(NOW(), ?, ?)';
        $this->executerRequete($sql, array($title, $description));                
    }
    public function removeTickets($id){
        $sql = 'DELETE FROM tickets WHERE TICKETS_ID=?';
        $this->executerRequete($sql, array($id));
    }
    public function changeTickets($newTitle, $newDescription, $id){
        $sql = 'UPDATE tickets SET TICKETS_DATE = NOW(), TICKETS_TITLE = ?, TICKETS_DESCRIPTION = ? WHERE TICKETS_ID=?';
        $this->executerRequete($sql, array($newTitle, $newDescription, $id));
    }
    public function reportCommentsList(){
        $sql = 'SELECT COM_ID as id, COM_DATE as date, COM_AUTHOR as author, COM_TEXT as text from commentary where COM_REPORT=1';
        $reports = $this->executerRequete($sql); 
        return $reports;
    }
    public function removeComments($id){
        $sql = 'DELETE FROM commentary WHERE COM_ID=?';
        $this->executerRequete($sql, array($id));
    }
    public function cancelReport($cancel){
        $sql =  'UPDATE commentary SET COM_REPORT = 0 WHERE COM_ID =?';
        $this->executerRequete($sql, array($cancel));
    }
}