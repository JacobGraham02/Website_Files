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
    var _CONTENT = ["Hello there","How are you","I am good, you?","I am doing very well, thank you."];
    // Current sentence being processed
    var _PART = 0;
    // Character number of the current sentence being processed
    var _PART_INDEX = 0;

    var _INTERVAL_VAL;

    var _ELEMENT = document.querySelector("#text");

    // Implement typing effect
    function Type() {
        var text = _CONTENT[_PART].substring(0, _PART_INDEX + 1);
        _ELEMENT.innerHTML = text;
        _PART_INDEX++;

        // If full sentence has been displayed, then start to delete the sentence after some time
        if (text === _CONTENT[_PART]) {
            clearInterval(_INTERVAL_VAL);
            setTimeout(function() {
                _INTERVAL_VAL = setInterval(Delete, 50);
            }, 1000);
        }
    }

    // Implements deleting effect
    function Delete() {
        var text = _CONTENT[_PART].substring(0, _PART_INDEX - 1);
        _ELEMENT.innerHTML = text;
        _PART_INDEX--;

        // If sentence has been deleted then start to display the next sentence
        if (text === '') {
            clearInterval(_INTERVAL_VAL);

            if (_PART == (_CONTENT.length - 1)) 
                _PART = 0;
            else 
                _PART++;
            _PART_INDEX = 0;

            // Start to display the next sentence after some time
            setTimeout(function() {
                _INTERVAL_VAL = setInterval(Type, 100);
            }, 200);
        }
    }
    // Start the typing effect on load
    _INTERVAL_VAL = setInterval(Type, 100);
});