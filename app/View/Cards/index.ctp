<?php
	echo 'This is cards index.ctp';
	// echo $this->Html->image('../cardImg/Penguins.jpg', array('width' => '200px','alt'=>'Little Penguins'));
	// echo '<img src="cardImg/Penguins.jpg" width="40px" height="40px">';
?>
<?php foreach($cards as $card): ?> 
<?php echo $card['Card']['front']; ?>
<?php echo $card['Card']['back']; ?>
 <?php endforeach; ?>