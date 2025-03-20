<?php

//  $view = "dashboard";

//  include("template.php");


//  session_start();
//  $id = $_SESSION['sessionID'];
//  if($id == null){
//      header("location:index.php");
//  }

// Check if session is already started before starting a new session
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$view = "dashboard";
include("template.php");

// Check if session variable is set
if (!isset($_SESSION['sessionID']) || empty($_SESSION['sessionID'])) {
    header("Location: index.php");
    exit(); // Prevent further execution
}

$id = $_SESSION['sessionID'];
?>