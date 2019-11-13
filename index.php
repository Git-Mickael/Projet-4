<?php
session_start();
require 'Controller/routeur.php';

$routeur = new Routeur();
$routeur->routerRequest();
