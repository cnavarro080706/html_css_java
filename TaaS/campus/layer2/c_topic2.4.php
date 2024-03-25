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
    <p><h5 class="text-warning">Assigning VLANs to Ports</h5>
    <b class="text-warning">Task cont...</b><br>
    This is a sub-interface configurations: <br>
    The first command is the <i><b>switchport mode access command</b></i>. This command specifies that the interface is an access interface. <br>
    The second command is the <i><b>switchport access vlan NUMBER command</b></i>. This command assigns the interface to a VLAN. <br>
    <h6 class="text-warning">Lab Tasks:</h6>
    Step 1: Click the <i><b>Switch01</b></i> in the Lab instance. <br>
    Step 2: Type <i><b>enable</b></i> on the terminal, enter the password <i><b>test1234</b></i>. <br>
    Step 3: Type <i><b>configuration terminal</b></i> on the screen. <br>
    Step 4: Type <i><b>inteface GigabitEthernet1/0</b></i>, then press enter. <br>
    Step 5: Type <i><b>switchport mode access</b></i>, then press enter. <br>
    Step 6: Type <i><b>switchport access vlan 100</b></i>, then press enter, type <i><b>end</b></i> then press enter. <br>
    Step 7: Enter <i><b>show vlan</b></i> command to validate your configuration, under VLAN column 100, then Ports Column, you will see Gi1/0<br>
    Step 8: Type <i><b>write memory</b></i>, then <i><b>copy run start</b></i> then <i><b>enter</b></i> to save your configurations. Type <i><b>exit</b></i>, then click <i><b>Home</b></i>.
</body>
</html>