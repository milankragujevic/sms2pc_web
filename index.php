<!DOCTYPE html>
<html>
<head>
	<title>SMS2PC</title>
	<meta charset="utf-8" />
</head>
<style>
*{
	box-sizing: border-box;
}
body {
	margin: 0 auto;
	display: block;
	text-align: left;
	width: 640px;
}
.footer {
	text-align: center;
}
</style>
<body>
	<h1>SMS2PC</h1>
	<hr>
	<h3>View your messages</h3>
	<p>To view your received messages, enter the Secure Token you see when you start the app SMS2PC and click View. Don't have the app? <a href="#">Get it now!</a></p>
	<form method="get" action="viewer.php"> 
		<input type="text" name="deviceId" placeholder="XXXXXXXXXXXXXXXX" size="16"></input>
		<button type="submit">View</button>
	</form>
	<hr>
	<p class="footer">&copy; 2017 Milan Kragujević. Read the <a href="#">Privacy Policy</a>. </p>
</body>
</html>