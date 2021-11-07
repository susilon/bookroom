<?php

namespace Controllers;

class CacheController extends \System\BaseController
{

	public function index() { 
		$this->output->cache(1); 
		$this->load->view('test'); 
	 }
	   
	 public function delete_file_cache() { 
		$this->output->delete_cache('cachecontroller'); 
	 } 

}