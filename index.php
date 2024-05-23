<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Photobooth Gallery - josp.io</title>

	<link rel="stylesheet" href="./style.css">
</head>

<body>

	<div id="gallery">

		<?php

		$files = scandir('./img');
		foreach ($files as $img):
			if ($img != '.' && $img != '..'):
				?>

				<!-- thumbnail image wrapped in a link -->
				<a href="#<?= $img ?>">
					<img src="./img/<?= $img ?>">
				</a>

				<!-- lightbox container hidden with CSS -->
				<a href="#" class="lightbox" id="<?= $img ?>">
					<span style="background-image: url('./img/<?= $img ?>')"></span>
				</a>

				<!--<img src="./img/<?= $img ?>">-->

			<?php endif; endforeach; ?>

	</div>

</body>

</html>