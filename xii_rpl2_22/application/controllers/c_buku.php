<?php
	class c_buku extends CI_Controller{
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
			$data['data_buku'] = $this->m_buku->get();
			$this->load->view('home_admin');
			$this->load->view('v_buku',$data);
			$this->load->view('footer');
			}
		function home(){
			$this->load->view('home_admin');
			$this->load->view('index');
			$this->load->view('footer');
			
		}
		function form(){
			$query=$this->db->query("select * from buku order by buku_kode desc limit 1 ");
		foreach($query->result() as $kd){
			$kdp=$kd->buku_kode;
			$kdpp=++$kdp;
			$data['kd']=$kdpp;
		}
		$data['kdk']=$this->m_buku->kategori();
		$data['kdpe']=$this->m_buku->penerbit();
			
			
			$this->load->view('home_admin');
			$this->load->view('v_buku_form',$data);
			$this->load->view('footer');
			}
		function formedit($id){
			$data["buku"]=$this->m_buku->getbyid($id);
			$this->load->view('home_admin');
			$this->load->view('v_buku_form_edit',$data);
			$this->load->view('footer');
			}
		function add(){
			$data=array(
				'buku_kode' => $this->input->post('txkode'),
				'kategori_kode' => $this->input->post('txkategori'),
				'penerbit_kode' => $this->input->post('txpenerbit'),
				'buku_judul' => $this->input->post('txjudul'),
				'buku_jumhal' => $this->input->post('txjumhal'),
				'buku_deskripsi' => $this->input->post('txdeskripsi'),
				'buku_pengarang' => $this->input->post('txpengarang'),
				'buku_tahun_terbit' => $this->input->post('txtahun')
				);
			//memasukkan data ke model
			$this->m_buku->add($data);
			redirect('c_buku');
			}
		function del($kode){
			$this->m_buku->del($kode);
			redirect('c_buku');
			}
		function simpanedit(){
			$data=array(
				'buku_kode' => $this->input->post('txkode'),
				'kategori_kode' => $this->input->post('txkategori'),
				'penerbit_kode' => $this->input->post('txpenerbit'),
				'buku_judul' => $this->input->post('txjudul'),
				'buku_jumhal' => $this->input->post('txjumhal'),
				'buku_deskripsi' => $this->input->post('txdeskripsi'),
				'buku_pengarang' => $this->input->post('txpengarang'),
				'buku_tahun_terbit' => $this->input->post('txtahun')
				);
			$this->m_buku->simpanedit($data);
			redirect('c_buku');				
			}
		
		
}
