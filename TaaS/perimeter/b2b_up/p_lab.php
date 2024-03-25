<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="../perimeter.css">
        <link rel="stylesheet" href="p_lab.css">
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
    <p><h4 class="text-center mt-5 text-light">Perimeter Architecture</h4></p>
      <div class="container-fluid table-responsive">
        <h5 class="text-warning mt-1">Lab Details:</h5>
        <table class="table table-hover table table-bordered align-middle mt-3">
            <tr class="table-primary text">
                <th>A-Host</th>
                <th>A-IP Subnet</th>
                <th>A-Interface</th>
                <th>B-Host</th>
                <th>B-IP Subnet</th>
                <th>B-Interface</th>
                <th>Description</th>
            </tr>
            <tr>
                <td>R1</td>
                <td>192.168.0.237/24</td>
                <td>GigabitEthernet0/0</td>
                <td>R2</td>
                <td>192.168.0.238/24</td>
                <td>GigabitEthernet0/0</td>
                <td>Point-topoint WAN </td>
            </tr>
            <tr>
                <td>R1</td>
                <td>172.19.10.1/30</td>
                <td>Tunnel0</td>
                <td>R2</td>
                <td>172.19.10.2/30</td>
                <td>Tunnel0</td>
                <td>GRE VPN Tunnel (Unprotected)</td>
            </tr>
            <tr>
                <td>R1</td>
                <td>10.10.10.1/24</td>
                <td>GigabitEthernet0/1</td>
                <td>LAN_SW1</td>
                <td>NA</td>
                <td>GigabitEthernet0/0</td>
                <td>LAN - Access VLAN 100 for the Server hosts</td> </td>
            </tr>
            <tr>
                <td>R2</td>
                <td>20.20.20.1/24</td>
                <td>GigabitEthernet0/1</td>
                <td>LAN_SW2</td>
                <td>NA</td>
                <td>GigabitEthernet0/0</td>
                <td>LAN - Access VLAN 100 for the remote B2B user</td> </td>
            </tr>
            <tr>
                <td>LAN_SW1</td>
                <td>10.10.10.2/24</td>
                <td>VLAN 100</td>
                <td>WEB-Server</td>
                <td>10.10.10.100/24</td>
                <td>Eth0</td>
                <td>LAN - Access Connection for VLAN 100</td>
            </tr>
            <tr>
                <td>LAN_SW1</td>
                <td>10.10.10.2/24</td>
                <td>VLAN 100</td>
                <td>FTP-Server</td>
                <td>10.10.10.101/24</td>
                <td>Eth0</td>
                <td>LAN - Access Connection for VLAN 100</td>
            </tr>
            <tr>
                <td>LAN_SW2</td>
                <td>20.20.20.2/24</td>
                <td>VLAN 100</td>
                <td>Remote B2B User</td>
                <td>20.20.20.100/24</td>
                <td>Eth0</td>
                <td>LAN - Access Connection for VLAN 100</td>
            </tr>
          </table>
      </div>
</body>
</html>