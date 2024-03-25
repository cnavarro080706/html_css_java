<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- <link rel="stylesheet" href="dc.css"> -->
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
    <!-- <p><h6 class="text-primary">Topic 1</h6></p> -->
    <p><h4 class="text-center">Data Center Architecture</h4></p>
    <p class="fs-6"><h5 class="text-warning">Configuring IP Fabric: Leaf Layer</h5>
   <b class="text-danger">Important Note</b>: This L2 trunk and EtherChannel will be used for the <i><b class="text-warning">Interswitch</b></i> connection and <b class="text-info">iBGP peering</b> for the Leaf switches.<br><br>
   <b class="text-warning">LAB Tasks Cont...</b>: Configuring Leaf Switches L2 Links (Trunk and EtherChannel)<br><br>
   Step 1: Type <i><b>vlan 4001</b></i>, then press enter. This is a layer 2 VLAN for Arista EOS.<br>
   Step 2: Type <i><b>interface vlan 4001</b></i>, then press enter. This is a Layer 3 SVI for the Interswitch Connection<br>
   Step 3: Type <i><b>ip address 10.10.9.2/24</b></i>, then press enter.<br>
   Step 4: Type <i><b>no shutdown</b></i>, then press enter.<br>
   Step 5: Type <i><b>interface Ethernet5-6</b></i>, then press enter. This is an interface range command in Arista EOS.<br>
   Step 6: Type <i><b>switchport mode trunk</b></i>, then press enter.<br>
   Step 7: Type <i><b>switchport trunk allowed vlan 4001</b></i>, then press enter.<br>
   Step 8: Type <i><b>channel-group 100 mode active</b></i>, then press enter. This will create a Port-Channel interface 100 automatically.<br>
   Step 9: Type <i>no shutdown<i>, then type <b class="text-warning">exit</b> then press enter.<br>
   Step 10: Type <i><b>write memory</b></i>, then <i><b>copy run start</b></i> then <i><b>enter</b></i> to save your configurations. <br>
</body>
</html>