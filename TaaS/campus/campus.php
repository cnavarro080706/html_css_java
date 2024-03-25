<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="campus.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NRE Training As a Service</title>
    </head>
    <body>
        <div class="banner">
            <div class="navbar">
                <img src="../img/nre_logo.png" class="logo">
                <ul>
                    <li><a href="../login/settings.php">settings</a></li>
                    <li><a href="../faqs/faqs.php">FAQs</a></li>
                    <li> <a href="../index/nre_main.php" onclick="if (confirm('Are you sure you want to go back to home page?')) { window.location = '../index/nre_main.php'}">Home</a></li>
                </ul>
            </div>
            <hr>
            <div class="container-fluid overflow-hidden text-white">
                <div class="row ms-5">
                    <!-- <img src="img_avatar2.png" alt="Data Center Topology"> -->
                    <div class="col-6">
                        <h4 class="text-center">Campus/Peripheral Architecture</h4>
                        <br>
                        <p><h5 class="text-warning">What is a Campus or Peripheral Network?</h5><br>
                            A <b class="text-warning">Campus/Peripheral Network</b> is usually a local area network (LAN) or set of interconnected LANs serving a corporation, government agency, university or similar organization. In this context, a typical campus includes a set of buildings in close proximity. End users in a campus network may be more widely dispersed geographically than in a single LAN, but they are usually not as scattered as they would be in a wide area network (WAN).</p><br><br>
                        <h5 class="ms-5">List of available topics:</h5>
                        <br>
                        <div class="ms-5 d-flex flex-column justify-content-center">
                            <ul class="ms-5 text-left pl-0">
                                <li><a class="link" href="c_topic01.php">TaaS Lab Instance</a></li>
                                <li><a class="link" href="layer2/c_topic02.php">Layer 2 Switching</a></li>
                                <li><a class="link" href="layer3/c_topic02.php">Layer 3 Switching</a></li>
                                <li><a class="link" href="l3_routing/c_topic02.php">Network Routing</a></li>
                                <li><a class="link" href="#">Network Convergence and Resilience<i class="text-info"> (next release)</i></a></li>
                                <li><a class="link" href="#">Network Automation for Routing and Switching<i class="text-info"> (next release)</i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center">
                        <div class="ratio">
                        <img class="campus-img" src="campus_img/campus.png" alt="Campus Networks">
                        <!-- <iframe class= "embed-responsive-item" src="" allowfullscreen></iframe> -->
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <hr>
        <footer class="d-flex text-dark d-flex flex-column mt-4 fixed-bottom">
            <div class="container text-center text-white">
                <h6><p>Copyright &copy;2024 Designed and Created by Chris Navarro </p></h6>
            </div>
        </footer>
    </body>
</html>