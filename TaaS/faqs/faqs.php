<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="../stylesheets/nre.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NRE Training As a Service</title>
    </head>
    <body>
        <div class="banner">
            <div class="navbar">
                <img src="../img/NRE_logo.png" class="logo">
                <ul>
                    <li><a href="../login/settings.php">settings</a></li>
                    <li><a href="../faqs/faqs.php">FAQs</a></li>
                    <li> <a href="../index/nre_main.php" onclick="if (confirm('Are you sure you want to go back to home page?')) { window.location = '../index/nre_main.php'}">Home</a></li>
                </ul>
            </div>
            <div class="container">
                <div class="row flex-center mt-5">
                    <div class="mt-5">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                              <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  What do I need to do if the Lab instance is not the proper user_id?
                                </button>
                              </h2>
                              <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                  You only need to click the upper right corner menu then logout, relogin again. Ensure your in the right topic so as the expected Lab instance user will be called properly by the API.
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                  Why is it that when I skip some topic's, the new topic is seems incomplete LAB details?
                                </button>
                              </h2>
                              <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                  This learning module was designed to be a contiguous task-based topics wherein you need to complete each task from first topic till last in sequence, else there will be a BIG chance that you will be missing some details specially on interdependent configurations such as layer 2 switching to layer3 switching, to Routing protocols.
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                  Some of the topic details seems missing some words, or having typo errors?
                                </button>
                              </h2>
                              <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                  This is a new platform being develop, it is expected to have flaws and issues, anything you validate as an issue please email the team @ nre.training.services@hotmail.com.
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <footer class="d-flex text-dark d-flex flex-column mt-4 fixed-bottom">
        <div class="container text-center text-white">
            <p>All Rights Reserved, <a href="#">nre.training.services@hotmail.com</a></p>
            <h6><p>Copyright &copy;2024 Designed and Created by Chris Navarro </p></h6>
        </div>
    </footer>     
    </body>
</html> 