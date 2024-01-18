<?php
<<<<<<< HEAD
include ('db.php');
=======
$servername="localhost";
$username="root";
$password="";
$dbname="company";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}
>>>>>>> 4e6cd55ebe764b9ac06f3db78d1141b8a520004f

$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$emailAddress = $_POST["emailAddress"];
$password = $_POST["password"];
$salary = $_POST["salary"];
$addressCountry = $_POST["addressCountry"];
// $addressState = $_POST["addressState"];
$addressState = isset($_POST['addressState']) ? $_POST['addressState'] : '';
$addressStreet = $_POST["addressStreet"];
$addressZip = $_POST["addressZip"];
$phone = $_POST["phone"];
$directorName = $_POST["directorName"];

<<<<<<< HEAD
// $sql = "INSERT INTO employees (first_name, last_name, email, password, salary, address_country, address_state, address_street, address_zip, phone, director_name) VALUES ('$firstName', '$lastName', '$emailAddress', '$password', '$salary', '$addressCountry', '$addressState', '$addressStreet', '$addressZip', '$phone', '$directorName')";

// if($conn->query($sql) === TRUE){
//     echo "New record created successfully";
// }else{
//     echo "Error: ".$sql."<br>".$conn->error;
// }

// $conn->close();

$sqlAddress="INSERT INTO e_address (address_country, address_state, address_street, address_zip) VALUES ('$addressCountry', '$addressState', '$addressStreet', '$addressZip')";

if ($conn->query($sqlAddress)===True){
    $addressId=$conn->insert_id;
    $sqlEmployee="INSERT INTO employees(first_name, last_name, email, password, salary, phone, director_name, address_id) VALUES ('$firstName', '$lastName', '$emailAddress', '$password', '$salary', '$phone', '$directorName', '$addressId')";
    if ($conn->query($sqlEmployee)===True){
        echo "New record created successfully";
    }else{
        echo "Error: ".$sqlEmployee."<br>".$conn->error;
    }
}else{
    echo "Error: ".$sqlAddress."<br>".$conn->error;
}

$conn->close();

=======
$sql = "INSERT INTO employees (first_name, last_name, email, password, salary, address_country, address_state, address_street, address_zip, phone, director_name) VALUES ('$firstName', '$lastName', '$emailAddress', '$password', '$salary', '$addressCountry', '$addressState', '$addressStreet', '$addressZip', '$phone', '$directorName')";

if($conn->query($sql) === TRUE){
    echo "New record created successfully";
}else{
    echo "Error: ".$sql."<br>".$conn->error;
}

$conn->close();
>>>>>>> 4e6cd55ebe764b9ac06f3db78d1141b8a520004f
?>