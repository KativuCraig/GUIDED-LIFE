<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "guidedlife";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to select all claims
$sql = "SELECT * FROM claim WHERE is_approved = 1"; // Only approved claims are shown
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Claims</title>
    <link rel="stylesheet" href="../css/Admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css">
</head>
<body>
    <header>
        <h1>Guarded life</h1>
    </header>

    <aside>
        <h2><span class="icon-home"></span> User Dashboard</h2>
        <ul>
        <li><a href="../Dashboard/user.php"><span class="icon-people"></span> Registered Clients</a></li>
            <li><a href="../Dashboard/policies.php"><span class="icon-docs"></span> Policies</a></li>
            <li><a href="../Dashboard/viewpayment.php"><span class="icon-credit-card"></span> Pending Payments</a></li>
            <li><a href="../Dashboard/viewclaims.php"><span class="icon-envelope"></span> Claims</a></li>
            <li><a href="../Dashboard/viewammendments.php"><span class="icon-book-open"></span> Amendments</a></li>
            <li><a href="#"><span class="icon-logout"> </span>Logout</a></li>
        
           
        </ul>

        <div class="nav__footer">
            <span class='copyright'> &copy;2024-2026.</span>
        </div>
    </aside>

    <div class="col-md-9">
        <div class="container my-5">
            <h2>Approved Claims</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Body</th>
                        <th>Client ID</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["id"] . "</td>";
                            echo "<td>" . $row["Name"] . "</td>";
                            echo "<td>" . $row["body"] . "</td>";
                            echo "<td>" . $row["clientid"] . "</td>";
                            echo "<td>" . $row["date"] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>No approved claims found</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
