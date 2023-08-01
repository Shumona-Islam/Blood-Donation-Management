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

$sql = "SELECT * FROM donor_referral";
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

                    <th>Refer Id </th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Contact Number</th>

                </tr>
            </thead>

            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                      echo '<tr>';
                      echo '<td>'.$row['refer_id'].'</td>';
                      echo '<td>'.$row['name'].'</td>';
                      echo '<td>'.$row['address'].'</td>';
                      echo '<td>'.$row['contact_number'].'</td>';
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