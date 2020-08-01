<?php
session_start();
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = '';
$dbName = "getLitdb";
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
if (isset($_POST['submit'])) {
    $email = '';
    if(isset($_POST['email']) && !empty($_POST['email'])){
        $email = $_POST['email'];
    }
    $conn->query("SELECT * users WHERE email = '$email'");
    if($conn->affected_rows > 0){
        $_SESSION['error'] = "This email has already subscribed";
        header('Location: index.php');
        exit();
    } else {
    $conn->query("INSERT INTO users(email) VALUES('$email')");
    if($conn->affected_rows > 0){
        $_SESSION['status'] = "Your subscription to our mailing list was successful";
        header('Location: index.php');
        exit();
    } else {
        $_SESSION['error'] = "Your subscription to our mailing list failed";
        header('Location: index.php');
    }
}
}
?>