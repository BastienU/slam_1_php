<?php
    const title = "PHP started";
    $_version = phpversion();
    $_date = date("d/m/Y");
    $_footer_date = new dateTime; /* instance de classe */
    const style = "./css/style.css";
    $_lang = ["fr", "en", "it", true, 2023];
    $_navigateur = $_SERVER['HTTP_USER_AGENT'];/* Environnement Apache */
    $_addr_ip = $_SERVER['REMOTE_ADDR'];
    $_sign_server = $_SERVER['SERVER_SIGNATURE'];
?>