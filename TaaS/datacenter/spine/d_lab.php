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
    <!-- <p><h6 class="text-primary">Topic 1</h6></p> -->
    <p><h4 class="text-center mt-5">Data Center Architecture</h4></p>
      <div class="container-fluid table-responsive">
        <h5 class="text-warning mt-3">Lab Details:</h5>
        <table class="table table-hover table table-bordered align-middle mt-4 text-center">
            <tr class="table-primary">
              <th>Host</th>
              <th>Port/s connection to DCC01</th>
              <th>P2P Subnet</th>
              <th>Port/s connection to DCC02</th>
              <th>P2P Subnet</th>
              <th>Routing Protocol</th>
              <th>ASN</th>
              <th>Username</th>
              <th>Password</th>
            </tr>
            <tr>
              <td>Spine01</td>
              <td>Ethernet3</td>
              <td>172.16.1.2/24</td>
              <td>Ethernet4</td>
              <td>12.16.2.2/24</td>
              <td>eBGP</td>
              <td>64512</td>
              <td>testuser</td>
              <td>test1234</td>
            </tr>
            <tr>
            <tr>
              <td>Spine02</td>
              <td>Ethernet3</td>
              <td>172.16.3.2/24</td>
              <td>Ethernet4</td>
              <td>12.16.4.2/24</td>
              <td>eBGP</td>
              <td>64512</td>
              <td>testuser</td>
              <td>test1234</td>
            </tr>
            <tr>
              <td>Spine03</td>
              <td>Ethernet3</td>
              <td>172.16.5.2/24</td>
              <td>Ethernet4</td>
              <td>12.16.6.2/24</td>
              <td>eBGP</td>
              <td>64512</td>
              <td>testuser</td>
              <td>test1234</td>
            </tr>
            <tr>
              <td>Spine04</td>
              <td>Ethernet3</td>
              <td>172.16.7.2/24</td>
              <td>Ethernet4</td>
              <td>12.16.8.2/24</td>
              <td>eBGP</td>
              <td>64512</td>
              <td>testuser</td>
              <td>test1234</td>
            </tr>
          </table>
      </div>
</body>
</html>