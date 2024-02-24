<?php
	$loggedIn = true;
	echo ($loggedIn) ? 'Welocme User':'Welocme Guest';
?>
<div>
	<?php if($loggedIn): ?>
			<h1>Welcom User</h1>
		<?php else:?>
			<h1>Welcom Guest</h1>
	<?php endif?>
</div>	
<div>
	<?php for($i = 0;$i<10;$i++):?>
		<li><?php echo $i?></li>
	<?php endfor; ?>
</div>