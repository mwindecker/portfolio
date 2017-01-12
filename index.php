<?php
	require_once('server/bootstrap.php');

	$main = new Main; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Coming Soon! // Marcus Windecker -- Missoula Web Development</title>
</head>
<body>
	<h1 style="text-align: center; margin-top: 300px;">COMING SOON!</h1>

	<?php if ($main->isDevEnvironment()) : ?>
	<script>
		console.log("dev");
	</script>
	<?php endif; ?>

</body>
</html>