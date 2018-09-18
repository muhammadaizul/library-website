<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class katalog_user extends CI_Controller {
	function __construct(){
		parent::__construct();
		session_start();
		if(!isset($_SESSION['uname']))
		{
			redirect ("welcome");
		}
	}
	function index()
	{
		$id=$_SESSION['id'];
		$this->load->view('header_user');
		$content['katalog'] = $this->m_katalog->get();
		$this->load->view("katalog_user",$content);
		$this->load->view('footer');
	}
	function download()
	{
		$this->load->view('header_user');
		$content['katalog'] = $this->m_katalog->get();
		$this->load->view("download",$content);
		$this->load->view('footer');
	}
	function detail($id){
			$this->load->view('header_user');
			$content['buku']=$this->m_katalog->get($id);
			$this->load->view("katalog_detail",$content);
			$this->load->view('footer');
	}
	function pinjam($kdb)
	{
		$id=$_SESSION['id'];
		$tgls=date("d-m-Y");
		$newtgl=strtotime('+7 day',strtotime($tgls));
		$newtgl=date('Y-m-j',$newtgl);
		$data=array
		(
		'peminjaman_kode'=>"p".$tgls,
		'peminjam_kode'=>$id,
		'buku_kode'=>$kdb,
		'peminjaman_tgl'=>date("Y-m-d"),
		'peminjaman_tgl_hrs_kembali'=>$newtgl
		);
		$this->m_peminjaman->add($data);
		redirect ("katalog_user/ket_pinjam/".$newtgl);
	}
	function ket_pinjam()
	{
		$tglw=$this->uri->segment(3);
		echo "anda harus ngembaliin tanggal !".$tglw."<a href='".base_url('index.php/welcome')."'>Kembali</a>";
		
	}
	function cek($kdb)
	{
		$id=$_SESSION['id'];
		$qb=$this->m_peminjaman->cek_buku($id,$kdb);
		if($qb==1)
		{
			echo "anda sudah meminjam buku yang berkode".$kdb;
		}else
		{
			redirect ("katalog_user/pinjam/".$kdb);
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
