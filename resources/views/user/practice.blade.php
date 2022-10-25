<?php foreach($sbit as $val): ?>

	<?= $val ?>
	<br>
	<?php endforeach ?>


@unless($sbit)
not data in an array
@endunless

	@foreach($sbit as $val)

	 {{$val}} 
	<br>
	@endforeach 

