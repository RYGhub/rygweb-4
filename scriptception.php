<html>
	<head>
		<script>
			var banana = 
			<?php
				echo file_get_contents("http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=042E26965C7AA24487FEBA6205017315&steamids=76561197960435530");
			?>;
		</script>
	</head>
</html>