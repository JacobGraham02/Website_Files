document.addEventListener("DOMContentLoaded", function() {
    var pageLinks = ["about.php","projects.php", "skills.php"];
    var anchorLinks = document.getElementsByClassName("navigation");

    addEventListenersToAnchors();

    function addEventListenersToAnchors() {
        for (let i = 0; i < anchorLinks.length; i++) {
            anchorLinks[i].addEventListener("click", function() {
                goToPage(pageLinks[i]);
            });
        }
    }
    function goToPage(loadThisPage) {
       // event.preventDefault();
       $("#main").load(loadThisPage);
    }
        
    $('.menu').click(function() {
        $('.menu').toggleClass('active');
        $('.menu-bar').toggleClass('active');
    });
});