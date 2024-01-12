<?php
$servername="localhost";
$username="";
$password="";
$dbname="company";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}

$sql = "SELECT first_name, last_name, email, password, salary, address_country, address_state, address_street, address_zip, phone, director_name FROM employees";
$result = $conn->query($sql);

if($result->num_rows > 0){
    echo "<h2>Employee list</h2>";
    echo "<table border='1'>
        <tr>
            <th>Name</th>
            <th>Email Address</th>
            <th>Salary</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Director Name</th>
        </tr>";

    while($row = $result->fetch_assoc()){
        $fullName = $row["first_name"]." ".$row["last_name"];
        $address = $row["address_street"].", ".$row["address_state"].", ".$row["address_country"].", ".$row["address_zip"];
        $emailAddress = isset($row['email']) ? $row['email'] : '';
        echo "<tr>
            <td>".$fullName."</td>
            <td>".$emailAddress."</td>
            <td>".$row["salary"]."</td>
            <td>".$address."</td>
            <td>".$row["phone"]."</td>
            <td>".$row["director_name"]."</td>
        </tr>";

    }
    echo "</table>";
}else{
    echo "0 results";
}

$conn->close();
?>