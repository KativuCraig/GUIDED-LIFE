<?php
// Database connection parameters
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

// SQL query to select all policies
$sql = "SELECT * FROM policy";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../css/Admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css">
</head>
<body>
    <header>
        <h1>Guarded life</h1>
    </header>

    <aside>
        <h2><span class="icon-home"></span> Admin Dashboard</h2>
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
            <h2>Policies</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Price</th>
                        <th>Policy Type</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["price"] . "</td>";
                            echo "<td>" . $row["Policy Type"] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>No policies found</td></tr>";
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
