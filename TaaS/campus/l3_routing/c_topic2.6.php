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
    <p><h5 class="text-warning">Testing Connectivity</h5>
    <br>
    Once we successfully configured OSPFv2 in our Lab instance and the full routing reachability is present, then we can test the connectivity between the testuser01 and testuser02 or even we can checke the reachability towards the internet.
    <b class="text-warning">Lab Tasks Cont...</b>: <br><br>
    Step 1: Click the <b class="text-info">Switch01</b> in the Lab instance. We'll be using ICMP Echo. <br>
    Step 2: Type <i><b>ping 20.150.15.1</b></i>, then press enter. This is the command to verify Switch02 reachability from NAT_ROuter Gi0/1 interface.<br>
    Step 3: Type <i><b>ping 20.150.15.2</b></i>, then press enter. This is the command to verify Switch02 reachability from Switch01.<br>
    Step 4: Type <i><b class="text-warning">end</b></i>, press enter.<br>
    Step 5: Type <i><b>write memory</b></i>, then <i><b>copy run start</b></i> then <i><b>enter</b></i> to save your configurations. Type <i><b>exit</b></i>, then click <i><b>Home</b></i>.
    Step 6: Click the <b class="text-info">testuser01</b> in the Lab instance. <br>
    Step 7: Type <i><b>ping 172.30.20.100</b></i>, then press enter. Verify reachability towards testuser02<br>
    Step 8: Type <i><b class="text-warning">end</b></i>, press enter.<br>
    Step 9: Type <i><b>write memory</b></i>, then <i><b>copy run start</b></i> then <i><b>enter</b></i> to save your configurations. Type <i><b>exit</b></i>, then click <i><b>Home</b></i>.
    </p>
</body>
</html>
