<?php
    include("login_counter.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles\website.css">
    <link rel="stylesheet" href="styles\master.css">
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Network Automation</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"> -->
</head>
<body>
    <div class="container my-5">
        <div class="navbar">
            <header class="service-title"><h3>Network Infrastructure Inventory System<h3><h6>version 1.0</h6></header>
            <div class="header-right">
                <input class="search-bar" type="text" name="searchbox" placeholder="Search">
                <button class="request" type="button" onclick="showForm()">Create Request</button>
                <button class="button">Settings</button>
                <button class="button">Profile</button>
                <button class="button" onclick="if (confirm('Are you sure you want to log out?')) { window.location = 'logout.php' }">Logout</button>
            </div>
        </div>
    </div>
    <div id="requestForm" class="hidden">
        <h3 class="text-primary">Create New Request</h3>
        <form action="form.php" method="POST" onsubmit="return validateForm()">
            <label for="hostname">Hostname:</label>
            <input type="text" id="hostname" name="hostname" required>
            <label for="ipaddress">IP Address:</label>
            <input type="text" id="ipaddress" name="ipaddress" required>
            <label for="os">OS Type:</label>
            <select id="os" name="os" required>
                <option value="">Select OS Type</option>
                <option value="eos">EOS</option>
                <option value="ios">IOS</option>
                <option value="nxos">NX-OS</option>
            </select>
            <label for="devicetype">Device Type:</label>
            <select id="devicetype" name="devicetype">
                <option value="">Select Device Type</option>
                <option value="Layer 2 Switch">Layer 2 Switch</option>
                <option value="Layer 3 Switch">Layer 3 Switch</option>
                <option value="Router">Router</option>
            </select>
            <label for="ca">Component Architecture:</label>
            <select id="ca" name="ca" required>
                <option value="">Select CA Type</option>
                <option value="IP Fabric">IP Fabric</option>
                <option value="WAN">WAN</option>
                <option value="CORE">Core</option>
                <option value="Distribution">Distribution</option>
                <option value="Access">Access</option>
                <option value="Server Access">SAC</option>
            </select>
            <label for="model">Model:</label>
            <input type="text" id="model" name="model">
            <label for="vendor">Vendor:</label>
            <input type="text" id="vendor" name="vendor">
            <label for="deployment">Deployment</label>
            <input type="text" id="deployment" name="deployment">
            <button type="submit" value="submit"> Create entry </button>
            <button type="cancel" onclick="javascript:window.location='website.php';">Cancel</button>
        </form>
    </div>
    <div class = "devices">
        <h2>Device Inventory</h2>
    <?php
            $sql = "SELECT * FROM devices";
            $result = mysqli_query($conn2, $sql);
            if (mysqli_num_rows($result) > 0){
                echo "<div class='table-responsive'>";
                echo "<table class='table table-bordered table-hover'>";
                echo "<thead class='thead-dark'>";
                echo "<tr><th>ID</th><th>Hostname</th><th>IP Address</th><th>OS Type</th><th>Device Type</th><th>CA</th><th>Model</th><th>Vendor</th><th>Deployment</th></tr>";
                echo "</thead>";
                echo "<tbody>";
                while ($row = $result->fetch_assoc()) {
                    echo "
                    <tr>
                        <td>$row[ID]</td>
                        <td>$row[HOSTNAME]</td>
                        <td>$row[DEPLOYMENT]</td>
                        <td>$row[IPADDRESS]</td>
                        <td>$row[OS_TYPE]</td>
                        <td>$row[DEVICE_TYPE]</td>
                        <td>$row[CA]</td>
                        <td>$row[MODEL]</td>
                        <td>$row[VENDOR]</td>
                        <td>
                            <a class='edit' href=edit.php?id=$row[ID]>Edit</a>
                            <a class='delete' href=delete.php?id=$row[ID]>Delete</a>
                        </td>
                    </tr>
                   ";
                }
                echo "</tbody>";
                echo "</table>";
                echo "</div>";
            } else {
                echo "<p>No records found</p>";
            }
            // Free result set
            mysqli_free_result($result);
            
            // Close the database connection
            mysqli_close($conn2);
        ?>
  </div>
    <script>
        function showForm() {
            var form = document.getElementById("requestForm");
            form.classList.remove("hidden");
            // form.classList.add("show");
        }

        function validateForm() {
            var hostname = document.getElementById("hostname").value;
            var ipaddress = document.getElementById("ipaddress").value;
            var os = document.getElementById("os").value;
            var devicetype = document.getElementById("devicetype").value;
            var ca = document.getElementById("ca").value;
            var model = document.getElementById("model").value;
            var vendor = document.getElementById("vendor").value;
            var deployment = document.getElementById("deployment").value;

            if (hostname === "" || ipaddress === "" || os_type === ""|| device_type === "" || ca === "" || model === "" || vendor === ""|| deployment === "") {
                alert("Please fill out all fields");
                return false;
            }

            // Additional validation logic can be added here if needed

            return true;
        }
    </script>
</body>
</html>