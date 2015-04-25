<?php  echo 'This is Deck index.ctp<br/>';?>
<?php foreach($decks as $deck): ?> 
<?php echo '<u>'; ?>
<?php echo $this->Html->link( $deck['Deck']['name'],   array('controller'=>'cards','action'=>'index', $deck['Deck']['id']) ); ?>
<?php echo '</u>'; ?>
<?php echo ' by '.$deck['Deck']['user_id'].'<br/>'; ?>
 <?php endforeach; ?>
