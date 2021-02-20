document.addEventListener("DOMContentLoaded", function() {
    // JQuery's addEventListener()
    $("a").on("click", function() {
        var id=$(this).data("section"); // Reference the current anchor object; 'this'

        $("section:visible").fadeOut(250, function() { // Fade time in milliseconds
            $(id).fadeIn(250);
        });
    });
});