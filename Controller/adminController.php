<?php

require_once 'Model/admin.php';
require_once 'View/view.php';

class AdminController{
    private $connect;
    
    public function __construct(){
        $this->connect = new Admin();
    }
    public function admin($name, $password){
        $admin = $this->connect->getAdmin($name, $password);
        $view = new AllView("admin");
        $view->generate(array('admin' => $admin));
    }
    
}