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
    <p class="fs-6"><h5 class="text-warning">Introduction to Leaf-Spine Architecture:</h5><br>
    <i><b class="text-warning">Spine and Leaf Architecture</b></i> is a two-layer, full-mesh topology composed of a leaf layer and a spine layer, with the leaf and spine switches. It was being implemented in data centers to overcome the limitations of the three-tier architecture, where we have more east-west traffic (<i><b class="text-warning">server-to-server communication</b></i>) than north-south traffic flow (user/network).  <br><br>
    <i><b class="text-warning">Spine Layer</b></i>, serves as the backbone of the modern server farm network connecting to the core layer in our three-tier design. It is where we can find the spine switches which can be a Layer 3 switch. Each Layer 3 port is connected to the underlying Layer 3 leaf switch.
   <br><br>
   <i><b class="text-warning">Leaf Layer</b></i> connects to end devices similar to the server access layer in our three-tier design. It is where the leaf switches which connect to all spine switches reside. In our example, we have server/host connected to leaf switches. In a data center environment, it can be any kind of server, like <i><b class="text-warning">web server</b></i>, <i><b class="text-warning">application server</b></i>, <i><b class="text-warning">database server</b></i>, or <i><b class="text-warning">storage server</b></i>.
    <br><br>
   <b class="text-danger">Important Note</b>: Initialize Lab instance on the next topic: Switch Fabric Spine Architecture.
</body>
</html>
