<?php
	class m_buku extends CI_Model{
		function get(){
			return $this->db->query("SELECT * FROM buku")->result(); //menampilkan data make return
			}
		function add($data){
			$this->db->insert('buku',$data);
			}
		function del($kode){	
			$this->db->query("DELETE FROM buku WHERE buku_kode='$kode'");
			}
			
		function getbyid($id){
			return $this->db->query("SELECT * FROM buku where buku_kode='$id'")->result(); //menampilkan data make return
			}
		function simpanedit($data){
			$this->db->where("buku_kode",$data['buku_kode']);
			$this->db->update('buku',$data);
			}
		function kategori(){
			return $this->db->get("kategori")->result();
			}
		function penerbit(){
			return $this->db->get("penerbit")->result();
			}
		function getbyidb($kdb)
		{
			return $this->db->where("buku_kode",$kdb)->get("buku");
		}
}
?>
