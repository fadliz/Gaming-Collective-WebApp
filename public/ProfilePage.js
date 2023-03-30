// Get references to the tab links and tab content elements
const tabLinks = document.querySelectorAll('.nav-link');
const tabContent = document.querySelectorAll('.tab-pane');

// Loop through the tab links and add a click event listener to each one
tabLinks.forEach((link) => {
    link.addEventListener('click', (e) => {
        e.preventDefault();
        // Get the ID of the clicked link's target tab content
        const targetId = e.target.getAttribute('href');
        // Loop through the tab content elements and hide them all
        tabContent.forEach((content) => {
            content.classList.remove('show', 'active');
        });
        // Show the clicked link's target tab content
        document.querySelector(targetId).classList.add('show', 'active');
        // Loop through the tab links and remove the 'active' class from all of them
        tabLinks.forEach((link) => {
            link.classList.remove('active');
        });
        // Add the 'active' class to the clicked link
        e.target.classList.add('active');
    });
});