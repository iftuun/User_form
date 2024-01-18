<?php
include ('db.php');

$EmployeeSql = "SELECT 
            e.first_name, 
            e.last_name, 
            e.email, 
            e.password, 
            e.salary, 
            e.phone, 
            e.director_name,
            a.address_country, 
            a.address_state, 
            a.address_street, 
            a.address_zip 
        FROM employees e JOIN e_address a ON e.address_id = a.address_id";
$result = $conn->query($EmployeeSql);

if($result->num_rows > 0){
    echo "<h2>Employee list</h2>";
    echo "<table border='1'>
        <tr>
            <th>Name</th>
            <th>Email Address</th>
            <th>Salary</th>
            <th>Phone</th>
            <th>Director Name</th>
            <th>Full Address</th>
        </tr>";

    while($row = $result->fetch_assoc()){
        $fullName = $row["first_name"]." ".$row["last_name"];
        $address = $row["address_street"].", ".$row["address_state"].", ".$row["address_country"].", ".$row["address_zip"];
        $emailAddress = isset($row['email']) ? $row['email'] : '';
        echo "<tr>
            <td>".$fullName."</td>
            <td>".$emailAddress."</td>
            <td>".$row["salary"]."</td>
            <td>".$row["phone"]."</td>
            <td>".$row["director_name"]."</td>
            <td>".$address."</td>
        </tr>";

    }
    echo "</table>";
}else{
    echo "0 results";
}

$adderssSql = "SELECT address_country, address_state, address_street, address_zip FROM e_address";
$result = $conn->query($adderssSql);

if ($result->num_rows > 0){
    echo "<h2>Address list</h2>";
    echo "<table border='1'>
        <tr>
            <th>Country</th>
            <th>State</th>
            <th>Street</th>
            <th>Zip</th>
        </tr>";

    while($row = $result->fetch_assoc()){
        // $address = $row["address_street"].", ".$row["address_state"].", ".$row["address_country"].", ".$row["address_zip"];
        echo "<tr>
            <td>".$row["address_country"]."</td>
            <td>".$row["address_state"]."</td>
            <td>".$row["address_street"]."</td>
            <td>".$row["address_zip"]."</td>   
        </tr>";

    }
}

$conn->close();
?>