<?php
namespace xShop;

class Model_Order_Processing extends Model_Order{
	public $actions=array(
			'can_view'=>array('caption'=>'Whose created Order(processing) this post can see'),
			
		);
	
	function init(){
		parent::init();

		$this->addCondition('status','processing');
	}
}