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
    <p class="fs-6"><h5 class="text-warning">Traditional Network Architecture?</h5><br>
    <i><b class="text-warning">Traditional 3-tier network architecture</b></i>consists of three layers: core, aggregation, and access.<br>
        <li><b class="text-warning">Core</b>: provides network transmission.</li>
        <li><b class="text-warning">Aggregation</b>: pcombines access-layer traffic, providing multiple connections to the access layer.</li>
        <li><b class="text-warning">Access</b>: connects end node devices to aggregation layer devices.</li>
    <br>
    <b class="text-warning">1</b>. Traditional network architecture topology utilizes <i><b class="text-warning">STP protocol</b></i> and is designed for north to south traffic.
    <br>
    <b class="text-warning">2</b>. The main issue with this design for the modern data center is that <i><b class="text-warning">intra-DC traffic</b></i> is the new norm. Due to <b class="text-info">server-to-server traffic</b>, three hops now quickly become four, five or more, adding significant latency per flow as well as increasing the risk of bottlenecks, buffer overruns and dropped packets.
    <br>
    <b class="text-warning">3</b>. Three-tier data center networks <i><b class="text-info">introduced loops</b></i>, required the correct spanning-tree protocol configuration. Spanning-tree issues are notorious for causing network outages as a spanning-tree failure causes continuous looping. <br><br>
    <b class="text-danger">Important Note</b>: Initialize Lab instance on the next topic: Switch Fabric Spine Architecture.
</body>
</html>
