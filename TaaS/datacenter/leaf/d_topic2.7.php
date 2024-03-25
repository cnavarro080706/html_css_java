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
   <b class="text-danger">Important Note</b>: We will be using Arista Layer 3 switches for this Lab instance. <br><br>
   <b class="text-warning">LAB Tasks</b>: Configuring Leaf Switches L3 Links <br><br>
   Step 1: Click the Leaf02 in the Lab instance. <br>
   Step 2: Type <i><b>enable</b></i> on the terminal, enter the password <i><b>test1234</b></i>. This terminal environment is called, <b>privelege mode</b>. <br>
   Step 3: Type <i><b>configure terminal</b></i> on the screen. This terminal environment is called, <b>global configuration mode</b>. <br>
   Step 4: Type <i><b>ip routing</b></i>. This will <i><b class="text-warning">enable routing features</b></i> on the Layer 3 switch.<br>
   Step 5: Type <i><b>interface Ethernet1</b></i>. then press enter. This is the interface facing Spine01<br>
   Step 6: Type <i><b>no switchport</b></i>. then press enter.<br>
   Step 7: Type <i><b>ip add 10.10.2.2/24</b></i>.then press enter.<br>
   Step 8: Type <i>no shutdown</i>, then type <b class="text-warning">exit</b> then press enter.<br>
   Step 9: Type <i><b>write memory</b></i>, then <i><b>copy run start</b></i> then <i><b>enter</b></i> to save your configurations.

</body>
</html>
