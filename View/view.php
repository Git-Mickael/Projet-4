<?php

class AllView{
    private $file;

    private $title;

    public function __construct($action){
        $this->file = "View/" . $action . "View.php";
    }

    public function generate($donnees){
        $content = $this->generateFile($this->file, $donnees);
        $view = $this->generateFile('View/gabarit.php', array('title' => $this->title, 'content' => $content));
        echo $view;
    }

    private function generateFile($file, $donnees){
        if (file_exists($file)) {
            extract($donnees);
            ob_start();
            require $file;
            return ob_get_clean();
        }
        else{
            throw new Exception("Fichier '$file' introuvable");
        }
    }
}