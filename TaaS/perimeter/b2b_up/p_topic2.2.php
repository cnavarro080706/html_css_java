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
    <p><h5 class="text-warning">Configuring a Point-to-Point WAN connectivity</h5>
    <b>Initilize the Lab instance</b>, Validate the right side screen with list of devices under ALL CONNECTIONS.<br>
     One of the critical requirement of establishing succesfully a GRE VPN Tunnel is the Wide Area Network (WAN) Point-to-Point Connectivity. In this Task, you are
     Required to follow the tasks sequence below in order to have a full WAN Point-to-Point connection.
    <br><br>

    <b class="text-warning">Lab Tasks:</b> <br><br>
    Step 1: Click the R1 in the Lab instance under ALL CONNECTIONS. <br>
    Step 2: Type <i><b>enable</b></i> on the terminal, enter the password <i><b>test1234</b></i>. This terminal environment is called, <b>privelege mode</b>. <br>
    Step 3: Type <i><b>configure terminal</b></i> on the screen. This terminal environment is called, <b>global configuration mode</b>. <br>
    Step 4: Type <i><b>interface GigabitEthernet0/0</b></i>, then press enter. <br>
    Step 5: Type <i><b>ip address 192.168.0.237 255.255.255.0</b></i>, press enter. <br> 
    Step 6: Type <i><b>no shutdown</b></i>, press enter. To validate, Type <i><b>show ip interface brief</b></i>.Type <i><b>end</b></i> then press enter. <br>
    Step 7: Type <i><b>write memory</b></i>, then <i><b>copy run start</b></i> then <i><b>enter</b></i> to save your configurations. Type <i><b>exit</b></i>, then click <i><b>Home</b></i>.
    </p>
</body>
</html>
