document.addEventListener("DOMContentLoaded", () => {
    const home = document.getElementById('home');
    home.addEventListener("click", () => {
        window.open("./index.html", '_self');
    })

    const projects = document.getElementById('projects');
    projects.addEventListener("click", () => {
        window.open("./projects.html", '_self');
    })

    const about = document.getElementById('about');
    about.addEventListener("click", () => {
        window.open("./about.html", '_self');
    })

    const contact = document.getElementById('contact');
    contact.addEventListener("click", () => {
        window.open("./contact.html", '_self');
    })
})