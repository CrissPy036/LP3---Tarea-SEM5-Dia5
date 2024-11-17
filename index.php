<?php

session_start();

if (isset($_SESSION["usuario"])) {
    header('location: /tallermvcphp/main.php');
} else {
    header('location: /tallermvcphp/view/usuario/login.php');
}
