 // Get reference to the congratulations paragraph
 const congratsParagraph = document.getElementById("congrats");

 document.getElementById('initializeButton').addEventListener('click', function() {
    var button = this;
    var iframe = document.getElementById('netlab');
    var iframeContainer = document.getElementById('iframeContainer');
    var closeButton = document.getElementById('closeButton');
    var width = 1;
    var interval = setInterval(function() {
        if (width >= 100) {
        clearInterval(interval);
        iframe.src = iframe.dataset.src;
        setTimeout(function() {
        button.style.display = 'none'; // Hide the progress button after loading with delay of 10secs
        }, 5000); 

        setTimeout(function() {
        iframeContainer.classList.remove('hidden'); // Show the progress bar container
        button.innerHTML = 'Complete';
        button.classList.remove('btn-primary');
        button.classList.add('btn-success');
        closeButton.disabled = false; // Enable the close button
        closeButton.classList.remove('d-none'); // Show the close button
        }, 1000); 

        // Show the congratulations paragraph after a delay
        setTimeout(function() {
                congratsParagraph.classList.remove("visually-hidden");
            }, 12000); 
       
        } else {
        width++;
        button.style.width = width + '%';
        button.innerHTML = width + '%';
        }
    }, 50);
button.disabled = true; // Disable the initialize button during progress
});
    // Add event listener to the close button
document.getElementById("closeButton").addEventListener("click", function() {
    // Hide the iframe and disable the button
    var iframeContainer = document.getElementById('iframeContainer');
    var iframe = document.getElementById('netlab');
    var initializeButton = document.getElementById('initializeButton');

    iframeContainer.classList.add('hidden');
    iframe.src = "";
    // initializeButton.style.display = 'block'; // Show the initialize button
    this.disabled = true;
    this.classList.add('d-none'); //Hide the close button

    // Show the congratulations paragraph
    congratsParagraph.classList.remove("visually-hidden");
    });