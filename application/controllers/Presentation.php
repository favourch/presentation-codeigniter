<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Presentation extends CI_Controller {

	/**
	 * This controller method loads a presentation creation interface
	 *
	 */
	public function create()
	{
		$this->load->helper('url');
		$this->load->view('presentation/create');
	}

}
