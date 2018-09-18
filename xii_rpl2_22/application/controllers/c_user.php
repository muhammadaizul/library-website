
<?php
	class c_user extends CI_Controller{
		function __construct()
		{
			parent ::__construct();
			//script untuk mengaktifkan model
			$this->load->model('m_buku');
			$userid=$this->session->userdata("jenis_login");
			if($userid==false)
			redirect("welcome/login");
		}
		
		function index(){
			//menjalankan model
			$data['data_buku'] = $this->m_buku->get();
			$this->load->view('v_buku_user',$data);
			}
		function home(){
			$this->load->view('home_user');
		}
		function feedback() {
			$this->load->view('feedback_user');
		}
		function about() {
			$this->load->view('About_user');
		}	
		function novel() {
			$this->load->model('m_buku');
			$data['data_buku'] = $this->m_buku->get();
			$this->load->view('novel_user',$data);
		}
			
}
