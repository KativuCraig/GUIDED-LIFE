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

// SQL query to select all users
$sql = "SELECT * FROM users";
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
                    <h2>Users</h2>
                    <form method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="mb-3">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search by Reg Number" name="search">
                            <button class="btn btn-outline-secondary" type="submit">Search</button>
                        </div>
                    </form>
                    <a href="edit2.php" class="btn btn-primary" role="button">ADD</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Surname</th>
                                <th>Email Address</th>
                                <th>RegNum</th>
                                <th>Role</th>
                                <th>Token</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $severname ="localhost";
                            $username = "root";
                            $password = ""; 
                            $database ="canteen";
                            $connection= new mysqli($severname,$username,$password,$database);
                            if ($connection->connect_error){
                                die("Connection failed: ".$connection->connect_error);
                            }
                            $sql = "SELECT * FROM users";
                            if (isset($_GET['search']) && !empty($_GET['search'])) {
                              $search = $_GET['search'];
                              $sql .= " WHERE RegNum LIKE '%$search%'";
                          }
                            $result= $connection->query($sql);

                            if(!$result){
                                die("invalid query:".$connection->error);
                            }
                            while($row = $result->fetch_assoc()){
                                echo"
                                <tr>
                                <td>$row[Name]</td>
                                <td>$row[Surname]</td>
                                <td>$row[Emailaddress]</td>
                                <td>$row[RegNum]</td>
                                <td>$row[Role]</td>
                                <td>$row[Token]</td>
                                <td>
                                    <a href='edit.php?RegNum=$row[RegNum]' class='btn btn-primary btn-sm'>Edit</a>
                                    <a href='delete.php?RegNum=$row[RegNum]' class='btn btn-danger btn-sm'>Delete</a>
                                </td>
                            </tr>
                                ";
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
