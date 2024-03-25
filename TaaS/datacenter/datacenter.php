<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="datacenter.css">
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
                    <li><a href="/html_css_java/TaaS/login/settings.php">settings</a></li>
                    <li><a href="/html_css_java/TaaS/faqs/faqs.php">FAQs</a></li>
                    <li> <a href="/html_css_java/TaaS/index/nre_main.php" onclick="if (confirm('Are you sure you want to go back to home page?')) { window.location = '/html_css_java/TaaS/index/nre_main.php'}">Home</a></li>
                </ul>
            </div>
            <hr>
            <div class="container-fluid overflow-hidden text-white">
                <div class="row ms-5">
                    <!-- <img src="img_avatar2.png" alt="Data Center Topology"> -->
                    <div class="col-6">
                        <h4 class="text-center">Data Center Architecture</h4>
                        <br>
                        <p><h5 class="text-warning">What is a data center?</h5><br>
                            A <b class="text-warning">Data Center</b> is defined as a physical space which safely stores computer systems that in turn store and share data for computation by client systems. It is a central location of all application and services of any enterprise that the main goal is to centrally house all network and computing infrastructure like <i>Server Management</i>, <i>Storage</i>, <i>Virtualization</i>, <i>Network and Security Infrastructure</i> in which by design has a <b>high-availability, highly resilient systems and redundancies.</b></p><br>
                        <h5 class="ms-5">List of available topics:</h5>
                        <br>
                        <div class="ms-5 d-flex flex-column justify-content-center">
                            <ul class="ms-5 text-left pl-0">
                                <li><a class="link" href="d_topic01.php">TaaS Lab Instance</a></li>
                                <li><a class="link" href="dc/topic02.php">Data Center Leaf-Spine Architecture</a></li>
                                <li><a class="link" href="spine/topic02.php">Switch Fabric Spine Architecture</a></li>
                                <li><a class="link" href="leaf/topic02.php">Switch Fabric Leaf Architecture</a></li>
                                <li><a class="link" href="#">Network Convergence and Resilience <i class="text-info"> (next release)</i></a></li>
                                <li><a class="link" href="#">VXLAN and Overlay Networks <i class="text-info"> (next release)</i></a></li>
                                <li><a class="link" href="#">EVPN and Overlay Networks <i class="text-info"> (next release)</i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center">
                        <div class="ratio">
                        <img src="dc_img/dc01.jpg" alt="Data Center Domain" class="dc-img">
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