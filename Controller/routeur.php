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
                    $saveName = $_POST['name'];
                    $savePassword = $_POST['password'];
                    $admin = $this->getParameter($_POST, 'name');
                    $pass = $this->getParameter($_POST, 'password');
                    if(isset($admin) and isset($pass)){
                       $this->ctrlAdmin->verifyPass($admin, $pass);
                       $_SESSION['name'] = $saveName;
                       $_SESSION['password'] = $savePassword;
                    }
                    else
                        throw new Exception("Erreur de login");                    
                }
                else if ($_GET['action'] == 'test') {
                    $this->ctrlAdmin->admin();
                }
                else if ($_GET['action'] == 'createTicket') {
                    $title = $this->getParameter($_POST, 'title');
                    $description = $this->getParameter($_POST, 'description');
                    $this->ctrlAdmin->createTickets($title, $description);
                }
                else if ($_GET['action'] == 'deleteTicket') {
                    $idTicket = intval($this->getParameter($_GET, 'id'));
                    $this->ctrlAdmin->deleteTickets($idTicket);
                }
                else if ($_GET['action'] == 'report') {
                    $report = intval($this->getParameter($_GET, 'id'));
                    $this->ctrlTicket->report($report);
                }
                else if ($_GET['action'] == 'cancel') {
                    $cancel = intval($this->getParameter($_GET, 'id'));
                    $this->ctrlAdmin->cancel($cancel);
                }
                else if ($_GET['action'] == 'deleteComment') {
                    $idComment = intval($this->getParameter($_GET, 'id'));
                    $this->ctrlAdmin->deleteComments($idComment);
                }
                else if ($_GET['action'] == 'modify') {
                    $idTicket = intval($this->getParameter($_GET, 'id'));
                    $newTitle = $this->getParameter($_POST, 'newTitle');
                    $newDescription = $this->getParameter($_POST, 'newDescription');
                    $this->ctrlAdmin->modifyTickets($newTitle, $newDescription, $idTicket);
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
            throw new Exception ("Param�tre '$name' absent.");
    }
}
