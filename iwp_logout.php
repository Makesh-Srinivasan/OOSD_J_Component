<?php
    session_start();
    unset($_SESSION['sess_email']);
    unset($_SESSION['sess_phno']);
    unset($_SESSION['sess_city']);
    unset($_SESSION['sess_name']);
    unset($_SESSION['sess_state']);
    session_destroy();
    header("location:iwp_login.php");
?>