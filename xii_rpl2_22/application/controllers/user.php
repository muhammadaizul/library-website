<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

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
		if(isset($_SESSION['adm']))
		{
			redirect ("Admin");
		}
		if(!isset($_SESSION['uname']))
		{
			redirect ("welcome");
		}
	}
	public function index()
	{
		$id=$_SESSION['id'];
		$data['notif']=$this->db->query("select * from peminjaman where peminjam_kode='".$id."' and status='1'")->result();
		$this->load->view('header_user');
		$this->load->view('index_user',$data);
		$this->load->view('footer');
	}
	function form_pass()
	{
		$this->load->view('header_user');
		$this->load->view('v_ganti_pass');
		$this->load->view('footer');
	}
	function gantipass()
	{
		$id=$_SESSION['id'];
		$pass=$this->input->post("oldpass");
		$passbaru=$this->input->post("newpass");
		$qpass=$this->m_peminjam->getuser($id);
		foreach($qpass as $p)
		{
			$passlama=$p->kunci;
			if($pass==$passlama)
			{
				$data=array
				(
					'kunci'=>$passbaru
				);
				$this->m_user->gantipass($id,$data);
				redirect ("user");
			}
			else
			{
				echo "Maaf password tidak sesuai dengan password lama";
			}
		}
	}
}

	
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
