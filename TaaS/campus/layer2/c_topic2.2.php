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
    <p><h4 class="text-center">Campus/Peripheral Architecture</h4></p>
    <p><h5 class="text-warning">Configuring VLANs</h5>
    VLAN (Virtual LAN) is a group of end host (e.i. pc, server, printer) in a switched network that is logically segmented by function or application, without regard to the physical locations of the users.
    <b>Initilize the Lab instance</b>, we can verify that by default, all VLANs are in VLAN 1. VLAN 1-4094 are the VLAN ranges. <br>
    <br>
    <b>As you can see on the switch, all the interfaces or ports of the switch are in the same VLAN, VLAN 1.</b>
    <br><br>
    <b>Creating a VLAN:</b><br>
    Lab Tasks: <br>
    Step 1: Click the Switch01 in the Lab instance. <br>
    Step 2: Type <i><b>enable</b></i> on the terminal, enter the password <i><b>test1234</b></i>. This terminal environment is called, <b>privelege mode</b>. <br>
    Step 3: Type <i><b>configure terminal</b></i> on the screen. This terminal environment is called, <b>global configuration mode</b>. <br>
    Step 4: Create a vlan using the <i><b>VLAN#</b></i> in the screen. e.i. <i><b>VLAN 100</b></i>, <i><b>VLAN 200</b></i>, then press enter. Type <i><b>end</b></i> then press enter. <br>
    Step 5: Enter <i><b>show vlan</b></i> command to validate your configuration, under VLAN column - 100 and 200 are created. We can verify that by default, all ports are in VLAN 1. VLAN 1-4094 are the VLAN ranges<br>
    Step 6: Type <i><b>write memory</b></i>, then <i><b>copy run start</b></i> then <i><b>enter</b></i> to save your configurations. Type <i><b>exit</b></i>, then click <i><b>Home</b></i>.
    </p>
</body>
</html>
