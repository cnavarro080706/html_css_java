<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="../perimeter.css">
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
    <!-- <p class="text-primary">Topic 1</p> -->
    <p><h4 class="text-center">Perimeter Network Architecture</h4></p>
    <p class="fs-6"><h5 class="text-warning">Configuring Site To Site GRE VPN Tunnel (Unprotected)</h5>
    <i><b class="text-warning">Generic Routing Encapsulation (GRE)</b></i> is a  tunneling protocol that allows the encapsulation of a wide variety <br>
    of network layer protocols inside point-to-point links. A GRE tunnel is used when packets need to be sent from <br>
    one network to another over the Internet or an insecure network.
    <h6 class="text-warning">Important Note:</h6>
        <li>GRE tunnel only encapsulates the packets by adding a GRE header.</li>
        <li>Packets within GRE tunnel are not encrypted.</li>
        <li>GRE tunnels allow multicast packets to traverse the tunnel.</li>
    <br>
    <b>Lab: Configuring Site To Site GRE VPN Tunnel (Unprotected)</b><br>
        <ol>
            <li>Configuring a Point-to-Point WAN connectivity</li>
            <li>Creating and Configuring a Tunnel Interface</li>
            <li>Verifying the GRE Tunnel</li>
            <li>Routing Networks through the GRE Tunnel</li>
            <li>Verifying the Host to Host connectivity</li>
            <li>Troubleshooting GRE VPN Tunnel issues (<i class="text-primary">for next release</i>)</li>
        </ol>
    </p>
</body>
</html>
