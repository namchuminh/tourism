<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_DonHang extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function checkNumber()
	{
		$sql = "SELECT * FROM datve WHERE TrangThai != 0";
		$result = $this->db->query($sql);
		return $result->num_rows();
	}

	public function getAll($start = 0, $end = 10){
		$sql = "SELECT datve.*, chuyendi.TenChuyenDi, chuyendi.GiaChuyenDi FROM datve, chuyendi WHERE datve.MaChuyenDi = chuyendi.MaChuyenDi AND datve.TrangThai != -1 ORDER BY datve.Madatve DESC LIMIT ?, ?";
		$result = $this->db->query($sql, array($start, $end));
		return $result->result_array();
	}

	public function getById($Madatve){
		$sql = "SELECT * FROM datve WHERE Madatve = ?";
		$result = $this->db->query($sql, array($Madatve));
		return $result->result_array();
	}

	public function action($MaHanhDong, $Madatve){
		$sql = "UPDATE `datve` SET `TrangThai`=? WHERE `Madatve`= ?";
		$result = $this->db->query($sql, array($MaHanhDong, $Madatve));
		return $result;
	}

	public function remove($Madatve){
		$sql = "UPDATE `datve` SET `TrangThai`=0 WHERE `Madatve`= ? AND TrangThai != 4";
		$result = $this->db->query($sql, array($Madatve));
		return $result;
	}

	public function checkNumberTrash(){
		$sql = "SELECT * FROM datve WHERE TrangThai < 1";
		$result = $this->db->query($sql);
		return $result->num_rows();
	}

	public function getAllTrash($start = 0, $end = 10){
		$sql = "SELECT * FROM datve WHERE TrangThai < 1 ORDER BY Madatve DESC LIMIT ?, ?";
		$result = $this->db->query($sql, array($start, $end));
		return $result->result_array();
	}

	public function reset($Madatve){
		$sql = "UPDATE `datve` SET `TrangThai`= 1 WHERE `Madatve`= ? AND `TrangThai` < 1";
		$result = $this->db->query($sql,array($Madatve));
		return $result;
	}

	public function resetAll(){
		$sql = "UPDATE `datve` SET `TrangThai`= 1 WHERE `TrangThai` < 1";
		$result = $this->db->query($sql);
		return $result;
	}

	public function delete($Madatve){
		$sql = "DELETE FROM `datve` WHERE `Madatve`= ? AND `TrangThai` < 1";
		$result = $this->db->query($sql,array($Madatve));
		return $result;
	}

	public function deleteAll(){
		$sql = "DELETE FROM `datve` WHERE `TrangThai` < 1";
		$result = $this->db->query($sql);
		return $result;
	}

	public function getDetailOrderById($Madatve){
		$sql = "SELECT datve.*, chuyendi.TenChuyenDi, chuyendi.GiaChuyenDi FROM datve, chuyendi WHERE datve.MaChuyenDi = chuyendi.MaChuyenDi AND datve.TrangThai != -1 AND datve.Madatve = ?";
		$result = $this->db->query($sql, array($Madatve));
		return $result->result_array();
	}

}

/* End of file Model_datve.php */
/* Location: ./application/models/Model_datve.php */