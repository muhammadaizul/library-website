<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Katalog extends CI_Controller {
	function __construct(){
		parent::__construct();
		session_start();
		if(isset($_SESSION['uname']))
		{
			redirect ("user");
		}
	}
	function index()
	{
		$this->load->view('header');
		$content['katalog'] = $this->m_katalog->get();
		$this->load->view("katalog",$content);
		$this->load->view('footer');
	}
	function detail($id = FALSE)
		{
			$this->load->view('header');
			$content['buku'] = $this->m_katalog->get($id);
			$this->load->view("katalog_detail_awam",$content);
			$this->load->view('footer');
		
	}
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
