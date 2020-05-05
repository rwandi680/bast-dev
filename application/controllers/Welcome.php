<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	var $API = "";

	function __construct() {
        parent::__construct();
        $this->API="http://192.168.101.20/cobaww/api/sipkd/";
        // $this->load->library('session');
        $this->load->library('curl');
        // $this->load->helper('form');
        $this->load->helper('url');
    }

	public function index()
	{
		// $this->load->view('welcome_message');
		$data = json_encode($this->curl->simple_get($this->API));
        return $data;
    }
    

    public function coba()
    {
        $this->load->view('welcome_message');
    }
}
