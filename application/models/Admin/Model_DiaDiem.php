<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_DiaDiem extends CI_Model {

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

	public function add($tendiemden,$duongdan,$anhchinh,$mota,$chuyenmuc,$quocgia,$the,$dientich,$donvitien,$hinhanh,$yeucauvisa,$ngonngu){
		$data = array(
	        "TenDiemDen" => $tendiemden,
	        "MoTa" => $mota,
	        "AnhChinh" => $anhchinh,
	        "HinhAnh" => $hinhanh,
	        "QuocGia" => $quocgia,
	        "YeuCauVisa" => $yeucauvisa,
	        "NgonNgu" => $ngonngu,
	        "DonViTien" => $donvitien,
	        "DienTich" => $dientich,
	        "The" => $the,
	        "DuongDan" => $duongdan,
	        "MaChuyenMuc" => $chuyenmuc
	    );

	    $this->db->insert('diemden', $data);
	    $lastInsertedId = $this->db->insert_id();

	    return $lastInsertedId;
	}

	public function checkNumber()
	{
		$sql = "SELECT * FROM diemden WHERE TrangThai = 1";
		$result = $this->db->query($sql);
		return $result->num_rows();
	}

	public function getAll($start = 0, $end = 10){
		$sql = "SELECT diemden.*, chuyenmuc.TenChuyenMuc FROM diemden, chuyenmuc WHERE diemden.MaChuyenMuc = chuyenmuc.MaChuyenMuc AND diemden.TrangThai = 1 ORDER BY MaDiemDen DESC LIMIT ?, ?";
		$result = $this->db->query($sql, array($start, $end));
		return $result->result_array();
	}

	public function getById($MaDiemDen){
		$sql = "SELECT diemden.*, chuyenmuc.TenChuyenMuc FROM diemden, chuyenmuc WHERE diemden.MaChuyenMuc = chuyenmuc.MaChuyenMuc AND MaDiemDen = ?";
		$result = $this->db->query($sql, array($MaDiemDen));
		return $result->result_array();
	}

	public function update($tendiemden,$duongdan,$mota,$chuyenmuc,$quocgia,$yeucauvisa,$dientich,$the,$donvitien,$ngonngu,$MaDiemDen){
		$sql = "UPDATE `diemden` SET `TenDiemDen`=?,`DuongDan`=?,`MoTa`=?,`MaChuyenMuc`=?,`QuocGia`=?,`YeuCauVisa`=?,`DienTich`=?,`The`=?,`DonViTien`=?,`NgonNgu`=? WHERE `MaDiemDen`= ?";
		$result = $this->db->query($sql, array($tendiemden,$duongdan,$mota,$chuyenmuc,$quocgia,$yeucauvisa,$dientich,$the,$donvitien,$ngonngu,$MaDiemDen));
		return $result;
	}

	public function updateAnhChinh($MaDiemDen,$anhchinh){
		$sql = "UPDATE `diemden` SET `AnhChinh`=? WHERE `MaDiemDen`= ?";
		$result = $this->db->query($sql, array($anhchinh,$MaDiemDen));
		return $result;
	}

	public function updateHinhAnh($MaDiemDen,$hinhanh){
		$sql = "UPDATE `diemden` SET `HinhAnh`=? WHERE `MaDiemDen`= ?";
		$result = $this->db->query($sql, array($hinhanh,$MaDiemDen));
		return $result;
	}

	public function remove($MaDiemDen){
		$sql = "UPDATE `diemden` SET `TrangThai`= 0 WHERE `MaDiemDen`= ?";
		$result = $this->db->query($sql,array($MaDiemDen));
		return $result;
	}

	public function checkNumberTrash(){
		$sql = "SELECT * FROM diemden WHERE TrangThai = 0";
		$result = $this->db->query($sql);
		return $result->num_rows();
	}

	public function getAllTrash($start = 0, $end = 10){
		$sql = "SELECT diemden.*, chuyenmuc.TenChuyenMuc FROM diemden, chuyenmuc WHERE diemden.MaChuyenMuc = chuyenmuc.MaChuyenMuc AND diemden.TrangThai = 0 ORDER BY MaDiemDen DESC LIMIT ?, ?";
		$result = $this->db->query($sql, array($start, $end));
		return $result->result_array();
	}

	public function reset($MaDiemDen){
		$sql = "UPDATE `diemden` SET `TrangThai`= 1 WHERE `MaDiemDen`= ?";
		$result = $this->db->query($sql,array($MaDiemDen));
		return $result;
	}

	public function resetAll(){
		$sql = "UPDATE `diemden` SET `TrangThai`= 1 WHERE `TrangThai`= 0";
		$result = $this->db->query($sql);
		return $result;
	}

	public function delete($MaDiemDen){
		$sql = "DELETE FROM `diemden` WHERE `MaDiemDen`= ? AND `TrangThai` = 0";
		$result = $this->db->query($sql,array($MaDiemDen));
		return $result;
	}

	public function deleteAll(){
		$sql = "DELETE FROM `diemden` WHERE `TrangThai` = 0";
		$result = $this->db->query($sql);
		return $result;
	}

}

/* End of file Model_diemden.php */
/* Location: ./application/models/Model_diemden.php */