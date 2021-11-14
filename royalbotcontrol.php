<html>
	<head>
		<title>Royal Games</title>
		<link href="favicon.ico" rel="shortcut icon"></link>
		<script src="javascripts/jquery-1.js"></script>
		<script src="javascripts/jquery-migrate-1.js"></script>
		<link rel="stylesheet" href="stylesheets/bootstrap.css"></link>
		<link rel="stylesheet" href="stylesheets/bootstrap-theme.css"></link>
		<script src="javascripts/bootstrap.min.js"></script>
		<link href="http://fonts.googleapis.com/css?family=Ubuntu:400,700,400italic" rel="stylesheet" type="text/css"></link>
		<link href="stylesheets/royalgames.css" rel="stylesheet"></link>
		<script src="javascripts/hide.js"></script>
	</head>
	<body ng-app="royal">
		<div class="jumbotron jumbotron-royalgames">
			<div class="container">
				<h1 class="text-center">
					Royal Games
				</h1>
				<center>"<span id="citazioni"></span>"</center>
				<script src="javascripts/citazioni.js"></script>
			</div>
		</div>
		<div class="container">
			<div id="main">
				<p>
					Pannello di controllo di Royal Bot!
					Se sei qui, sei un h4xx0r
				<p>
				<input>
				</input>
			</div>
		</div>
	</body>
	<script>
		var getUpdates = <?php
			$offset = file_get_contents("telegram.json");
			$telegram = file_get_contents("https://api.telegram.org/bot120621161:AAHeVgQhlfGx36KT9NyGemauZBPEbe9Xfv0/getUpdates?limit=1&offset=" . $offset);
			file_put_contents("telegram.json", $telegram['result'][0]['update_id'] + 1);
		?>;
	</script>
</html>
