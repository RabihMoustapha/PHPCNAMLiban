function accept() {
	var p = prompt("Yes or No?");
	p = p.toUpperCase();
	if (p === "YES") {
		alert("Ok accept");
		window.location.href = "Contact.php";
	} else {
		if (p === "NO")
			alert("Thanks for viewing my website");
		else
			alert("Enter one of thiese two values");
	}
}