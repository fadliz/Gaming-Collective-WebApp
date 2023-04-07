// Get references to the tab links and tab content elements
const tabLinks = document.querySelectorAll('.nav-link');
const tabContent = document.querySelectorAll('.tab-pane');


var loadFile = function(event) {
    var image = document.getElementById("profile-pic");
    image.src = URL.createObjectURL(event.target.files[0]);
};