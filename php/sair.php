<?php
session_destroy();
unset($_SESSION['email']);
unset($_SESSION['senha']);
header('Location: ../index.php');
