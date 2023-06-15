function teleport() {
    var intro = alert("- Home \n - About \n - Service \n - Contact \n PAGE ONLY");
    var a = prompt("Enter a page to teleport");
    a = a.toLowerCase();
    while (a != "home" && a != "service" && a != "about" && a != "contact") {
        intro = alert("- Home \n - About \n - Service \n - Contact \n PAGE ONLY");
        a = prompt("Enter a page to teleport");
        a = a.toLowerCase();
    }
    switch (a) {
        case 'home' :
            window.location.href = "Home.php";
            break;
        case 'service' :
            window.location.href = "Service.php";
            break;
        case 'about' :
            window.location.href = "About.php";
            break;
        case 'contact' :
            window.location.href = "Contact.php";
            break;
    }
}