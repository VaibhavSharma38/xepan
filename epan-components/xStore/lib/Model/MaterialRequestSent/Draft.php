<?php
namespace xStore;
class Model_MaterialRequestSent_Draft extends Model_MaterialRequestSent{
	function init(){
		parent::init();
		$this->addCondition('status','draft');
	}
}	