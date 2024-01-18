<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employee Account Form</Form></title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="mail&pass_validation.js"></script>
</head>
<body>
    <h2>Employee Account Form</h2>
    <form id="employeeForm" action="wr_db_employee.php" method="post">
        <fieldset>
            <legend>Employee Details</legend>
            <p>
                <label for="firstName">First Name:</label>
                <input type="text" name="firstName" id="firstName" required>
            </p>
            <p>
                <label for="lastName">Last Name:</label>
                <input type="text" name="lastName" id="lastName" required>
            </p>
            <p>
                <label for="emailAddress">Email Address:</label>
                <input type="email" name="emailAddress" id="emailAddress" required>
            </p>
            <p>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>
            </p>
            <p>
                <label for="salary">Salary:</label>
                <input type="number" name="salary" required>
            </p>

        </fieldset>

        <fieldset>
            <legend>Address</legend>
                <p>
                    <label for="addressCountry">Country:</label>
                    <input type="text" name="addressCountry">
                </p>
                <p>
                    <label for="addressState">State:</label>
                    <input type="text" name="addressState">
                </p>
                <p>
                    <label for="addressStreet">Street:</label>
                    <input type="text" name="addressStreet">
                </p>
                <p>
                    <label for="addressZip">Zip:</label>
                    <input type="text" name="addressZip">
                </p>

        </fieldset>

        <fieldset>

            <legend>Contact Information</legend>
                <p>
                    <label for="phone">Phone No:</label>
                    <input type="tel" name="phone" id="phone">
                </p>

        </fieldset>


        <fieldset>
            <legend>Other Information</legend>
                <label for="directorName">Director Name:</label>
                <input type="text" name="directorName">
        </fieldset>
            <p>
                <input type="submit" value="Submit">
            </p>
    </form>
    <p><a href="rd_db_employee.php">View Employee List</a></p>
</body>
</html>