<?php

class page_xHR_page_owner_dashboard extends page_xHR_page_owner_main{
	function init(){
		parent::init();
		$this->app->title=$this->api->current_department['name'] .': Dashboard';

		$this->add('PageHint')->set('HR Dashboard ... Under Construction');
	}
}