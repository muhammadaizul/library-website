<?php
	class c_peminjaman extends CI_Controller
	{
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
			$data['data_peminjaman'] = $this->m_peminjaman->get();
			$this->load->view('home_admin');
			$this->load->view('v_peminjaman',$data);
			$this->load->view('footer');
	}
		function form(){
		$query=$this->db->query("select * from peminjaman order by peminjaman_kode desc limit 1 ");
		foreach($query->result() as $kd){
			$kdp=$kd->peminjaman_kode;
			$kdpp=++$kdp;
			$data['kd']=$kdpp;
		}
		$data['tgls']=date('Y-m-d');
		$data['kdp']=$this->m_peminjaman->petugas();
		$data['kdpm']=$this->m_peminjaman->peminjam();
			
			$this->load->view('home_admin');
			$this->load->view('v_peminjaman_form',$data);
			$this->load->view('footer');
			}
		function formedit($id){
			$data["peminjaman"]=$this->m_peminjaman->getbyid($id);
			$this->load->view('home_admin');
			$this->load->view('v_peminjaman_form_edit',$data);
			$this->load->view('footer');
			}
		function add(){
			$data=array(
				'peminjaman_kode' => $this->input->post('txkode'),
				'petugas_kode' => $this->input->post('txpetugas'),
				'peminjam_kode' => $this->input->post('txpeminjam'),
				'peminjaman_tgl' => $this->input->post('txtgl'),
				'peminjaman_tgl_hrs_kembali' => $this->input->post('txtglkembali')
				);
			/*$this->input->post('txkode');
			$this->input->post('txnama');
			$this->input->post('txalamat');
			$this->input->post('txtelp');
			$this->input->post('txfoto');*/
			//memasukkan data ke model
			$this->m_peminjaman->add($data);
			redirect ('c_peminjaman');
		}
		function simpanedit(){
			$data=array(
				'peminjaman_kode' => $this->input->post('txkode'),
				'petugas_kode' => $this->input->post('txpetugas'),
				'peminjam_kode' => $this->input->post('txpeminjam'),
				'peminjaman_tgl' => $this->input->post('txtgl'),
				'peminjaman_tgl_hrs_kembali' => $this->input->post('txtglkembali'),
				'status'=>$this->input->post('st')
				);
			$this->m_peminjaman->simpanedit($data);
			redirect ('c_peminjaman');				
			}
			
			function delp($kode)
			{
				$this->m_peminjaman->del($kode);
				redirect ('c_peminjaman');
			}
}

