<?php
namespace xShop;

class Model_Order_Draft extends Model_Order{
	
	public $actions=array(
			'can_view'=>array('caption'=>'Whose created Order(draft) you can see'),
			'allow_add'=>array('caption'=>'Whose created Order(draft) you can add'),
			'allow_edit'=>array('caption'=>'Whose created Order(draft) you can edit'),
			'can_submit'=>array('caption'=>'Whose Created Order(draft) you can submit '),
			'allow_del'=>array('caption'=>'Whose created Order(draft) you can delete'),
		);

	function init(){
		parent::init();

		$this->addCondition('status','draft');
	}
}