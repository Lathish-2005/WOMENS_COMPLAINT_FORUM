<?php
include 'db_connect.php';  // Include database connection

$sql = "SELECT * FROM reports ORDER BY id ASC";  // Order by ID in ascending order
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Reports</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 50px auto;
            background-color: #fce4ec; /* Light Pink */
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        }

        h1 {
            color: #bd1616;
            font-size: 28px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }

        th {
            background-color: #f8bbd0;
            color: #880e4f;
        }

        tr:nth-child(even) {
            background-color: #fce4ec;
        }

        tr:hover {
            background-color: #f48fb1;
            color: white;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Submitted Reports</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Time</th>
                <th>Place</th>
                <th>Phone No</th>
                <th>Emergency</th>
                <th>Submitted At</th>
            </tr>

            <?php while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['name'] ?></td>
                <td><?= $row['time'] ?></td>
                <td><?= $row['place'] ?></td>
                <td><?= $row['phone_no'] ?></td>
                <td><?= $row['emergency'] ?></td>
                <td><?= $row['submitted_at'] ?></td>
            </tr>
            <?php endwhile; ?>
        </table>
    </div>

</body>
</html>

<?php $conn->close(); ?>
