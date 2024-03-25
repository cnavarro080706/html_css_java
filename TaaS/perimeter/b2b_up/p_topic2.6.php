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
    <p><h5 class="text-warning">Verifying the GRE VPN Tunnel</h5>   
    <b>Initilize the Lab instance</b>, Validate the right side screen with list of devices under ALL CONNECTIONS. <br><br>
    At this point, both tunnel endpoints are ready and can see each other. An icmp echo <i><b>ping tunnel_ip_address</b></i> from one end will confirm this. <br>
    <br>
    
    <b class="text-warning">Lab Tasks:</b> <i>Cont...</i> <br>
    Step 1: Click the R1 in the Lab instance under ALL CONNECTIONS. <br>
    Step 2: Type <i><b>enable</b></i> on the terminal, enter the password <i><b>test1234</b></i>.<br>
    Step 3: Type <i><b>ping 172.19.10.2</b></i>, Type <i><b>end</b></i> then press enter. Validate results. Type <i><b>exit</b></i>, then click <i><b>Home</b></i>.<br>
    Step 4: Click the R2 in the Lab instance under ALL CONNECTIONS. <br>
    Step 5: Type <i><b>enable</b></i> on the terminal, enter the password <i><b>test1234</b></i>.<br>
    Step 6: Type <i><b>ping 172.19.10.2</b></i>, Type <i><b>end</b></i> then press enter. If both icmp echo is successful, it means that the two tunnel endpoints can see each other. <br>
    Step 7: Type Type <i><b>exit</b></i>, then click <i><b>Home</b></i>.
    </p>
</body>
</html>