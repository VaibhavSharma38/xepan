<?php

namespace xStore;

class Model_MaterialRequestReceived_Assigned extends Model_MaterialRequestReceived{
	
	function init(){
		parent::init();

		// addExpression .. assigned_to .. from log

		$this->addCondition('status','assigned');
	}

}	