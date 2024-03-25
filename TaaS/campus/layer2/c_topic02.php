<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="../campus.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NRE Training As a Service</title>
    </head>
<body>
    <div class="banner">
        <div class="navbar">
            <img src="/html_css_java/TaaS/img/nre_logo.png" class="logo">
            <ul>
                <li><a href="/html_css_java/TaaS/login/settings.php">settings</a></li>
                <li><a href="/html_css_java/TaaS/faqs/faqs.php">FAQs</a></li>
                <li> <a href="/html_css_java/TaaS/campus/campus.php" onclick="if (confirm('Are you sure you want to go back to Campus page?')) { window.location = '/html_css_java/TaaS/campus/campus.php'}">Back</a></li>
            </ul>
        </div>
            <div class="container-fluid overflow-hidden text-white">
                <div class="row align-items-start">
                    <div class="col-6">
                        <div class="container">
                            <iframe id="c_topic2.1" class="slider_topic" width="100%" height="470" src="c_topic2.1.php" frameborder="0" scrolling="no"></iframe>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button id="prev" onclick="prev()" class="btn btn-primary btn-sm" style="height:30px;width:70px">Previous</button>
                            <button id="next" onclick="next()" class="btn btn-primary btn-sm ms-2" style="height:30px;width:70px">Next</button>
                        </div>
                        <div id="congrats" class="visually-hidden text-light">
                            <h4 class="mt-1 text-warning">Congratulations!</h4>Get ready to the next level of your progress!
                            <p>You can close the Lab instance by:
                            Exit on the Switch Environment, then Click Logout, or Click the layer2_user, click Logout.
                            Close Lab button. Click BACK to return to the list of available topics.
                            </p>
                        </div> 
                        <button id="initializeButton" class="btn btn-success mt-3">Initialize Lab</button>
                        <button id="closeButton" class="btn btn-danger d-none mt-1" disabled>Close Lab</button> 
                        <div id="iframeContainer" class="iframe-container" style="display: none;"></div>
                    </div>
                    <div id="imageContainer" class="col-6 d-flex justify-content-center align-items-center">
                        <img id="layer2" src="../campus_img/layer2_switching.png" alt="Data Center Image" class="img-fluid">
                    </div>
                    <div class="col-6">
                        <div id="iframeContainer" class="ratio">
                            <iframe id="netlab" class="embed-responsive-item"  width="100%" height="100%" data-src="http://192.168.0.10:8988/#/?username=layer2_user&password=admin" allowfullscreen></iframe>
                        </div>
                    </div>
            </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="../js_l2/main1.js"></script>
    <script src="../js_l2/button.js"></script>
    <footer class="d-flex text-dark d-flex flex-column mt-4 fixed-bottom">
        <div class="container text-center text-white">
            <h6><p>Copyright &copy;2024 Designed and Created by Chris Navarro </p></h6>
        </div>
    </footer>
</body>
</html>
