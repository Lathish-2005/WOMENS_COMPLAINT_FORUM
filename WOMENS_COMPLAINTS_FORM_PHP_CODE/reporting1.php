<?php
// Database connection
$DB_HOST = '127.0.0.1'; // Change if using a remote server
$DB_USER = 'root'; // Your database username
$DB_PASS = ''; // Your database password
$DB_NAME = 'womens_complaints'; // Your database name

$conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME, 3307);
if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $time = $_POST['time'];
    $place = $_POST['place'];
    $phone_no = $_POST['phone_no'];
    $emergency = $_POST['emergency'];
    
    $sql = "INSERT INTO reports (name, time, place, phone_no, emergency) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $name, $time, $place, $phone_no, $emergency);
    
    if ($stmt->execute()) {
        echo '<script>alert("Report Submitted Successfully");</script>';
    } else {
        echo '<script>alert("Error Submitting Report");</script>';
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alice&display=swap" rel="stylesheet">
    <title>Reporting Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="assets/Main-Logo_noBG.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <nav>
        <div class="navbar">
            <div class="logo">
                </a>
            </div>
            <ul class="menu">
                <li><a href="homepage.php">Home</a></li>
                <li><a href="view-page.php">View</a></li>
            </ul>
        </div>
    </nav>

    <section id="Home">
        <div class="container" id="reporting-container">
            <h1>REPORT</h1>
            <form method="POST">
                <div class="form-group">
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="text" name="time" placeholder="Time" required>
                    <input type="text" name="place" placeholder="Place" required>
                    <input type="text" name="phone_no" placeholder="Phone_no" required>
                </div>
                <div class="form-group">
                    <select name="emergency" required>
                        <option value="" selected disabled>Select Emergency</option>
                        <option value="Hospital">Hospital</option>
                        <option value="Police Station">Police Station</option>
                    </select>
                </div>
                <button class="submit-button" type="submit">Submit</button>
                <button class="cancel-button" type="reset" href="reporting1.php">Cancel</button>
                <button class="verification-button">Verify</button>
            </form>
        </div>
    </section>
</body>
</html>
