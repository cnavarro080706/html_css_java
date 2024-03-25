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
    <p class="fs-6"><h5 class="text-warning">Routing Considerations</h5>
    Any of the following routing protocols may be used on layer 3 connections when designing a leaf-spine
        network: <br>
    <ol>
        <li class="text-warning">OSPF</li>
        <li class="text-warning">IS-IS</li>
        <li class="text-warning">BGP</li>
    </ol>
    It seems obvious that Open Shortest Path First (OSPF) or Intermediate System–to–Intermediate System (IS-IS) would be the ideal choice for a routing protocol to power the data center. But due to <b class="text-warning"> OSPF has Lack of multiprotocol support</b> and <b class="text-warning">IS-IS implementations are few, limiting the administrator’s choices</b> thats why the third one was the best choice to use as routing protocol for this deployment. <br><br>
    BGP stepped into such a situation and promised something that the other two couldn’t offer. BGP is mature, powers the internet, and is fundamentally simple to understand (despite its reputation to the contrary). Many mature and robust implementations of BGP exist, including in the world of open source. It is less chatty than its linkstate cousins, and supports multiprotocols (i.e., it supports advertising IPv4, IPv6, Multiprotocol Label Switching (MPLS), and VPNs
    natively).

    </p>
</body>
</html>
