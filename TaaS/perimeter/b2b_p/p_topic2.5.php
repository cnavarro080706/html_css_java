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
    <b class="text-info">Create IPSec Transform (ISAKMP Phase 2 policy)</b> <br>
    Now we need to create the transform set named <b class="text-info">"nretaas"</b> used to protect our data <br><br>
    Step 13: Type <i><b>crypto ipsec transform-set nretaas esp-3des esp-md5-hmac</b></i>, press enter. <br>
    Step 14: Type <i><b>mode transport</b></i>, press enter. Type exit, press enter. Type exit, press enter.<br><br>
    Lastly, <b class="text-info">IPSec profile</b> to connect the previously defined ISAKMP and IPSec configuration together. We’ve named our IPSec profile protect-gre: <br><br>
    Step 15: Type <i><b>crypto ipsec profile protect-gre</b></i>, press enter. <br>
    Step 16: Type <i><b>set security-association lifetime seconds 86400</b></i>, press enter. <br>
    Step 17: Type <i><b>set transform-set nretaas</b></i>, press enter. Type exit, press enter. Type exit, press enter. <br><br>

    <h5 class="text-primary">Click <i><b class="text-light">Next</b></i> to continue.</h5>

</body>
</html>
