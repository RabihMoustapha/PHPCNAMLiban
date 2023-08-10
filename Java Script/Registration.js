function display() {
    var pass = document.getElementById("pass");
    var open = document.getElementById("open");
    var close = document.getElementById("close");
    if (pass.type == "password") {
        pass.type = "text";
        open.style.display = "block";
        close.style.display = "none";
    } else {
        pass.type = "password";
        open.style.display = "none";
        close.style.display = "block";
    }
}