<?php
class m_katalog extends CI_Model{
	function get($id = FALSE){
		if($id != FALSE)
			$this->db->where(array("buku_kode"=>$id));
		return $this->db->get("buku")->result();
	}
}
