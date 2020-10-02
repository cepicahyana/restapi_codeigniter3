<?php
use Restserver\Libraries\REST_Controller;
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';
class Api extends REST_Controller {

 
	public function index_get()
	{
		echo "helo";
	}
	function helo_get()
	{
		echo "helo get";
	}
}
