<?php 
    require_once 'Controller/homeController.php';
    require_once 'Controller/ticketController.php';
    require_once 'Controller/adminController.php';
    require_once 'View/view.php';

class Routeur{
    private $ctrlHome;
    private $ctrlTicket;
    private $ctrlAdmin;

    public function __construct(){
        $this->ctrlHome = new HomeController();
        $this->ctrlTicket = new TicketController();
        $this->ctrlAdmin = new AdminController();
    }

    public function routerRequest(){
        try {
            if (isset($_GET['action'])) {
                if ($_GET['action'] == 'ticket') {
                    $idTicket = intval($this->getParameter($_GET, 'id'));
                    if ($idTicket != 0)
                        $this->ctrlTicket->ticket($idTicket);
                    else
                        throw new Exception("Identifiant de billet non valide");                                 
                }
                else if ($_GET['action'] == 'comment') {
                    $author = $this->getParameter($_POST, 'author');
                    $contents = $this->getParameter($_POST, 'contents');
                    $idTicket = $this->getParameter($_POST, 'id');
                    $this->ctrlTicket->commentary($author, $contents, $idTicket);
                }
                else if ($_GET['action'] == 'admin'){
                    $n = $this->getParameter($_POST, 'name');
                    $p = $this->getParameter($_POST, 'password');
                    if(isset($n) and isset($p)){
                       $this->ctrlAdmin->admin($n, $p);
                    }
                    else
                        throw new Exception("Identifiant de billet non valide");                    
                }
                else
                    throw new Exception("Action non valide");
                }
            else {
                $this->ctrlHome->home();
            }
        }
        catch (Exception $e) {
            $this->error($e->getMessage());
        }
    }

    private function error($msgError){
        $view = new AllView("Error");
        $view->generate(array('msgError' => $msgError));
    }

    private function getParameter($table, $name) {
        if (isset($table[$name])){
            return $table[$name];
        }
        else
            throw new Exception ("Paramètre '$name' absent.");
    }
}
