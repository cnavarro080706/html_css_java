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
    <p><h5 class="text-warning">Creating and Configuring a Tunnel Interface</h5>   
    <b>Initilize the Lab instance</b>, Validate the right side screen with list of devices under ALL CONNECTIONS. <br><br>
    GRE tunnel uses a <i><b class="text-warning">tunnel</b></i> interface, a logical interface configured on the router with an IP address where packets are encapsulated and decapsulated as they enter or exit the GRE tunnel.
    <br><br>
    
    <b class="text-warning">Lab Tasks:</b> <i>Cont...</i> <br>
    Step 1: Click the R1 in the Lab instance under ALL CONNECTIONS. <br>
    Step 2: Type <i><b>enable</b></i> on the terminal, enter the password <i><b>test1234</b></i>. <br>
    Step 3: Type <i><b>configure terminal</b></i> on the screen.<br>
    Step 4: Type <i><b>interface Tunnel0</b></i>, then press enter. <br>
    Step 5: Type <i><b>ip address 172.19.10.1 255.255.255.252</b></i>, press enter. <br> 
    Step 6: Type <i><b>ip mtu 1400</b></i>, press enter. Type <i><b>ip tcp adjust-mss 1360</b></i>, press enter. <br>
    Step 7: Type <i><b>tunnel source WAN_IP_ADDRESS</b></i>, press enter. <br>
    Step 8: Type <i><b>tunnel destination R2_WAN_IP_ADDRESS</b></i>, press enter. Type <i><b>end</b></i> then press enter. <br>
    Step 9: Type <i><b>write memory</b></i>, then <i><b>copy run start</b></i> then <i><b>enter</b></i> to save your configurations. Type <i><b>exit</b></i>, then click <i><b>Home</b></i>.
    </p>
</body>
</html>
