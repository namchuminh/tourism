<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_BaiViet extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getAllCategory(){
		$sql = "SELECT * FROM chuyenmuc WHERE TrangThai = 1";
		$result = $this->db->query($sql);
		return $result->result_array();
	}

	public function checkNumber()
	{
		$sql = "SELECT * FROM baiviet WHERE TrangThai = 1";
		$result = $this->db->query($sql);
		return $result->num_rows();
	}

	public function getAll($start = 0, $end = 10){
		$sql = "SELECT baiviet.*, nhanvien.MaNhanVien, nhanvien.TenNhanVien, chuyenmuc.TenChuyenMuc FROM baiviet, nhanvien, chuyenmuc WHERE baiviet.MaNhanVien = nhanvien.MaNhanVien AND baiviet.MaChuyenMuc = chuyenmuc.MaChuyenMuc AND baiviet.TrangThai = 1 ORDER BY baiviet.Mabaiviet DESC LIMIT ?, ?";
		$result = $this->db->query($sql, array($start, $end));
		return $result->result_array();
	}

	public function addNews($TieuDe,$NoiDung,$AnhChinh,$DuongDan,$ChuyenMuc,$The,$MaNhanVien){
		$data = array(
	        "TieuDe" => $TieuDe,
	        "NoiDung" => $NoiDung,
	        "AnhChinh" => $AnhChinh,
	        "DuongDan" => $DuongDan,
	        'MaChuyenMuc' => $ChuyenMuc,
	        "The" => $The,
	        "MaNhanVien" => $MaNhanVien
	    );

	    $this->db->insert('baiviet', $data);
	    $lastInsertedId = $this->db->insert_id();

	    return $lastInsertedId;
	}


	public function getById($Mabaiviet){
		$sql = "SELECT * FROM baiviet WHERE Mabaiviet = ?";
		$result = $this->db->query($sql, array($Mabaiviet));
		return $result->result_array();
	}

	public function update($TieuDe,$NoiDung,$AnhChinh,$DuongDan,$MaChuyenMuc,$The,$Mabaiviet){
		$sql = "UPDATE `baiviet` SET `TieuDe`=?,`NoiDung`=?,`AnhChinh`=?,`DuongDan`=?,`MaChuyenMuc`=?,`The`=? WHERE `Mabaiviet`= ?";
		$result = $this->db->query($sql, array($TieuDe,$NoiDung,$AnhChinh,$DuongDan,$MaChuyenMuc,$The,$Mabaiviet));
		return $result;
	}

	public function updateNoImage($TieuDe,$NoiDung,$DuongDan,$MaChuyenMuc,$The,$Mabaiviet){
		$sql = "UPDATE `baiviet` SET `TieuDe`=?,`NoiDung`=?,`DuongDan`=?,`MaChuyenMuc`=?, `The`=? WHERE `Mabaiviet`= ?";
		$result = $this->db->query($sql, array($TieuDe,$NoiDung,$DuongDan,$MaChuyenMuc,$The,$Mabaiviet));
		return $result;
	}

	public function remove($Mabaiviet){
		$sql = "UPDATE `baiviet` SET `TrangThai`= 0 WHERE `Mabaiviet`= ?";
		$result = $this->db->query($sql,array($Mabaiviet));
		return $result;
	}

	public function checkNumberTrash(){
		$sql = "SELECT * FROM baiviet WHERE TrangThai = 0";
		$result = $this->db->query($sql);
		return $result->num_rows();
	}

	public function getAllTrash($start = 0, $end = 10){
		$sql = "SELECT baiviet.*, nhanvien.MaNhanVien, nhanvien.TenNhanVien, chuyenmuc.TenChuyenMuc FROM baiviet, nhanvien, chuyenmuc WHERE baiviet.MaNhanVien = nhanvien.MaNhanVien AND baiviet.MaChuyenMuc = chuyenmuc.MaChuyenMuc AND baiviet.TrangThai = 0 ORDER BY baiviet.Mabaiviet DESC LIMIT ?, ?";
		$result = $this->db->query($sql, array($start, $end));
		return $result->result_array();
	}

	public function reset($Mabaiviet){
		$sql = "UPDATE `baiviet` SET `TrangThai`= 1 WHERE `Mabaiviet`= ?";
		$result = $this->db->query($sql,array($Mabaiviet));
		return $result;
	}

	public function resetAll(){
		$sql = "UPDATE `baiviet` SET `TrangThai`= 1 WHERE `TrangThai`= 0";
		$result = $this->db->query($sql);
		return $result;
	}

	public function delete($Mabaiviet){
		$sql = "DELETE FROM `baiviet` WHERE `Mabaiviet`= ? AND `TrangThai` = 0";
		$result = $this->db->query($sql,array($Mabaiviet));
		return $result;
	}

	public function deleteAll(){
		$sql = "DELETE FROM `baiviet` WHERE `TrangThai` = 0";
		$result = $this->db->query($sql);
		return $result;
	}
}

/* End of file Model_baiviet.php */
/* Location: ./application/models/Model_baiviet.php */