<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_TrangChu extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
	}

	public function getAllLocation(){
		return $this->db->query("SELECT * FROM diemden WHERE TrangThai = 1")->result_array();
	}

	public function getAllNews(){
		return $this->db->query("SELECT baiviet.*, chuyenmuc.TenChuyenMuc FROM baiviet, chuyenmuc WHERE baiviet.MaChuyenMuc = chuyenmuc.MaChuyenMuc AND baiviet.TrangThai = 1 ORDER BY MaBaiViet DESC LIMIT 3")->result_array();
	}

	public function getAllTour(){
		return $this->db->query("SELECT chuyendi.*, diemden.TenDiemDen FROM chuyendi, diemden WHERE chuyendi.MaDiemDen = diemden.MaDiemDen AND chuyendi.TrangThai = 1")->result_array();
	}

	public function resultViewTicket($MaTimKiem){
		$sql = "SELECT datve.*, chuyendi.* FROM datve, chuyendi WHERE datve.MaChuyenDi = chuyendi.MaChuyenDi AND datve.MaTimKiem = ?";
		$result = $this->db->query($sql, array($MaTimKiem));
		return $result->result_array();
	}

	public function getLocationById($madiemden){
		return $this->db->query("SELECT * FROM diemden WHERE TrangThai = 1 AND MaDiemDen = ?", array($madiemden))->result_array();
	}

}

/* End of file Model_TrangChu.php */
/* Location: ./application/models/Model_TrangChu.php */