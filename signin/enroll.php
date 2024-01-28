<?php
session_start();
include 'connection.php';

$userId = $_SESSION['user_id'];
$clubName = $_POST['clubName'];

$sql = "SELECT id FROM clubs WHERE name = '$clubName'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  $clubId = $result->fetch_assoc()['id'];
} else {
  echo "Club not found";
  exit;
}

$sql = "SELECT * FROM user_clubs WHERE user_id = '$userId' AND club_id = '$clubId'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  header('Location: delete.php');
  exit;
}

$sql = "INSERT INTO user_clubs (user_id, club_id) VALUES ('$userId', '$clubId')";

if ($conn->query($sql) === TRUE) {
  echo "You have been enrolled in the club";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>