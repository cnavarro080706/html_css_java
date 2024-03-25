// ../js/main.js

var slider_topics = document.querySelector('.slider_topic'); // This is the iframe slider
var guacamole_iframe = document.getElementById('netlab'); // Guacamole iframe
var topics = ['p_topic2.1.php', 'gre_vpn_protected_2.png', 'p_lab.php','p_topic2.2.php','p_topic2.3.php','p_topic2.4.php','p_topic2.5.php','p_topic2.6.php','p_topic2.7.php','p_topic2.8.php','p_topic2.9.php','p_topic3.0.php']; // Different Topics to be displayed onto the inframe container
var dir = '/html_css_java/TaaS/perimeter/b2b_p/';
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
