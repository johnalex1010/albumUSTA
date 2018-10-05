<?php
ob_start();
session_start();
unset ($_SESSION['nombres']);
unset ($_SESSION['apellidos']);
unset ($_SESSION['email']);
unset ($_SESSION['documento']);
unset ($_SESSION['password']);
unset ($_SESSION['habeas']);
unset ($SESSION['username']);
unset ($SESSION['loggedin']);
unset ($_SESSION['incorrect']);
unset ($_SESSION['laminita']);
session_destroy();

header('Location: ../../');

?>