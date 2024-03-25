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
    <b>Initilize the Lab instance</b>, Validate the right side screen with list of devices under ALL CONNECTIONS.<br>
    In this Task, you are required to follow the tasks sequence below in order to have a clear understanding of IPSec Encryption.
    <b class="text-info">Configure ISAKMP (IKE)-(ISAKMP Phase 1)</b> IKE exists only to establish SAs (Security Association) for IPsec. Before it can do this, IKE must negotiate an SA (an ISAKMP SA) relationship with the peer.
    <br><br>
    <b class="text-warning">Lab Tasks:</b> <br>
    Step 1: Click the R1 in the Lab instance under ALL CONNECTIONS. <br>
    Step 2: Type <i><b>enable</b></i> on the terminal, enter the password <i><b>test1234</b></i>. This terminal environment is called, <b>privelege mode</b>. <br>
    Step 3: Type <i><b>configure terminal</b></i> on the screen. This terminal environment is called, <b>global configuration mode</b>. <br>
    Step 4: Type <i><b>crypto isakmp policy 1</b></i>, then press enter. <br>
    Step 5: Type <i><b>encr 3des</b></i>, press enter. <br>
    Step 6: Type <i><b>hash md5</b></i>, press enter. <br>
    Step 7: Type <i><b>authentication pre-share</b></i>, press enter. <br><br>

    <h5 class="text-primary">Click <i><b class="text-light">Next</b></i> to continue.</h5>
</body>
</html>
