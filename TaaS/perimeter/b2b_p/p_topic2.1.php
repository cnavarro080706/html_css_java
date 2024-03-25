<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- <link rel="stylesheet" href="../perimeter.css"> -->
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
    <p class="fs-6"><h5 class="text-warning">Configuring Site To Site GRE VPN Tunnel (Protected)</h5>
    <h6><b class="text-info">Important Note</b>: This is a continuation of the topic "Configuring Site To Site GRE VPN Tunnel (Unprotected)."</h6>
    <b class="text-warning">Quick Recap</b>: GRE is an encasulation protocol, unfortunately it doesn't perform any <i>data encryption</i>. Creating a point-to-point GRE tunnel without any encryption is 
    <b class="text-info">extremely risky</b> as sensitive data can easily be extracted from the tunnel and viewed by others. <br><br>
    For this purpose, we use <i><b class="text-warning">IPSec</b></i> to add an <b class="text-info">encryption layer</b> and secure the GRE tunnel. This provides us with the necessary military-grade encryption and peace of mind.
    <br><br>
    <b>Lab: Configuring Site To Site GRE VPN Tunnel (Protected)</b><br>
        <ol>
            <li>Configuring IPSec Encryption For GRE Tunnel (GRE Over IPSec)</li>
            <ul>
                <li>Configure ISAKMP (IKE) - (ISAKMP Phase 1)</li>
                <li>Create IPSec Transform (ISAKMP Phase 2 policy)</li>
            </ul>
            <li>Verifying The GRE Over IPSec Tunnel</li>
            <li>Troubleshooting GRE VPN Tunnel issues (<i class="text-primary">for next release</i>)</li>
        </ol>
    </p>
</body>
</html>
