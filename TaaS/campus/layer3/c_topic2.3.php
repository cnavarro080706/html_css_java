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
    <!-- <p><h6 class="text-primary">Topic 3</h6></p> -->
    <p><h4 class="text-center">Campus/Peripheral Architecture</h4></p>
    <p><h5 class="text-warning">Configuring Layer 3 Switch Virtual Interface (SVI)</h5> <br><br>
    <b class="text-warning">Lab Tasks:</b> <br>

    Lab Tasks: <br>
    Step 1: Click the Switch02 in the Lab instance. <br>
    Step 2: Type <i><b>enable</b></i> on the terminal, enter the password <i><b>test1234</b></i>. <br>
    Step 3: Type <i><b>configure terminal</b></i> on the screen. <br>
    Step 4: Type <i><b>interface vlan 100</b></i>, then press enter. <br>
    Step 5: Type <i><b>ip address 172.30.20.1 255.255.255.0</b></i>, then press enter.<br>
    Step 6: Type <i><b>no shutdown</b></i>, then press enter. Type <i><b>end</b></i> then press enter. <br>
    Step 7: Enter <i><b>show ip interface brief</b></i>, you can verify that VLAN 200 under <b class="text-info">Status/Protol</b> <i class="text-warning">up/up</i> <br>
    Step 8: Type <i><b>write memory</b></i>, then <i><b>copy run start</b></i> then <i><b>enter</b></i> to save your configurations. Type <i><b>exit</b></i>, then click <i><b>Home</b></i>.
    </p>
</body>
</html>