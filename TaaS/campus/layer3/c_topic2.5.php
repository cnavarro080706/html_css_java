<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- <link rel="stylesheet" href="..campus.css"> -->
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
    <!-- <p><h6 class="text-primary">Topic 4</h6></p> -->
    <p><h4 class="text-center">Campus/Peripheral Architecture</h4></p>
    <p><h5 class="text-warning">Converting Layer 2 interface to a Layer 3 interface (<b class="text-info">Routed Port</b>)</h5>
    By default, switches have layer 2 interfaces as shown in the previous topic. Converting layer 2 interface into layer 3 interface we needed an additional sub-interface command <i><b class="text-warning">no switchport</b></i>, this will allow the physical ports to attain Layer 3 routing functionality. <br><br>
  
    <h6 class="text-warning">Lab Tasks Cont..:</h6>
    Step 1: Click the <i><b>Switch02</b></i> in the Lab instance. <br>
    Step 2: Type <i><b>enable</b></i> on the terminal, enter the password <i><b>test1234</b></i>. <br>
    Step 3: Type <i><b>configuration terminal</b></i> on the screen. <br>
    Step 4: Type <i><b>inteface GigabitEthernet0/0</b></i>, then press enter. <br>
    Step 5: Type <i><b>no switchport</b></i>, then press enter. <br>
    Step 6: Type <i><b>ip address 20.150.15.2 255.255.255.0 </b></i>, then press enter. <br>
    Step 7: Type <i><b>no shutodwn</b></i>, then press enter, type <i><b>end</b></i> then press enter. <br>
    Step 8: Enter <i><b>show ip interface brief</b></i> command to validate your configuration.<br>
    Step 9: Type <i><b>write memory</b></i>, then <i><b>copy run start</b></i> then <i><b>enter</b></i> to save your configurations. Type <i><b>exit</b></i>, then click <i><b>Home</b></i>.
</body>
</html>