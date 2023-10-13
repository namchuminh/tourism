<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_TinTuc extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function checkNumber()
	{
		$sql = "SELECT * FROM baiviet WHERE TrangThai = 1";
		$result = $this->db->query($sql);
		return $result->num_rows();
	}

	public function getAll($start = 0, $end = 6){
		return $this->db->query("SELECT baiviet.*, chuyenmuc.TenChuyenMuc FROM baiviet, chuyenmuc WHERE baiviet.MaChuyenMuc = chuyenmuc.MaChuyenMuc AND baiviet.TrangThai = 1 ORDER BY MaBaiViet DESC LIMIT ?, ?", array($start, $end))->result_array();
	}

	public function getBySlug($duongdan){
		return $this->db->query("SELECT baiviet.*, chuyenmuc.TenChuyenMuc, nhanvien.TenNhanVien, nhanvien.AnhChinh AS avt FROM baiviet, chuyenmuc, nhanvien WHERE baiviet.MaChuyenMuc = chuyenmuc.MaChuyenMuc AND baiviet.MaNhanVien = nhanvien.MaNhanVien AND baiviet.TrangThai = 1 AND baiviet.DuongDan = ?", array($duongdan))->result_array();
	}

	public function getAllCategory(){
		return $this->db->query("SELECT * FROM chuyenmuc WHERE TrangThai = 1")->result_array();
	}

	public function getRelated($machuyenmuc){
		return $this->db->query("SELECT * FROM baiviet WHERE TrangThai = 1 AND MaChuyenMuc = ? ORDER BY RAND() LIMIT 3",array($machuyenmuc))->result_array();
	}

	public function getAllTag(){
		return $this->db->query("SELECT The FROM baiviet")->result_array();
	}

	public function search($s){
		return $this->db->query("SELECT baiviet.*, chuyenmuc.TenChuyenMuc FROM baiviet, chuyenmuc WHERE baiviet.MaChuyenMuc = chuyenmuc.MaChuyenMuc AND baiviet.TrangThai = 1 AND TieuDe LIKE '%".$s."%'")->result_array();
	}

}

/* End of file Model_TinTuc.php */
/* Location: ./application/models/Model_TinTuc.php */