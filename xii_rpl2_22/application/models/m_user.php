<?php
	class m_user extends CI_Model {
		function dologin($uname,$kunci){
			return $this->db->query("SELECT * FROM tuser WHERE uname='$uname' and kunci='$kunci'");
		}
		function getbyid($uname)
		{
			return $this->db->where("uname",$uname)->get("tuser");
		}
		function adduser($user)
		{
			$this->db->insert("tuser",$user);
		}
		function gantipass($id,$data)
		{
			$this->db->where("peminjam_kode",$id);
			$this->db->update("tuser",$data);
		}
	}
?>