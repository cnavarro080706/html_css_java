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
    <!-- <p><h6 class="text-primary">Topic 2</h6></p> -->
    <p><h4 class="text-center">Campus/Peripheral Architecture</h4></p><br>
    <p><h5 class="text-warning">Configuring Basic Network Routing Protocol using OSPFv2</h5>
    <br>
    <b class="text-warning">Lab Tasks</b>: <br><br>
    Step 1: Click the <b class="text-info">Switch02</b> in the Lab instance. We'll start the OSPF configuration between Switch02 and NAT_Router <br>
    Step 2: Type <i><b>enable</b></i> on the terminal, enter the password <i><b>test1234</b></i>. This terminal environment is called, <b>privelege mode</b>. <br>
    Step 3: Type <i><b>configure terminal</b></i> on the screen. This terminal environment is called, <b>global configuration mode</b>. <br>
    Step 4: Type <i><b>router OSPF 1</b></i>, then press enter.<br>
    Step 5: Type <i><b>network 20.150.15.0 0.0.0.255 area 0</b></i>, then press enter.<br>
    Step 6: Type <i><b>network 172.30.0.0 0.0.255.255 area 0</b></i>, then press enter. Type <b class="text-warning">exit</b>, press enter.<br>
    Step 7: Type <i><b> interface GigabitEthernet0/0</b></i>, press enter. This is the interface facing NAT_Router<br>
    Step 8: Type <i><b> ip ospf network point-to-point</b></i>, press enter., Type <b class="text-warning">end</b>, press enter.<br>
    Step 9: Type <i><b>write memory</b></i>, then <i><b>copy run start</b></i> then <i><b>enter</b></i> to save your configurations. Type <i><b>exit</b></i>, then click <i><b>Home</b></i>.
    </p>
</body>
</html>
