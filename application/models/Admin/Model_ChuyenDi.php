<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_ChuyenDi extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getAllDestinations(){
		$sql = "SELECT * FROM diemden WHERE TrangThai = 1";
		$result = $this->db->query($sql);
		return $result->result_array();
	}

	public function checkNumber()
	{
		$sql = "SELECT * FROM chuyendi WHERE TrangThai = 1";
		$result = $this->db->query($sql);
		return $result->num_rows();
	}

	public function getAll($start = 0, $end = 10){
		$sql = "SELECT chuyendi.*, diemden.TenDiemDen FROM chuyendi, diemden WHERE chuyendi.MaDiemDen = diemden.MaDiemDen AND chuyendi.TrangThai = 1 ORDER BY chuyendi.MaChuyenDi DESC LIMIT ?, ?";
		$result = $this->db->query($sql, array($start, $end));
		return $result->result_array();
	}

	public function addTour($tenchuyendi,$duongdan,$anhchinh,$diemden,$motangan,$loaichuyendi,$giachuyendi,$diemkhoihanh,$gioquayve,$dotuoi,$giokhoihanh,$quydinhtrangphuc,$baogom,$khongbaogom){
		$data = array(
	        "TenChuyenDi" => $tenchuyendi,
	        "DuongDan" => $duongdan,
	        "AnhChinh" => $anhchinh,
	        "MaDiemDen" => $diemden,
	        "MoTaNgan" => $motangan,
	        "LoaiChuyenDi" => $loaichuyendi,
	        "GiaChuyenDi" => $giachuyendi,
	        "DiemKhoiHanh" => $diemkhoihanh,
	        "GioQuayVe" => $gioquayve,
	        "DoTuoi" => $dotuoi,
	        "GioKhoiHanh" => $giokhoihanh,
	        "QuyDinhTrangPhuc" => $quydinhtrangphuc,
	        "BaoGom" => $baogom,
	        "KhongBaoGom" => $khongbaogom,
	    );

	    $this->db->insert('chuyendi', $data);
	    $lastInsertedId = $this->db->insert_id();

	    return $lastInsertedId;
	}

	public function insertImage($hinhanh,$MaChuyenDi){
		$sql = "INSERT INTO `hinhanh`(`MaChuyenDi`, `DuongDan`) VALUES (?,?)";
		$result = $this->db->query($sql, array($MaChuyenDi,$hinhanh));
		return $result;
	}

	public function getImage($MaChuyenDi){
		$sql = "SELECT * FROM hinhanh WHERE MaChuyenDi = ?";
		$result = $this->db->query($sql, array($MaChuyenDi));
		return $result->result_array();
	}

	public function deleteImage($MaChuyenDi){
		$sql = "DELETE FROM `hinhanh` WHERE MaChuyenDi = ?";
		$result = $this->db->query($sql, array($MaChuyenDi));
		return $result;
	}

	public function getAllList($MaChuyenDi){
		$sql = "SELECT * FROM lichtrinh WHERE MaChuyenDi = ?";
		$result = $this->db->query($sql, array($MaChuyenDi));
		return $result->result_array();
	}

	public function addList($MaChuyenDi,$TieuDe,$NoiDung){
		$data = array(
	        "MaChuyenDi" => $MaChuyenDi,
	        "TieuDe" => $TieuDe,
	        "NoiDung" => $NoiDung
	    );

	    $this->db->insert('lichtrinh', $data);
	    $lastInsertedId = $this->db->insert_id();

	    return $lastInsertedId;
	}

	public function updateList($MaLichTrinh,$tieude,$noidung){
		$sql = "UPDATE lichtrinh SET TieuDe = ?, NoiDung = ? WHERE MaLichTrinh = ?";
		$result = $this->db->query($sql, array($tieude,$noidung,$MaLichTrinh));
		return $result;
	}


	public function getAllLocation($MaChuyenDi){
		$sql = "SELECT * FROM vitri WHERE MaChuyenDi = ?";
		$result = $this->db->query($sql, array($MaChuyenDi));
		return $result->result_array();
	}

	public function addLocation($MaChuyenDi,$motangan,$motadai,$bando){
		$data = array(
	        "MaChuyenDi" => $MaChuyenDi,
	        "MoTaNgan" => $motangan,
	        "MoTaDai" => $motadai,
	        "BanDo" => $bando
	    );

	    $this->db->insert('vitri', $data);
	    $lastInsertedId = $this->db->insert_id();
	    return $lastInsertedId;
	}

	public function updateLocation($MaChuyenDi,$motangan,$motadai,$bando){
		$sql = "UPDATE vitri SET MoTaNgan = ?, MoTaDai = ?, BanDo = ? WHERE MaChuyenDi = ?";
		$result = $this->db->query($sql, array($motangan,$motadai,$bando,$MaChuyenDi));
		return $result;
	}


	public function getById($MaChuyenDi){
		$sql = "SELECT * FROM chuyendi WHERE MaChuyenDi = ?";
		$result = $this->db->query($sql, array($MaChuyenDi));
		return $result->result_array();
	}

	public function update($tenchuyendi,$giachuyendi,$anhchinh,$motangan,$diemden,$loaichuyendi,$diemkhoihanh,$giokhoihanh,$gioquayve,$quydinhtrangphuc,$baogom,$khongbaogom,$duongdan,$dotuoi,$MaChuyenDi){
		$sql = "UPDATE `chuyendi` SET `TenChuyenDi`=?,`GiaChuyenDi`=?,`AnhChinh`=?,`MoTaNgan`=?,`MaDiemDen`=?,`LoaiChuyenDi`=?,`DiemKhoiHanh`=?,`GioKhoiHanh`=?,`GioQuayVe`=?,`QuyDinhTrangPhuc`=?,`BaoGom`=?,`KhongBaoGom`=?,`DuongDan`=?,`DoTuoi`=? WHERE `MaChuyenDi`= ?";
		$result = $this->db->query($sql, array($tenchuyendi,$giachuyendi,$anhchinh,$motangan,$diemden,$loaichuyendi,$diemkhoihanh,$giokhoihanh,$gioquayve,$quydinhtrangphuc,$baogom,$khongbaogom,$duongdan,$dotuoi,$MaChuyenDi));
		return $result;
	}

	public function updateNoImage($tenchuyendi,$giachuyendi,$motangan,$diemden,$loaichuyendi,$diemkhoihanh,$giokhoihanh,$gioquayve,$quydinhtrangphuc,$baogom,$khongbaogom,$duongdan,$dotuoi,$MaChuyenDi){
		$sql = "UPDATE `chuyendi` SET `TenChuyenDi`=?,`GiaChuyenDi`=?,`MoTaNgan`=?,`MaDiemDen`=?,`LoaiChuyenDi`=?,`DiemKhoiHanh`=?,`GioKhoiHanh`=?,`GioQuayVe`=?,`QuyDinhTrangPhuc`=?,`BaoGom`=?,`KhongBaoGom`=?,`DuongDan`=?,`DoTuoi`=? WHERE `MaChuyenDi`= ?";
		$result = $this->db->query($sql, array($tenchuyendi,$giachuyendi,$motangan,$diemden,$loaichuyendi,$diemkhoihanh,$giokhoihanh,$gioquayve,$quydinhtrangphuc,$baogom,$khongbaogom,$duongdan,$dotuoi,$MaChuyenDi));
		return $result;
	}

	public function remove($MaChuyenDi){
		$sql = "UPDATE `chuyendi` SET `TrangThai`= 0 WHERE `MaChuyenDi`= ?";
		$result = $this->db->query($sql,array($MaChuyenDi));
		return $result;
	}

	public function checkNumberTrash(){
		$sql = "SELECT * FROM chuyendi WHERE TrangThai = 0";
		$result = $this->db->query($sql);
		return $result->num_rows();
	}

	public function getAllTrash($start = 0, $end = 10){
		$sql = "SELECT chuyendi.*, diemden.TenDiemDen FROM chuyendi, diemden WHERE chuyendi.MaDiemDen = diemden.MaDiemDen AND chuyendi.TrangThai = 0 ORDER BY chuyendi.MaChuyenDi DESC LIMIT ?, ?";
		$result = $this->db->query($sql, array($start, $end));
		return $result->result_array();
	}

	public function reset($MaChuyenDi){
		$sql = "UPDATE `chuyendi` SET `TrangThai`= 1 WHERE `MaChuyenDi`= ?";
		$result = $this->db->query($sql,array($MaChuyenDi));
		return $result;
	}

	public function resetAll(){
		$sql = "UPDATE `chuyendi` SET `TrangThai`= 1 WHERE `TrangThai`= 0";
		$result = $this->db->query($sql);
		return $result;
	}

	public function delete($MaChuyenDi){
		$sql = "DELETE FROM `chuyendi` WHERE `MaChuyenDi`= ? AND `TrangThai` = 0";
		$result = $this->db->query($sql,array($MaChuyenDi));

		$this->db->query("DELETE FROM `hinhanh` WHERE `MaChuyenDi`= ?",array($MaChuyenDi));
		$this->db->query("DELETE FROM `lichtrinh` WHERE `MaChuyenDi`= ?",array($MaChuyenDi));
		$this->db->query("DELETE FROM `vitri` WHERE `MaChuyenDi`= ?",array($MaChuyenDi));

		return $result;
	}

	public function deleteAll(){
		$sql = "DELETE FROM `chuyendi` WHERE `TrangThai` = 0";
		$result = $this->db->query($sql);
		return $result;
	}
}

/* End of file Model_chuyendi.php */
/* Location: ./application/models/Model_chuyendi.php */