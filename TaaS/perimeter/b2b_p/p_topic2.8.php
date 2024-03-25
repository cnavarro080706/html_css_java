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
    <p>
        R2(config)# crypto ipsec profile protect-gre <br>
        R2(ipsec-profile)# set security-association lifetime seconds 86400 <br>
        R2(ipsec-profile)# set transform-set nretaas <br>

        R2(config)# interface Tunnel 0 <br>
        R2(config-if)# tunnel protection ipsec profile protect-gre <br>
    </p>
    Type <i><b>end</b></i> then press enter. <br>
    Type <i><b>write memory</b></i>, then <i><b>copy run start</b></i> then <i><b>enter</b></i> to save your configurations. Type <i><b>exit</b></i>, then click <i><b>Home</b></i>. <br><br>
    <h5 class="text-primary">Click <i><b class="text-light">Next</b></i> to continue.</h5>

</body>
</html>