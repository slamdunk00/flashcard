<?php
	echo 'This is cards index.ctp';
	// echo $this->Html->image('../cardImg/Penguins.jpg', array('width' => '200px','alt'=>'Little Penguins'));
	// echo '<img src="cardImg/Penguins.jpg" width="40px" height="40px">';
?>

 <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
	<div class="flipper">
<?php
// echo $this->Paginator->sort('id','id');
foreach($cards as $card):
	echo	'<div class="front">';
	echo	$card['Card']['front'];
	// echo $this->Html->image('../cardImg/Penguins.jpg', array('width' => '200px','alt'=>'Little Penguins'));
	echo	'</div>';
	echo	'<div class="back">';
	echo	$card['Card']['back'];
	echo	'</div>';
	endforeach; 
 ?>
	</div>
</div>

<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
<?php echo $this->Paginator->numbers(array(   'class' => 'numbers'     ));?>
<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>