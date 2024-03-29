<?php include 'server-info.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>System Info</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1>Server & File Info</h1>
			<?php if($server):?>
				<ul class="list-group">
				<?php foreach($server as $key => $value): ?>
					<li class="list-group-item">
						<strong><?php echo $key?>: </strong>
						<?php echo $value?>
					</li>
				<?php endforeach ?>
				</ul>
			<?php endif; ?>	
		<h1>Client Info</h1>
		<?php if($client):?>
			<ul class="list-group">
			<?php foreach($client as $key => $value): ?>
				<li class="list-group-item">
					<strong><?php echo $key?>: </strong>
					<?php echo $value?>
				</li>
			<?php endforeach ?>
			</ul>
		<?php endif; ?>	
	</div>
</body>
</html>