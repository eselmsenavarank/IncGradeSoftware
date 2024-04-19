<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
// Start the session
session_start();

// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inc_db";

// Create database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if profEmail is set in the session
if (!isset($_SESSION["profEmail"])) {
    // Redirect to login page or handle the error as needed
    header("Location: LoginPage.php?error=session");
    exit();
}

// Get values from POST request
$name = $_POST["f_name"];
$surname = $_POST["l_name"];
$id = $_POST["id"];
$email = $_POST["email"];
$semester = $_POST["semester"];
$class = $_POST["class"];
$dueDate = $_POST["dueDate"];
$ownedWork = $_POST["ownedWork"];
$profEmail = $_SESSION["profEmail"];

// Prepare statement to get professor's name
$stmt = $conn->prepare("SELECT p_name FROM users WHERE email=? LIMIT 1");
$stmt->bind_param("s", $profEmail);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $profName = $row["p_name"];

    // Prepare statement to insert data into studentsClassInfo
    $insertStmt = $conn->prepare("INSERT INTO studentsClassInfo (bmccID, f_name, l_name, email, semester, prof, INC_class, ownedWorked, suggestedDueDate) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $insertStmt->bind_param("sssssssss", $id, $name, $surname, $email, $semester, $profName, $class, $ownedWork, $dueDate);

    if ($insertStmt->execute()) {
        echo "New record inserted successfully";
    } else {
        // Handle insertion error
        header("Location: action-assign-student.php?error=insert");
    }
}   

$stmt->close();
$conn->close();
?>