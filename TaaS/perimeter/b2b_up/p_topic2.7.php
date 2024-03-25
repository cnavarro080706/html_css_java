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
    <p><h5 class="text-warning">Routing Networks through the GRE Tunnel</h5>   
    <b>Initilize the Lab instance</b>, Validate the right side screen with list of devices under ALL CONNECTIONS. <br><br>
    At this point, both tunnel endpoints are ready and can see each other. An icmp echo <i><b>ping tunnel_ip_address</b></i> from one end will confirm this. <br>
    Unfortunately, the B2B user and the Servers are still doesn't have reachability, to solve this we will be configuring a <i><b>static routing protocol</b></i>. 
    You can use other routing protocols such as <i><b class="text-warning">RIPv2</b></i>, <i><b class="text-warning">OSPF</b></i>, <i><b class="text-warning">EIGRP</b></i>, and <i><b class="text-warning">BGP</b></i>.
    <br><br>
    
    <b class="text-warning">Lab Tasks:</b> <i>Cont...</i> <br>
    Step 1: Click the R1 in the Lab instance under ALL CONNECTIONS. <br>
    Step 2: Type <i><b>enable</b></i> on the terminal, enter the password <i><b>test1234</b></i>. <br>
    Step 3: Type <i><b>configure terminal</b></i> on the screen.<br>
    Step 4: Type <i><b>ip route 20.20.20.0 255.255.255.0 172.19.10.2</b></i>, Type <i><b>end</b></i> then press enter. <br>
    Step 5: Type <i><b>write memory</b></i>, then <i><b>copy run start</b></i> then <i><b>enter</b></i> to save your configurations. Type <i><b>exit</b></i>, then click <i><b>Home</b></i>.
    </p>
</body>
</html>