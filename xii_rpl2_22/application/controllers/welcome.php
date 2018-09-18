<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
		parent::__construct();
		session_start(); 
		if(isset($_SESSION['uname']))
		{
			redirect ("user");
		}
	}
	public function index()
	{
		$this->load->view('header');
		$this->load->view('index');
		$this->load->view('footer');
	}
	
	public function about()
	{
		$this->load->view('header');
		$this->load->view('v_about');
		$this->load->view('footer');
	}
	public function katalog()
	{
		$data['katalog']=$this->m_buku->tampil_buku();	
		$this->load->view('header');
		$this->load->view('v_catalog',$data);
		$this->load->view('footer');
	}
	public function login()
	{
		$this->load->view('header');
		$this->load->view('v_login');
		$this->load->view('footer');
	}
	public function buku()
	{
		$this->load->view('headerbuku');
		$this->load->view('v_buku');
		$this->load->view('footer');
	}
}

	
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
