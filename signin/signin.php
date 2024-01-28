<?php
include('connection.php');
session_start();
if (isset($_POST['submit'])) {
    $username = $_POST['user'];
    $password = $_POST['pass'];

    $sql = "SELECT users.*, kids.* FROM users
            INNER JOIN kids ON users.id = kids.user_id
            WHERE users.username = '$username' AND users.password = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    
    if($count == 1){
        $_SESSION['username'] = $username;
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['school'] = $row['school'];
        $_SESSION['age'] = $row['age'];
        $_SESSION['mother'] = $row['mother'];
        $_SESSION['father'] = $row['father'];
        $_SESSION['Hobbies'] = $row['Hobbies'];

        // New code to fetch progress values...
        $user_id = $_SESSION['user_id'];

        $sql = "SELECT sport, reading, hi_tech, music, science FROM hobbies WHERE user_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $user_id);
        $stmt->execute();

        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            $_SESSION['sportProgress'] = $row["sport"];
            $_SESSION['readingProgress'] = $row["reading"];
            $_SESSION['hiTechProgress'] = $row["hi_tech"];
            $_SESSION['musicProgress'] = $row["music"];
            $_SESSION['scienceProgress'] = $row["science"];
          }
        } else {
          echo "0 results";
        }
        $stmt->close();

        header("Location: home.php");
    }
    else{
        echo  '<script>
                    window.location.href = "index.php";
                    alert("Login failed. Invalid username or password!!")
                </script>';
    }     
}
?>