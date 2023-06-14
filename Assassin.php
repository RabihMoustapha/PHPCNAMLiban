<!doctype html>
<html>

<head>
    <title>ASSASSIN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Assassin.css" type="text/css" rel="stylesheet">
    <script type="text/javascript">
	function hide() {
    var iframe = document.getElementById("i1");
    if (iframe.style.visibility === "hidden")
        iframe.style.visibility = "visible";
    else
        iframe.style.visibility = "hidden";
}
	</script>
</head>

<body>
    <table border="1" align="center">
        <tr class="p2">
            <td>
                <iframe id="i1" src="https://www.youtube.com/embed/8zKjfxispy0" title="assassin creed gameplay"
                    allowfullscreen allow="autoplay;gyroscope;encrypted-media"></iframe>
            </td>
            <td valign="bottom">
                <button onclick="hide()">Click</button>
            </td>
        </tr>
    </table>
</body>

</html>