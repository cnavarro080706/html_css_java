<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- <link rel="stylesheet" href="../campus.css"> -->
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
    <p><h4 class="text-center">Campus/Peripheral Architecture</h4></p> <br>
    <p><h5 class="text-warning">Configuring Basic Network Routing Protocol using OSPFv2</h5> <br>
    OSPF basic configuration is very simple. Like with other routing protocols (RIP, EIGRP), you must first enable OSPF on a router using the <b class="text-warning">router ospf <i>PROCESS-ID</i></b> global configuration command. <br><br> 
    Next, you need to define which interfaces OSPF will run and what networks will be advertised using the <b class="text-warning">network <i>IP_ADDRESS WILDCARD_MASK AREA_ID</i></b> command from the OSPF configuration mode. <br><br>

    To enable OSPF in the interface, this is a sub-interface command wherein this will be configured onto the interface. use <i><b class="text-warning">IP OSPF NETWORK POINT-TO-POINT</b></i> command.
    The broadcast network type is the default network type for an OSPF-enabled Ethernet interface. <br> <br>
    <b class="text-info">Important Note</b>: The OSPF <i>PROCESS-ID</i> doesn’t have to be the same on all routers to establish a neighbor relationship, but the Area ID has to be the same on all neighboring routers for routers to become neighbors. 
    </p>
</body>
</html>