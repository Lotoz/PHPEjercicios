<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    /**
     * 
     */
    match ($_REQUEST['selecciona']) {
        'A+' => $_SESSION['A']++,
        'A-' => $_SESSION['A']--,
        'B+' => $_SESSION['B']++,
        'B-' => $_SESSION['B']--
    };
}
