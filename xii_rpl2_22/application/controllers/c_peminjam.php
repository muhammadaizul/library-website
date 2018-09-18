<?php
	class c_peminjam extends CI_Controller{
		function __construct(){
		parent::__construct();
		session_start();
		if(!isset($_SESSION['adm']))
		{
			redirect ("welcome");
		}
	}
		
		function index(){
			//menjalankan model
			$data['data_peminjam'] = $this->m_peminjam->get();
			$this->load->view('home_admin');
			$this->load->view('v_peminjam',$data);
			$this->load->view('footer');
	}
		function form(){
			$query=$this->db->query("select * from peminjam order by peminjam_kode desc limit 1 ");
		foreach($query->result() as $kd){
			$kdp=$kd->peminjam_kode;
			$kdpp=++$kdp;
			$data['kd']=$kdpp;
		}
			$this->load->view('home_admin');
			$this->load->view('v_peminjam_form',$data);
			$this->load->view('footer');
			}
		function formedit($id){
			$data["peminjam"]=$this->m_peminjam->getbyid($id);
			$this->load->view('home_admin');
			$this->load->view('v_peminjam_form_edit',$data);
			$this->load->view('footer');
			}
		function add(){
					/*$this->input->post('txkode');
			$this->input->post('txnama');
			$this->input->post('txalamat');
			$this->input->post('txtelp');
			$this->input->post('txfoto');*/
			$data=array(
				'peminjam_kode' => $this->input->post('txkode'),
				'peminjam_nama' => $this->input->post('txnama'),
				'peminjam_alamat' => $this->input->post('txalamat'),
				'peminjam_telp' => $this->input->post('txtelp'),
				'peminjam_foto' => $this->input->post('txfoto')
				);
			$user=array(
				'peminjam_kode' => $this->input->post('txkode'),
				'uname'=> $this->input->post('txnama'),
				'password'=>'user123'
			);
			//memasukkan data ke model
			$this->m_peminjam->add($data);
			$this->m_peminjam->adduser($user);
			redirect('c_peminjam');
			}
		function simpanedit(){
			$data=array(
				'peminjam_kode' => $this->input->post('txpeminjam'),
				'peminjam_nama' => $this->input->post('txnama'),
				'peminjam_alamat' => $this->input->post('txalamat'),
				'peminjam_telp' => $this->input->post('txtelp'),
				'peminjam_foto' => $this->input->post('txfoto'),
				);
			$this->m_peminjam->simpanedit($data);
			redirect('c_peminjam');				
			}
			function del($kode){
				$this->m_peminjam->del($kode);
				redirect('c_peminjam');
				}
}
