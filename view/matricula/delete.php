<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/tallermvcphp/routes.php');

require_once(CONTROLLER_PATH . 'matriculaController.php');
$object = new matriculaController();

$idMatricula = $_REQUEST['id'];
$object->delete($idMatricula);
