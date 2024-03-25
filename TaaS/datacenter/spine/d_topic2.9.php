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
    <p class="fs-6"><h5 class="text-warning">Configuring IP Fabric: Spine Layer</h5><br>
   <b class="text-warning">LAB Tasks Cont...</b>: Configuring routing protocol - eBGP<br><br>

   Step 8: Type <i><b>neighbor 172.16.4.1 remote-as 65000</b></i>. This is the eBGP neighbor DCC02 then press enter. <br>
   Step 9: Type <i><b>neighbor 172.16.4.1 next-hop-self</b></i>. then press enter. <br>
   Step 10: Type <i><b>neighbor 172.16.4.1 send-community</b></i>. then press enter. <br>
   Step 11: Type <i><b>neighbor 172.16.4.1 rib-in pre-policy retain </b></i>. then press enter. <br>
   Step 12: Type <i><b>write memory</b></i>, then <i><b>copy run start</b></i> then <i><b>enter</b></i> to save your configurations. <br>
   Step 13: Type <i><b>exit</b></i>, then click <i><b>Home</b></i>.
</body>
</html>