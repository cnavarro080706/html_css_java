<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="../campus.css">
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
    <p><h4 class="text-center mt-5">Campus/Peripheral Architecture</h4></p>
      <div class="container-fluid table-responsive">
        <h5 class="text-warning mt-3">Lab Details:</h5> <br>
        <table class="table table-hover table table-bordered align-middle mt-3 table-sm">
            <tr class="table-primary">
              <th>Host</th>
              <th>IP Subnet</th>
              <th>VLAN</th>
              <th>MAC Address</th>
              <th>Port/s connection to PC</th>
              <th>Port/s connection to Switches</th>
              <th>Username</th>
              <th>Password</th>
            </tr>
            <tr>
              <td>Switch01</td>
              <td>172.30.20.1/24</td>
              <td>100</td>
              <td>50:01:00:04:80:64</td>
              <td>GigabitEthernet1/0</td>
              <td>NA</td>
              <td>testuser01</td>
              <td>test1234</td>
            </tr>
            <tr>
              <td>Switch02</td>
              <td>172.30.20.1/24</td>
              <td>200</td>
              <td>50:01:00:05:80:c8</td>
              <td>GigabitEthernet1/0</td>
              <td>NA</td>
              <td>testuser01</td>
              <td>test1234</td>
            </tr>
            <tr>
              <td>testPC01</td>
              <td>172.30.10.100/24</td>
              <td>100</td>
              <td>0050.7966.6817:100</td>
              <td>NA</td>
              <td>ethernet0</td>
              <td>NA</td>
              <td>NA</td>
            </tr>
            <tr>
              <td>testPC02</td>
              <td>172.30.20.100/24</td>
              <td>200</td>
              <td>0050.7966.6818:200</td>
              <td>NA</td>
              <td>ethernet0</td>
              <td>NA</td>
              <td>NA</td>
            </tr>
          </table>
      </div>
</body>
</html>