
//adds or removes the open class from the navbar each time the function is called
function openNavbar() {
    document.querySelector('nav.navbar').classList.toggle('open');
    document.querySelector('div.NavbarOpener').classList.toggle('open');

}

//closes the navbar when the user scrolls on the page
document.addEventListener('scroll', function() {
    document.querySelector('nav.navbar').classList.remove('open');
    document.querySelector('div.NavbarOpener').classList.remove('open');
    
});
