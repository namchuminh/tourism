<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_DiemDen extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getAll(){
		return $this->db->query("SELECT * FROM diemden WHERE TrangThai = 1")->result_array();
	}

	public function getBySlug($duongdan){
		return $this->db->query("SELECT * FROM diemden WHERE TrangThai = 1 AND DuongDan = ?", array($duongdan))->result_array();
	}

	public function getRandom($duongdan){
		return $this->db->query("SELECT * FROM diemden WHERE TrangThai = 1 AND DuongDan != ? ORDER BY RAND() LIMIT 5", array($duongdan))->result_array();
	}

	public function getAllTag(){
		return $this->db->query("SELECT The FROM diemden")->result_array();
	}

	public function search($s){
		return $this->db->query("SELECT * FROM diemden WHERE TrangThai = 1 AND TenDiemDen LIKE '%".$s."%'")->result_array();
	}

}

/* End of file Model_DiemDen.php */
/* Location: ./application/models/Model_DiemDen.php */