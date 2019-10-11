<?php

// If user doesnt login, the header directs him back to the login page
if (isset($_SESSION['Name'])) {
  $user['Name'] = $_SESSION['Name'];
} else {
    header('location: login.php');
    exit();
}

//import the DB link
include "link.php";
require "change.php";

//retrieving data from the intern table
$signUpQuery = "SELECT * FROM `interns` WHERE `intern_id` = '1'";
$data = mysqli_query($conn, $signUpQuery);

while ($row = mysqli_fetch_assoc($data)) {
  $internId = $row["intern_id"];
  $displayName = $row["slack_username"];
  $track = $row["track"];
  $stage = $row["Stage"];

  //Setting up the Search feature



 /* $stageQuery = "SELECT * FROM `stages`";
  $stages = mysqli_query($conn, $stageQuery);

  while ($rowST = mysqli_fetch_assoc($stages)) {
    if ($stage == $rowST["stage_name"]) {
      $ST = $stage;
    }
  }*/

}




















?>