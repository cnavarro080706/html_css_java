// ../js/main.js

var slider_topics = document.querySelector('.slider_topic'); // This is the iframe slider
var guacamole_iframe = document.getElementById('netlab'); // Guacamole iframe
var topics = ['d_topic2.1.php','d_topic2.1.1.php','d_topic2.1.2.php','DC_ipfabric_leaf2.png','d_lab.php','d_topic2.2.php','d_topic2.3.php','d_topic2.3.1.php','d_topic2.3.2.php','d_topic2.4.php','d_topic2.5.php','d_topic2.6.php','d_topic2.7.php','d_topic2.8.php','d_topic2.8.1.php','d_topic2.8.2.php','d_topic2.9.php','d_topic2.9.1.php','d_topic2.9.2.php','d_topic3.0.php','d_topic3.1.php','d_topic3.2.php']; // Different Topics to be displayed onto the inframe container
var dir = '/html_css_java/TaaS/datacenter/leaf/';
var i = 0; // Current topic index

function prev() {
    if (i <= 0) i = topics.length;
    i--;
    setTopic();
}

function next() {
    if (i >= topics.length - 1) i = -1;
    i++;
    setTopic();
}

function setTopic() {
    slider_topics.setAttribute('src', dir + topics[i]);
}

// Refocuses the Guacamole iframe if the user is not already focusing another non-body element on the page
var refocusGuacamole = function refocusGuacamole() {
    // Do not refocus if focus is on an input field
    var focused = document.activeElement;
    if (focused && focused !== document.body)
        return;

    // Ensure Guacamole iframe is focused
    guacamole_iframe.focus();
};

// Attempt to refocus Guacamole iframe upon click or keydown
document.addEventListener('click', refocusGuacamole);
document.addEventListener('keydown', refocusGuacamole);
