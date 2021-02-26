document.addEventListener("DOMContentLoaded", function() {
    const menu_links = document.querySelectorAll('.menu a');

    menu_links.forEach(link => link.addEventListener("click", function() {
        document.querySelector(".menu-btn").checked = false;
    }))

    // JQuery's addEventListener()
    $("a").on("click", function() {
        var id=$(this).data("section"); // Reference the current anchor object; 'this'

        $("section:visible").fadeOut(250, function() { // Fade time in milliseconds
            $(id).fadeIn(250);
        });
    });

    // Collapse menu if a link is selected
    if (window.innerWidth <= 768) {
        $('.menu a').on("click", function() {
            $('.menu-btn').prop('checked', false);
        });
    }

    // For the typewriter-like text

    // Sentences
    var CONTENT = ["Student web developer","Computer science student","Fitness enthusiast","Software developer"];
    // Current sentence being processed
    var PART = 0;
    // Character number of the current sentence being processed
    var PART_INDEX = 0;

    var INTERVAL_VAL;

    var ELEMENT = document.querySelector("#text");

    // Implement typing effect
    function Type() {
        var text = CONTENT[PART].substring(0, PART_INDEX + 1);
        ELEMENT.innerHTML = text;
        PART_INDEX++;

        // If full sentence has been displayed, then start to delete the sentence after some time
        if (text === CONTENT[PART]) {
            clearInterval(INTERVAL_VAL);
            setTimeout(function() {
                INTERVAL_VAL = setInterval(Delete, 50);
            }, 1000);
        }
    }

    // Implements deleting effect
    function Delete() {
        var text = CONTENT[PART].substring(0, PART_INDEX - 1);
        ELEMENT.innerHTML = text;
        PART_INDEX--;

        // If sentence has been deleted then start to display the next sentence
        if (text === '') {
            clearInterval(INTERVAL_VAL);

            if (PART == (CONTENT.length - 1)) 
                PART = 0;
            else 
                PART++;
            PART_INDEX = 0;

            // Start to display the next sentence after some time
            setTimeout(function() {
                INTERVAL_VAL = setInterval(Type, 100);
            }, 200);
        }
    }
    // Start the typing effect on load
    INTERVAL_VAL = setInterval(Type, 100);
});