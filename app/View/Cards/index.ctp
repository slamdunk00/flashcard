<?php
	echo 'This is cards index.ctp';
<<<<<<< HEAD
	//echo $this->Html->image('../cardImg/Penguins.jpg', array('width' => '200px','alt'=>'Little Penguins'));
	// echo '<img src="cardImg/Penguins.jpg" width="40px" height="40px">';
	?>
	<table align = 'center'>
	
	<tr>
	<td>Deck Name</td>
	<td>deck</td>
	</tr>
	
	<tr>
	<td>Deck Description</td>
	<td>deck</td>
	</tr>
	
	<tr>
	<td>Deck Category</td>
	<td>deck</td>
	</tr>
	</table>
	
	
	<?php echo '<li><p>'.$this->Html->link( " Add New Card ",   array('controller'=>'cards','action'=>'add' ,'?' => array('deck_id' => $deck_id )) ).'</p></li>'; ?>
	<?php echo '<li><p>'.$this->Html->link( " Edit Deck ",   array('controller'=>'decks','action'=>'edit' ,'?' => array('deck_id' => $deck_id )) ).'</p></li>'; ?>
	<?php echo '<li><p>'.$this->Html->link( " Delete Deck ",   array('controller'=>'decks','action'=>'delete' , ) ).'</p></li>'; ?>
	<?php echo $this->SocialShare->link('facebook',__('Share on Facebook')); ?>






 <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
=======
	// echo $this->Html->image('../cardImg/Penguins.jpg', array('width' => '200px','alt'=>'Little Penguins'));
	// echo '<img src="cardImg/Penguins.jpg" width="40px" height="40px">';
?>
 <div class="flip-container" ontouchstart="this.classList.toggle('hover');" id="card-container">
>>>>>>> origin/master
	<div class="flipper">
<?php foreach($cards as $card):
	echo	'<div class="front">';
	echo	$card['Card']['front'];
<<<<<<< HEAD
	//echo $this->Html->image('../cardImg/Penguins.jpg', array('width' => '200px','alt'=>'Little Penguins'));
=======
	// echo $this->Html->image('../cardImg/Penguins.jpg', array('width' => '200px','alt'=>'Little Penguins'));
>>>>>>> origin/master
	echo	'</div>';
	echo	'<div class="back">';
	echo	$card['Card']['back'];
	echo	'</div>';
	endforeach; 
<<<<<<< HEAD
	
=======
>>>>>>> origin/master
 ?>
	</div>
</div>

<<<<<<< HEAD
<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
<?php echo ' '.$this->Paginator->numbers(array(   'class' => 'numbers'     ));?>
<?php echo ' '.$this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
=======
<span style="margin-right:10px;"><?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?></span>
<?php echo $this->Paginator->numbers(array(   'class' => 'numbers'     ));?>
<span style="margin-left:10px;"><?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?></span>
>>>>>>> origin/master
