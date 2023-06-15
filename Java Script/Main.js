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
            window.location.href = "../PHP/Home.php";
            break;
        case 'service' :
            window.location.href = "../PHP/Service.php";
            break;
        case 'about' :
            window.location.href = "../PHP/About.php";
            break;
        case 'contact' :
            window.location.href = "../PHP/Contact.php";
            break;
    }
}