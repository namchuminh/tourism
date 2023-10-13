<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_ChuyenDi extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function checkNumber()
	{
		$sql = "SELECT * FROM chuyendi WHERE TrangThai = 1";
		$result = $this->db->query($sql);
		return $result->num_rows();
	}

	public function getAll(){
		return $this->db->query("SELECT chuyendi.*, diemden.TenDiemDen FROM chuyendi, diemden WHERE chuyendi.MaDiemDen = diemden.MaDiemDen AND chuyendi.TrangThai = 1")->result_array();
	}

	public function getBySlug($duongdan){
		return $this->db->query("SELECT chuyendi.*, diemden.TenDiemDen FROM diemden, chuyendi WHERE diemden.MaDiemDen = chuyendi.MaDiemDen AND chuyendi.TrangThai = 1 AND chuyendi.DuongDan = ?", array($duongdan))->result_array();
	}

	public function getPlanByIdTour($machuyendi){
		return $this->db->query("SELECT * FROM `lichtrinh` WHERE MaChuyenDi = ?", array($machuyendi))->result_array();
	}

	public function getImageByIdTour($machuyendi){
		return $this->db->query("SELECT * FROM `hinhanh` WHERE MaChuyenDi = ?", array($machuyendi))->result_array();
	}

	public function getLocationByIdTour($machuyendi){
		return $this->db->query("SELECT * FROM `vitri` WHERE MaChuyenDi = ?", array($machuyendi))->result_array();
	}

	public function orderTicket($MaChuyenDi,$SoLuongVe,$TenKhachHang,$Email,$SoDienThoai,$LoaiKhachHang,$LoiNhan){
		$data = array(
	        "MaChuyenDi" => $MaChuyenDi,
	        "SoLuongVe" => $SoLuongVe,
	        "TenKhachHang" => $TenKhachHang,
	        "Email" => $Email,
	        "SoDienThoai" => $SoDienThoai,
	        "LoaiKhachHang" => $LoaiKhachHang,
	        "LoiNhan" => $LoiNhan,
	    );

	    $this->db->insert('datve', $data);
	    $lastInsertedId = $this->db->insert_id();

	    return $lastInsertedId;
	}

	public function updateIdOrderTicket($MaTimKiem,$MaDatVe){
		return $this->db->query("UPDATE `datve` SET `MaTimKiem` = ? WHERE MaDatVe = ?", array($MaTimKiem,$MaDatVe));
	}

	public function searchHome($madiemden, $thang, $loaichuyendi){
	    return $this->db->query("SELECT chuyendi.*, diemden.TenDiemDen FROM chuyendi, diemden WHERE chuyendi.MaDiemDen = diemden.MaDiemDen AND chuyendi.MaDiemDen = ? AND MONTH(chuyendi.GioKhoiHanh) = ? AND chuyendi.LoaiChuyenDi = ? AND chuyendi.TrangThai = 1", array($madiemden, $thang, $loaichuyendi))->result_array();
	}

	public function search($madiemden, $thang, $min_gia, $max_gia, $loaichuyendi){
	    if ($loaichuyendi == NULL) {
	    	return $this->db->query("SELECT chuyendi.*, diemden.TenDiemDen FROM chuyendi, diemden WHERE chuyendi.MaDiemDen = diemden.MaDiemDen AND chuyendi.MaDiemDen = ? AND MONTH(chuyendi.GioKhoiHanh) = ? AND chuyendi.GiaChuyenDi >= ? AND chuyendi.GiaChuyenDi <= ? AND chuyendi.TrangThai = 1", array($madiemden, $thang, $min_gia, $max_gia))->result_array();
	    } else {
	        return $this->db->query("SELECT chuyendi.*, diemden.TenDiemDen FROM chuyendi, diemden WHERE chuyendi.MaDiemDen = diemden.MaDiemDen AND chuyendi.MaDiemDen = ? AND MONTH(chuyendi.GioKhoiHanh) = ? AND chuyendi.GiaChuyenDi >= ? AND chuyendi.GiaChuyenDi <= ? AND LoaiChuyenDi IN ? AND chuyendi.TrangThai = 1", array($madiemden, $thang, $min_gia, $max_gia, $loaichuyendi))->result_array();
	    }
	}

}

/* End of file Model_TinTuc.php */
/* Location: ./application/models/Model_TinTuc.php */