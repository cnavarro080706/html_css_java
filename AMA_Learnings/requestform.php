<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles\requestform.css">
    <link rel="stylesheet" href="styles\master.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Network Automation</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="requestform">
        <h2>Device Details</h2>
        <form action="#">
            <div class="inputBox">
                <input type="text" name="hostname" id="hostname">
                <span>Hostname</span>
                <input type="text" name="ipaddress" id="ipaddress" required>
                <span>IP Address</span>
            </div>
            <div class="dropdown">
                <label for="os">OS</label>
                    <select name="os" id="os" require_once>
                        <option class="dropdown" value="os"></option>
                        <option class="dropdown" value="eos">eos</option>
                        <option class="dropdown" value="nxos">nxos</option>
                        <option class="dropdown" value="ios">ios</option>
                    </select>
                <label for="device_type">Device Type</label>
                    <select name="device_type" id="device_type" require_once>
                        <option class="dropdown" value="device_type"></option>
                        <option class="dropdown" value="layer2">Layer 2</option>
                        <option class="dropdown" value="layer3">Layer 3</option>
                    </select>
            </div>  
            <div class="links">
                            <button class="submit" type="submit" value="submit"><span></span>Submit Request</button>
            </div>
        </form>
    </div>
</body>
</html>
