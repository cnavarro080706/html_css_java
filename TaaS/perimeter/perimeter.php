<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="perimeter.css">
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
            <div class="container-fluid overflow-hidden text-white">
                <div class="row ms-5">
                    <!-- <img src="img_avatar2.png" alt="Data Center Topology"> -->
                    <div class="col-6">
                        <h4 class="text-center">Perimeter Network Architecture</h4>
                        <br>
                        <p><h5 class="text-warning">What is a Perimeter Network?</h5><br>
                            A <b class="text-warning">Perimeter Network</b> often referred to as a demilitarized zone (DMZ), is a segmented part of a network <br>that acts as a buffer between an organization's 
							internal network and the external, untrusted internet. <br>Designed to filter and scrutinize incoming and outgoing traffic, allowing only authorized communication <br>
							to and from the internal network while blocking potentially harmful traffic.</p>
                            One common perimeter network topology is a <i><b class="text-warning">B2B (Business-to-Business)</b></i> connection. It refers to <br>transactions or interactions between two businesses, typically involving the exchange of goods, services, <br>or information such as <i class="text-warning">remote access</i> to University learning materials like Blended/Assynchronous Learning.
                            <br><br>
                        <h5 class="ms-5">List of available topics:</h5>
                        <br>
                        <div class="ms-5 d-flex flex-column justify-content-center">
                            <ul class="ms-5 text-left pl-0">
                                <li><a class="link" href="p_topic01.php">TaaS Lab Instance</a></li>
                                <li><a class="link" href="b2b_up/p_topic02.php">Configuring Site To Site GRE VPN Tunnel (Unprotected)</a></li>
                                <li><a class="link" href="b2b_p/p_topic02.php" >Configuring Site To Site IPSec VPN Tunnel (Protected)</a></li>
                                <li><a class="link" href="#">Routing Protocol Considerations <i class="text-primary">(ongoing update)</i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center">
                        <div class="ratio ratio-8x5">
                        <img class="perimeter-img" src="perimeter_img/perimeter.png" alt="Perimeter Networks">
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