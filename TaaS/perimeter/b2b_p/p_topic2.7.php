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
    Click the R2 in the Lab instance under ALL CONNECTIONS. Apply the same configurations on R2 <br><br>
    <p>
        R2(config)# crypto isakmp policy 1 <br>
        R2(config-isakmp)# encr 3des <br>
        R2(config-isakmp)# hash md5 <br>
        R2(config-isakmp)# authentication pre-share <br>
        R2(config-isakmp)# group 2  <br>
        R2(config-isakmp)# lifetime 86400 <br>
        
        R2(config)# crypto isakmp key P@$$w0rd2024 address 192.168.0.237 <br>
        R2(config)# crypto ipsec transform-set nretaas esp-3des esp-md5-hmac <br>
        R2(cfg-crypto-trans)# mode transport <br>
    </p>
    
     <b class="text-warning">Important Note</b>: Type <i><b>exit</b></i> whenever you will go back 1 level down on the configuration terminal.<br>

    <h5 class="text-primary">Click <i><b class="text-light">Next</b></i> to continue.</h5>

</body>
</html>
