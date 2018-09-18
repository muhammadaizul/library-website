<?php
	class m_peminjam extends CI_Model{
		function get(){
			return $this->db->query("SELECT * FROM peminjam")->result(); //menampilkan data make return
			}
		function getbyid($id){
			return $this->db->query("SELECT * FROM peminjam where peminjam_kode='$id'")->result(); //menampilkan data make return
			}
		function add($data){
			$this->db->insert('peminjam',$data);
}
		function del($kode){	
			$this->db->query("DELETE FROM peminjam WHERE peminjam_kode='$kode'");
			}
		function simpanedit($data){
			$this->db->where("peminjam_kode",$data['peminjam_kode']);
			$this->db->update('peminjam',$data);
			}
		function getuser($id)
		{
			return $this->db
			->where("peminjam_kode",$id)
			->get("tuser")->result();
		}
			
}
?>
