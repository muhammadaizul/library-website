<?php
	class m_peminjaman extends CI_Model
	{
		function get(){
			//return $this->db->query("SELECT * FROM peminjaman")->result(); menampilkan data make return
			return $this->db->get("peminjaman")->result();
			}
		function getbyid($id){
			return $this->db->query("SELECT * FROM peminjaman where peminjaman_kode='$id'")->result(); //menampilkan data make return
			}
		function add($data){
			$this->db->insert('peminjaman',$data);
}
		function del($kode){	
			$this->db->where('peminjaman_kode',$kode);
			$this->db->delete('peminjaman');
			}
		function simpanedit($data){
			$this->db->where('peminjaman_kode',$data['peminjaman_kode']);
			$this->db->update('peminjaman',$data);
			}
		function petugas(){
			return $this->db->get("petugas")->result();
			}
		function peminjam(){
			return $this->db->get("peminjam")->result();
			}
		function cek_buku($id,$kdb)
		{
			return $this->db
			->where("peminjam_kode",$id)
			->where("buku_kode",$kdb)
			->get("peminjaman")->num_rows();
		}
}


