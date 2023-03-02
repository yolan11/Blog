<?php
session_start();
$_SESSION['is-connected'] = false;

header('location: ../Pages/login.php');
