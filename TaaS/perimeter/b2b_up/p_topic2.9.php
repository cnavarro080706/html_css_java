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
    <p><h5 class="text-warning">Verifying the Host to Host connectivity</h5>   
    <b>Initilize the Lab instance</b>, Validate the right side screen with list of devices under ALL CONNECTIONS. <br>
    At this point, both tunnel endpoints are ready and can see each other. We are now ready to test and verify if B2B user can reach the Servers. <br>
    <li>10.10.10.100 --> Server LAN IP and 10.10.10.1 --> R1 LAN IP</li>
    <li>20.20.20.100 --> B2B User LAN IP and 20.20.20.1 --> R2 LAN IP</li>
    <b class="text-warning">Lab Tasks:</b> <i>Cont...</i> <br>
    Step 1: Click the R1 in the Lab instance under ALL CONNECTIONS. <br>
    Step 2: Type <i><b>enable</b></i> on the terminal, enter the password <i><b>test1234</b></i>.<br>
    Step 3: Type <i><b>ping 10.10.10.100 source 10.10.10.1</b></i>, Type <i><b>end</b></i> then press enter. Validate results. <br>
    Step 4: Type <i><b>ping 20.20.20.100 source 10.10.10.1</b></i>, Type <i><b>end</b></i> then press enter. Validate results. Type <i><b>exit</b></i>, then click <i><b>Home</b></i>.<br>
    Step 5: Click the R2 in the Lab instance under ALL CONNECTIONS. <br>
    Step 6: Type <i><b>enable</b></i> on the terminal, enter the password <i><b>test1234</b></i>.<br>
    Step 7:  Type <i><b>ping 20.20.20.100 source 20.20.20.1</b></i>, Type <i><b>end</b></i> then press enter. Validate results. <br>
    Step 8: Type <i><b>ping 10.10.10.100 source 20.20.20.1</b></i>, Type <i><b>end</b></i> then press enter. Validate results. Type <i><b>exit</b></i>, then click <i><b>Home</b></i>.<br>
    Step 9: Type Type <i><b>exit</b></i>, then click <i><b>Logout</b></i>, then click <i><b>Close Lab Button</b></i>.
    </p>
</body>
</html>