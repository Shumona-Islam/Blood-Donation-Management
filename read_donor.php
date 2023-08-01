
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blood_donation_communication_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM donor";
$result = $conn->query($sql);

$conn->close();
?>


<html>
<head>
<title>Page Title</title>
</head>
<body>
    <table border=1>
            <thead>
                <tr>

                    <th>donor_id</th>
                    <th>Name</th>
                    <th>Blood Group</th>
                    <th>Age</th>
                    <th>Last Donated</th>
                    <th>Address</th>
                    <th>Contact Number</th>
                    <th>Acceptor Id</th>
                    <th>Refer Id</th>
                </tr>
            </thead>

            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                      echo '<tr>';
                      echo '<td>'.$row['donor_id'].'</td>';
                      echo '<td>'.$row['name'].'</td>';
                      echo '<td>'.$row['blood_group'].'</td>';
                      echo '<td>'.$row['age'].'</td>';
                      echo '<td>'.$row['last_donated'].'</td>';
                      echo '<td>'.$row['address'].'</td>';
                      echo '<td>'.$row['contact_number'].'</td>';
                      echo '<td>'.$row['acceptor_id'].'</td>';
                      echo '<td>'.$row['refer_id'].'</td>';
                      echo '</tr>';
                    }
                       
                  } else {
                    echo "0 results";
                  }



                ?>
            </tbody>
    </table>


</body>
</html>