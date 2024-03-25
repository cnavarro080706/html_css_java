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
                <li> <a href="/html_css_java/TaaS/perimeter/perimeter.php" onclick="if (confirm('Are you sure you want to go back to Perimeter page?')) { window.location = 'html_css_java/TaaS/perimeter/perimeter.php'}">Back</a></li>
            </ul>
        </div>
        <hr>
        <div class="container-fluid overflow-hidden text-white">
            <div class="row align-items-start">
                <!-- <img src="img_avatar2.png" alt="Data Center Topology"> -->
                <div class="col-6 mt-1">
                    <p><h4 class="text-warning"> What's NRE TaaS? </h4></p><br>
                    <p><i class="text-warning">NRE Training as a Service</i> is a platform to give learner's both theoritical knowledge and implementing it via a real world scenario, step by step progression
                        until confidence is able to achieve by the learner. </p>
                    <p class="fs-6">NRE TaaS Lab Instance Overview <br><br>
                    This TaaS support's a Lab instance that the learner can use to put his learnings into an action, this is a supplemental and critical to the learner's progress
                    by implementing theoretical learnings in actual network devices.
                        <ol>
                            <li>Click the Initilize button below to create a network lab instance. Wait till 100% and it will load the lab automatically.</li>
                            <li>Click the Linux-Lite Desktop icon on the loaded lab instance.</li>
                            <li>Once connected it will automaticall load the Linux-Lite Desktop GNOME.</li>
                            <li>This Linux-Lite Desktop GNOME environment is a full operating system desktop with builtin open source applications.</li>
                            <li>You can click any icons such as putty, terminal, home directory, etc. to get familiar with the GNOME environment.</li>
                            <!-- <li>Congratulations! You have successfully initialize the TaaS Lab instance. Get ready to the next level of your progress!</li> -->
                        </ol>
                    </p>
                    <!-- <button id="initializeButton" class="btn btn-primary mt-5">Initialize Lab</button> -->
                    <!-- <button id="closeButton" class="btn btn-danger d-none mt-3" disabled>Close Lab</button> -->
                    <div id="congrats" class="visually-hidden text-light">
                        <h4 class="mt-3 text-warning">Congratulations!</h4>You have successfully initialize the TaaS Lab instance. Get ready to the next level of your progress! <br>
                        <p>You can close the Lab instance by:</p>
                        <li>Click the Menu icon on the Desktop, click Logout to Disconnect the session.</li>
                        <li>Close Lab button. Click BACK to return to the list of available topics.</li>
                    </div>
                    <button id="initializeButton" class="btn btn-primary mt-3">Initialize Lab</button>
                    <button id="closeButton" class="btn btn-danger d-none mt-1" disabled>Close Lab</button> 
                    <div id="iframeContainer" class="iframe-container" style="display: none;"></div>
                </div>
            <div class="col-6">
                <div id="iframeContainer" class="ratio">
                    <iframe id="netlab" class="embed-responsive-item" data-src="http://192.168.0.10:8988/#/?username=b2b_user&password=admin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js_p/taas.js"></script>
    <hr>
    <footer class="d-flex text-dark d-flex flex-column mt-5 fixed-bottom">
        <div class="container text-center text-white">
            <h6><p>Copyright &copy;2024 Designed and Created by Chris Navarro </p></h6>
        </div>
    </footer>
</body>
</html>
