/*
 * ISTE-240
 * Midterm - Individual Project Part 1 (Irondequoit)
 */

// Create an array of images
var imageArray = ["assets/images/home/town_hall_hero.jpg", 
                "assets/images/home/helmer_nature_center_welcome_hero.jpg",
                "assets/images/home/jack_rabbit_hero.jpg",
                "assets/images/home/seneca_park_zoo_entrance_hero.jpg",
                "assets/images/home/the_white_ladys_castle_hero.png",
                "assets/images/home/isquare_hero.png"];

// Save total size of array to variable arraySize
var arraySize = imageArray.length;

// Set wait time between slides in milliseconds
setInterval(runit, 3000);

var x = 1; // Used to count up to arraySize

// Function runit play slideshow when called
function runit() {
    // Set image to next picture in image array
    document.getElementById('slideshow').src = imageArray[x];

    // Increase count by 1
    x++;

    // If count has reached the last index of imageArray than set count back to starting index.
    if (x === arraySize) {
        x = 0;
    }
}

