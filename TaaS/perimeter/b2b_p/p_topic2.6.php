<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- <link rel="stylesheet" href="../perimeter.css"> -->
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
    <p><h5 class="text-warning">Configuring IPSec Encryption For GRE Tunnel (GRE Over IPSec)</h5>
    <b class="text-warning">Lab Tasks: Cont...</b> <br>
    Applying the IPSec encryption to the Tunnel interface: <br><br>
    Step 18: Type <i><b>interface Tunnel 0</b></i>, press enter. <br>
    Step 19: Type <i><b>tunnel protection ipsec profile protect-gre</b></i>, press enter. <br><br>

    At this point, your Point-to-Point Tunnel connection will be lost as R2 still doesn't have the IPSec encryption configurations. It is a <b class="text-warning">MUST</b> to apply the same configuration for the IPSec session to established properly. <br><br>
    
    Step 20: Type <i><b>end</b></i> then press enter. <br>
    Step 21: Type <i><b>write memory</b></i>, then <i><b>copy run start</b></i> then <i><b>enter</b></i> to save your configurations. Type <i><b>exit</b></i>, then click <i><b>Home</b></i>. <br><br>
    <h5 class="text-primary">Click <i><b class="text-light">Next</b></i> to continue.</h5>

</body>
</html>
