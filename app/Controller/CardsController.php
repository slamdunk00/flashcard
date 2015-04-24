<?php
class CardsController extends AppController {
	
	public $use = [ 'User' ];
 
    public function index(){
		if($this->Session->check('Auth.User')){
		}
	}
 
}
?>