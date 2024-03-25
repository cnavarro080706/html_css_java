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
    <p class="fs-6"><h5 class="text-warning">Configuring IP Fabric: Leaf Layer</h5><br>

    <b class="text-warning">LAB Tasks Cont...</b>: Configuring routing protocol - eBGP<br><br>
    Step 1: Type <i><b>neighbor 10.10.8.1 remote-as 64512</b></i>, then press enter. This is the eBGP neighbor Spine04.<br>
    Step 2: Type <i><b>neighbor 10.10.8.1 next-hop-self</b></i>, then press enter. <br>
    Step 3: Type <i><b>neighbor 10.10.8.1 send-community</b></i>, then press enter. <br>
    Step 4: Type <i><b>neighbor 10.10.8.1 rib-in pre-policy retain </b></i>, then press enter. <br>
    Step 5: Type <i><b>neighbor 10.10.9.1 remote-as 64513</b></i>, then press enter. This is the <b class="text-warning">iBGP neighbor</b> Leaf01.<br>
    Step 6: Type <i><b>neighbor 10.10.9.1 update-source Vlan4001</b></i>, then press enter. <br>
    Step 7: Type <i><b>neighbor 10.10.9.1 next-hop-self</b></i>, then press enter. <br>
    Step 8: Type <i><b>neighbor 10.10.9.1 send-community</b></i>, then press enter. <br>
    Step 9: Type <i><b>neighbor 10.10.9.1 rib-in pre-policy retain </b></i>, then press enter. <br>
    Step 10: Type <i><b>write memory</b></i>, then <i><b>copy run start</b></i> then <i><b>enter</b></i> to save your configurations. <br>
    Step 11: Type <i><b>end</b></i>, then <b class="text-warning">exit</b>, then click <i><b>Home</b></i>.

</body>
</html>
