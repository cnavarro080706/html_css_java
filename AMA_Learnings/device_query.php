<?php
include("connection.php");

// Check if the user is logged in
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];

    // Additional query to select data from the devices table
    $devices_query = "SELECT * FROM devices WHERE username = ?";
    $devices_stmt = $conn->prepare($devices_query);
    $devices_stmt->bind_param("s", $username);
    $devices_stmt->execute();
    $devices_result = $devices_stmt->get_result();

    // Check if devices query was successful
    if (!$devices_result) {
        die('Devices query failed: ' . $conn->error);
    }

    // Display devices data in an HTML table if devices are found
    if ($devices_result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Hostname</th><th>IP Address</th><th>OS Type</th><th>CA</th><th>Status</th></tr>";
        while ($row = $devices_result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['ID'] . "</td>";
            echo "<td>" . $row['HOSTNAME'] . "</td>";
            echo "<td>" . $row['IPADDRESS'] . "</td>";
            echo "<td>" . $row['OS_TYPE'] . "</td>";
            echo "<td>" . $row['CA'] . "</td>";
            echo "<td>" . $row['Status'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No devices found";
    }

    // Close the statement and result set for the devices query
    $devices_stmt->close();
    $devices_result->close();

    // Close the database connection
    $conn->close();
} else {
    // Redirect to the login page if the user is not logged in
    header("Location: login.php");
    exit();
}
?>
