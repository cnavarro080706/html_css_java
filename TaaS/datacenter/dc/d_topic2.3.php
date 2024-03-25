<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- <link rel="stylesheet" href="../datacenter.css"> -->
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
    <p><h4 class="text-center">Data Center Architecture</h4></p>
    <p class="fs-6"><h5 class="text-warning">Benefits of Leaf-Spine Architecture</h5>
    <ol>
        <li class="text-warning">Improved Redundancy</li>As opposed to our traditional three-tier architecture where access layer switches connect to only two uplink distribution switches, every leaf switch connects to every spine switch.
        <li class="text-warning">Increased Bandwidth</li>Ability to use multiple active links instead of one and it increases bandwidth. With STP, only one link is active and the other links are blocked.
        <li class="text-warning">Improved Scalability</li>In the event of oversubscription, we can add a spine switch and connect it to every leaf switch. If the port density is a concern, we can add a leaf switch and connect it to every spine switch.
        <li class="text-warning">Low Latency and Congestion Avoidance</li>With having only a maximum of two hops between any source and destination nodes, we make a more direct traffic path, which improves performance and reduces bottleneck.
        <li class="text-warning">Lower Costs</li>Fixed-configuration switches unlike modular switches, have a fixed number of ports and are usually not expandable. Many spine-leaf networks use fixed-configuration switches.

    </ol>
    </p>
</body>
</html>
