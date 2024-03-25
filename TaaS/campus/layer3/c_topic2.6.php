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
    <p><h5 class="text-warning">Test Connectivity</h5>
    This task if mainly for testing the connectivity of the users <i><b class="text-warning">testuser01</b></i> and 
    
    <i><b class="text-warning">testuser02</b></i> in our topology. <br><br>

    Testing validations thru ICMP echo or PING command:<br><br>

    <i><b class="text-info"> ping GATEWAY_ADDRESS </b></i>, then press Enter. <br><br>

    <h6 class="text-warning">Lab Tasks:</h6>
    Step 1: Click the <i><b>testuser01</b></i> in the Lab instance.<br>
    Step 2: Type <i><b>ping 172.30.10.1 </b></i>, this is the next-hop ip address of the Gateway for the VLAN 100. <br>
    Step 3: You can validate the ICMP Echo replies if successful. Enter <b class="text-info">quit</b> then press enter. <br>
    Step 4: Click the <i><b>testuser02</b></i> in the Lab instance.<br>
    Step 5: Type <i><b>ping 172.30.20.1 </b></i>, this is the next-hop ip address of the Gateway for the VLAN 100. <br>
    Step 6: You can validate the ICMP Echo replies if successful. Enter <b class="text-info">quit</b> then press enter. <br>

</body>
</html>