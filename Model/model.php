<?php

abstract class Model{

    private $bdd;

    protected function executerRequete($sql, $params = null){
        if ($params == null) {
            $resultat = $this->getBdd()->query($sql);
        }
        else{
            $resultat = $this->getBdd()->prepare($sql);
            $resultat->execute($params);
        }
        return $resultat;
    }

    private function getBdd(){
        if ($this->bdd == null) {
                $this->bdd = new PDO('mysql:host=localhost;dbname=project_4;charset=utf8',
        'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
		
        return $this->bdd;
    }
}