<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="../datacenter.css">
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
    <p><h4 class="text-center mt-5">Data Center Architecture</h4></p>
      <div class="container-fluid table-responsive">
        <h5 class="text-warning mt-3">Lab Details:</h5>
        <table class="table table-hover table table-bordered align-middle mt-4 text-center">
            <tr class="table-primary">
              <th>Host</th>
              <th>Ports to Spine01</th>
              <th>P2P Subnet</th>
              <th>Port/s to Spine02</th>
              <th>P2P Subnet</th>
              <th>Port/s to Spine03</th>
              <th>P2P Subnet</th>
              <th>Port/s to Spine04</th>
              <th>P2P Subnet</th>
              <th>Routing Protocol</th>
              <th>ASN</th>
            </tr>
            <tr>
              <td>Leaf01</td>
              <td>Ethernet1</td>
              <td>10.10.1.2/24</td>
              <td>Ethernet2</td>
              <td>10.10.3.2/24</td>
              <td>Ethernet3</td>
              <td>10.10.5.2/24</td>
              <td>Ethernet4</td>
              <td>10.10.7.2/24</td>
              <td>eBGP</td>
              <td>64513</td>
            </tr>
            <tr>
            <tr>
              <td>Leaf02</td>
              <td>Ethernet1</td>
              <td>10.10.2.2/24</td>
              <td>Ethernet2</td>
              <td>10.10.4.2/24</td>
              <td>Ethernet3</td>
              <td>10.10.6.2/24</td>
              <td>Ethernet4</td>
              <td>10.10.8.2/24</td>
              <td>eBGP</td>
              <td>64513</td>
            </tr>
          </table>
      </div>
</body>
</html>