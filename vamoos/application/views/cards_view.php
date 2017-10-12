<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<style>
		h1 { text-align: center; font-family: Times New Roman; color: #FFFFFF;}
	</style>
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
</head>
<body>
<br><br><br><br><br>
    <div>
		<?php echo $output; ?>
		<?php
		$mysqli = NEW MySQLi("localhost", "root", "", "vamoos");
		
		$store_entry = $mysqli->query("
		UPDATE authorise_card
		SET authorise_card.authorisedID = 3
		WHERE EXISTS (
		SELECT cardID
		FROM cards
		WHERE cards.cardID = authorise_card.cardID
		AND cards.authorisedID = 2)
		");
		?>
    </div>
</body>
</html>