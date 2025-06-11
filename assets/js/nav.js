/**
 * ISTE-240
 * Midterm - Individual Project Part 1 (Irondequoit)
 * Nav
 * 
 * Author: Nathan Pedersen
 */

/* toggle nav menu on mobile */
function toggleMenuVisibility() {
    var links = document.getElementById("nav-links");
    if (links.style.display === "block") {
        links.style.display = "none";
    } else {
        links.style.display = "block";
    }
}

/* prevent the nav bar from disappearing after shrinking the window, 
displaying then hiding the hamburger menu, and growing the window again */
window.addEventListener('resize', function() {
    if (window.innerWidth > 768) {
        document.getElementById('nav-links').style.display = '';
    }
});