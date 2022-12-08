<?php
session_start();
session_unset();
session_destroy();

header("Location:/Nouveau dossier/material-dashboard-master/LOGENS.HTML");
exit();
?>

