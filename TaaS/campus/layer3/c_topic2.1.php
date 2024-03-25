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
    <!-- <p><h6 class="text-primary">Topic 1</h6></p> -->
    <p><h4 class="text-center">Campus/Peripheral Architecture</h4></p>
    <p class="fs-6"><h5 class="text-warning">Introduction to Layer 3 Switching</h5>
    <h6><b class="text-info">Important Note</b>: This is a continuation of the topic "Introduction to Layer 2 Switching."</h6>
    Traditionally switching operates in layer 2 by default of the <i><b class="text-warning">Open Systems Interconnection (OSI)</b></i> Model. VLANs as previously discussed, it is a technology to segment your network. <br>
    Technically VLANs within the same switch will <b class="text-info">NOT</b> talk to each other for security reasons, hence, Layer 3 switching in the form of <i><b class="text-warning">Inter-VLAN Routing</b></i> will be introduce. <br>
    A Layer 3 Switch can route from one VLAN to another using multiple <b class="text-warning">Switched Virtual Interface (SVI)</b>. Layer 3 switches convert a Layer 2 switch interface to a Layer 3 interface, making it a routed port similar to a physical interface on a router.<br><br>
    <b>Lab: Configuring Basic Layer 3 Switching:</b><br><br>
        <li>Configuring Layer 3 Switch Virtual Interface (SVI)</li>
        <li>Converting Layer 2 interface to a Layer 3 interface (<b class="text-warning">Routed Port</b>)</li>
        <li>Testing Connectivity</li>
    </p>
</body>
</html>
