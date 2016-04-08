<?php
# Start the session:
error_reporting(0);
session_start();
if(!isset($_SESSION['userID']) || $_SESSION['userID']=="")
{
    header('Location: login.blade.php');
}
header('Location: home');
