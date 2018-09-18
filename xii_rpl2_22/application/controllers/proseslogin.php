<?php
class proseslogin extends CI_Controller
{
		function __construct()
		{
		parent::__construct();
		session_start(); 
		}
	function index(){
		if(isset($_SESSION['uname']))
		{
			redirect ("user");
		}
		$uname=$this->input->post('uname');
		$kunci=$this->input->post('sandi');
		$login=$this->m_user->dologin($uname,$kunci);
		if($login->num_rows()>0){
			$data_login=$login->result();
			foreach($data_login as $baris){
				$jenis_login=$baris->jenis;
			}
		$this->session->set_userdata(array("jenis_login"=>$jenis_login));
			if($jenis_login == "admin")
			{
				$_SESSION['adm']="mimin";
				redirect ("Admin");	
			}else{
				$q_id=$this->m_user->getbyid($uname);
				foreach($q_id->result() as $id)
				{	
					$_SESSION['uname']=$id->uname;
					$_SESSION['id']=$id->peminjam_kode;
					redirect ("user");
				}
			}
		}
		else{
			echo "Username atau Password salah";
		}

	}
	function logout(){
			session_destroy();
			$this->session->sess_destroy();
			redirect('welcome');
	}
}