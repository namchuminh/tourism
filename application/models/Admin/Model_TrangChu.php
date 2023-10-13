<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_TrangChu extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function sumTicketDay(){
		return $this->db->query("SELECT SUM(SoLuongVe) AS TongSoLuongVe FROM datve WHERE DAY(NgayDatVe) = DAY(CURDATE()) AND MONTH(NgayDatVe) = MONTH(CURDATE()) AND YEAR(NgayDatVe) = YEAR(CURDATE()) AND TrangThai >= 1")->result_array();
	}

	public function sumTicketWeek(){
		return $this->db->query("SELECT SUM(SoLuongVe) AS TongSoLuongVe FROM datve WHERE WEEK(NgayDatVe) = WEEK(CURDATE()) AND TrangThai >= 1;")->result_array();
	}

	public function sumRevenueDay(){
		return $this->db->query("SELECT datve.*, chuyendi.GiaChuyenDi FROM chuyendi,datve WHERE chuyendi.MaChuyenDi = datve.MaChuyenDi AND DAY(datve.NgayDatVe) = DAY(CURDATE()) AND MONTH(datve.NgayDatVe) = MONTH(CURDATE()) AND YEAR(datve.NgayDatVe) = YEAR(CURDATE()) AND datve.TrangThai = 4;")->result_array();
	}

	public function sumRevenueWeek(){
		return $this->db->query("SELECT datve.*, chuyendi.GiaChuyenDi FROM chuyendi,datve WHERE chuyendi.MaChuyenDi = datve.MaChuyenDi AND WEEK(NgayDatVe) = WEEK(CURDATE()) AND datve.TrangThai = 4;")->result_array();
	}

	public function tourStart(){
		return $this->db->query("SELECT * FROM chuyendi WHERE TrangThai = 1 AND DAY(GioKhoiHanh) > DAY(CURDATE()) AND MONTH(GioKhoiHanh) = MONTH(CURDATE()) AND YEAR(GioKhoiHanh) = YEAR(CURDATE())")->result_array();
	}


	public function sumCumstomerDay(){
		return $this->db->query("SELECT * FROM khachhang WHERE TrangThai = 1 AND DAY(NgayThamGia) = DAY(CURDATE()) AND MONTH(NgayThamGia) = MONTH(CURDATE()) AND YEAR(NgayThamGia) = YEAR(CURDATE())")->result_array();
	}

	public function sumCumstomerWeek(){
		return $this->db->query("SELECT * FROM khachhang WHERE TrangThai = 1 AND WEEK(NgayThamGia) = WEEK(CURDATE())")->result_array();
	}

	public function getSumRevenue($thang){
		$sql = "SELECT SUM(datve.SoLuongVe * chuyendi.GiaChuyenDi) AS TongDoanhThu FROM datve JOIN chuyendi ON datve.MaChuyenDi = chuyendi.MaChuyenDi WHERE MONTH(datve.NgayDatVe) = ?";
		$result = $this->db->query($sql, array($thang));
		return $result->result_array();
	}
}

/* End of file Model_TrangChu.php */
/* Location: ./application/models/Model_TrangChu.php */