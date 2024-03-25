<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="../perimeter.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NRE Training As a Service</title>
    </head>
    <style>
        body {
        color: white;
        background: radial-gradient(circle at 24.1% 68.8%, rgb(50, 50, 50) 0%, rgb(0, 0, 0) 99.4%);
        margin: auto;
        padding-top: 10px;
        padding-left: 10px;
        }
    </style>
<body>
    <!-- <p><h6 class="text-primary">Topic 2</h6></p> -->
    <p><h4 class="text-center">Perimeter Network Architecture</h4></p>
    <p><h5 class="text-warning">Verifying The GRE Over IPSec Tunnel</h5>   
    To test and verify this, all that is required is to ping the other end and force the VPN IPSec tunnel to come up and start encrypting/decrypting our data: <br><br>
    Click either R1 or R2 in the Lab instance under ALL CONNECTIONS. <br><br>
    Step 1: Type <i><b>ping 192.168.0.238</b></i> then press enter. Validate result, you should see "<b class="text-info">!!!!</b>" for successful reachability.<br>
    Step 2: Type <i><b>show crypto session</b></i> then press enter. Validate the Session <b class="text-warning">Status: UP-ACTIVE</b>. <br>
    Step 3: Type <i><b>end</b></i> then press enter. <br>
    Step 4: Type <i><b>write memory</b></i>, then <i><b>copy run start</b></i> then <i><b>enter</b></i> to save your configurations. 
    Step 5: Type <i><b>exit</b></i>, then click <i><b>Logout</b></i>, then click <i><b>Close Lab Button</b></i>.
    </p>
</body>
</html>