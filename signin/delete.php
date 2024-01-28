<?php
include 'connection.php';

$userId = "";
$clubId = "";

if (isset($_POST['delete'])) {
    $userId = $_POST['userId'];
    $clubId = $_POST['clubId'];

    $sql = "DELETE FROM user_clubs WHERE user_id = '$userId' AND club_id = '$clubId'";

    if ($conn->query($sql) === TRUE) {
        echo "You have been removed from the club";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


$result = $conn->query("SELECT user_id, club_id FROM user_clubs LIMIT 1");
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $userId = $row['user_id'];
    $clubId = $row['club_id'];
}

$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Club Removal</title>
    <link rel="stylesheet" type="text/css" href="delete.css">
</head>
<body>
    <h1>Remove from Club</h1>
    <form action="delete.php" method="POST">
        <input type="hidden" name="userId" value="<?php echo $userId; ?>">
        <input type="hidden" name="clubId" value="<?php echo $clubId; ?>">
        <button type="submit" name="delete">Remove</button>
    </form>
</body>
</html>
