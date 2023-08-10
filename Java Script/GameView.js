function teleport() {
    var intro = alert("- Home \n - Service \n - Contact \n - View \n PAGE ONLY");
    var teleport = prompt("Enter a page to teleport");
    teleport = teleport.toLowerCase();
    while (teleport != "home" && teleport != "service" && teleport != "contact" && teleport != "view") {
        intro = alert("- Home \n - Service \n - Contact \n - View \n PAGE ONLY");
        teleport = prompt("Enter a page to teleport");
        teleport = teleport.toLowerCase();
    }
    switch (teleport) {
        case 'home':
            window.location.href = "Home.php";
            break;
        case 'service':
            window.location.href = "Service.php";
            break;
        case 'contact':
            window.location.href = "Contact.php";
            break;
        case 'view':
            window.location.href = "View.php";
            break;
    }
}