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
    <p class="fs-6"><h5 class="text-warning">Configuring IP Fabric: Spine Layer</h5>
   <b class="text-danger">Important Note</b>: For this lab tasks - we will focus only on two SPINE Switches configurations (Spine01 and 02) the other Spines will be preconfigured for the learner to understand the basics of IP Fabric Spine Layer connectivity. We will be using Arista Layer 3 switches for this Lab instance. <br><br>
   <b class="text-warning">LAB Tasks</b>: Configuring Spine Switches L3 Links <br><br>
   Step 1: Click the Spine02 in the Lab instance. <br>
   Step 2: Type <i><b>interface Ethernet4</b></i>. then press enter. This is the interface facing DCC02<br>
   Step 3: Type <i><b>no switchport</b></i>. then press enter.<br>
   Step 4: Type <i><b>ip add 172.16.4.2/24</b></i>.then press enter.<br>
   Step 5: Type <i>no shutdown</i>, then type <b class="text-warning">exit</b> then press enter.<br>
   Step 6: Type <i><b>write memory</b></i>, then <i><b>copy run start</b></i> then <i><b>enter</b></i> to save your configurations.

</body>
</html>
