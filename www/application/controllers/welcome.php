<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->library("smarty_tpl");
		$this->smarty_tpl->assign("Vas","VAS");
		$this->smarty_tpl->display("header.tpl");
		
	}
}