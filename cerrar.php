<?php
    session_start();
    session_unset();
    session_destroy();
    unset($_SESSION);
    if (ini_get("session.use.cookies")){$params=session_get_cookie_params();
        setcookie(session_name(),'',time() - 42000, $params["path"],
        $params["domain"], $params["secure"],$params["httponly"]);}
    echo "<script> window.location.href='index.php';</script>";
    exit;
?>