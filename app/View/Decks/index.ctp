<?php  echo 'This is Deck index.ctp';?>
<h1><?php echo $cat_name; ?></h1>
<?php 
	foreach($decks as $deck):
	// foreach($deck['user'] as $user):
	echo '<u>';
<<<<<<< HEAD
	echo $this->Html->link( $deck['Deck']['name'],   array('controller'=>'cards','action'=>'index', '?' => array('deck_id' => $deck['Deck']['id'] )  ));
=======
	echo $this->Html->link( $deck['Deck']['name'],   array('controller'=>'cards','action'=>'index', $deck['Deck']['id'] ) );
>>>>>>> origin/master
	echo '</u>';
	// echo ' by '.$user['name'].'---'.$deck['Deck']['user_id'].'<br/>';
	echo ' by '.$deck['Deck']['user_id'].'<br/>';
	// endforeach;
	endforeach;
?>
