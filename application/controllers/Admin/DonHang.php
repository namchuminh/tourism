<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DonHang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->has_userdata('taikhoan')){
			return redirect(base_url('admin/dang-nhap/'));
		}
		$data = array();
		$this->load->model('Admin/Model_DonHang');
	}

	public function index()
	{
		$totalRecords = $this->Model_DonHang->checkNumber();
		$recordsPerPage = 10;
		$totalPages = ceil($totalRecords / $recordsPerPage); 

		$data['totalPages'] = $totalPages;
		$data['list'] = $this->Model_DonHang->getAll();
		return $this->load->view('Admin/View_DonHang', $data);
	}

	public function Page($trang){

		$totalRecords = $this->Model_DonHang->checkNumber();
		$recordsPerPage = 10;
		$totalPages = ceil($totalRecords / $recordsPerPage); 

		if($trang < 1){
			return redirect(base_url('admin/don-hang/'));
		}

		if($trang > $totalPages){
			return redirect(base_url('admin/don-hang/'));
		}

		$start = ($trang - 1) * $recordsPerPage;


		if($start == 0){
			$data['totalPages'] = $totalPages;
			$data['list'] = $this->Model_DonHang->getAll();
			return $this->load->view('Admin/View_DonHang', $data);
		}else{
			$data['totalPages'] = $totalPages;
			$data['list'] = $this->Model_DonHang->getAll($start);
			return $this->load->view('Admin/View_DonHang', $data);
		}
	}

	public function action($MaHanhDong, $MaDatVe){
		$this->Model_DonHang->action($MaHanhDong, $MaDatVe);
		return redirect(base_url('admin/don-hang/'));
	}

	public function remove($MaDatVe){
		$this->Model_DonHang->remove($MaDatVe);
		return redirect(base_url('admin/don-hang/'));
	}

	public function trash(){
		$totalRecords = $this->Model_DonHang->checkNumberTrash();
		$recordsPerPage = 10;
		$totalPages = ceil($totalRecords / $recordsPerPage); 

		$data['totalPages'] = $totalPages;
		$data['list'] = $this->Model_DonHang->getAllTrash();
		return $this->load->view('Admin/View_ThungRacDonHang', $data);
	}

	public function PageTrash($trang){

		$totalRecords = $this->Model_DonHang->checkNumberTrash();
		$recordsPerPage = 10;
		$totalPages = ceil($totalRecords / $recordsPerPage); 

		if($trang < 1){
			return redirect(base_url('admin/don-hang/thung-rac/'));
		}

		if($trang > $totalPages){
			return redirect(base_url('admin/don-hang/thung-rac/'));
		}

		$start = ($trang - 1) * $recordsPerPage;


		if($start == 0){
			$data['totalPages'] = $totalPages;
			$data['list'] = $this->Model_DonHang->getAllTrash();
			return $this->load->view('Admin/View_ThungRacChuyenMuc', $data);
		}else{
			$data['totalPages'] = $totalPages;
			$data['list'] = $this->Model_DonHang->getAllTrash($start);
			return $this->load->view('Admin/View_ThungRacChuyenMuc', $data);
		}
	}

	public function reset($MaDatVe){
		$this->Model_DonHang->reset($MaDatVe);
		return redirect(base_url('admin/don-hang/thung-rac/'));
	}

	public function resetAll(){
		$this->Model_DonHang->resetAll();
		return redirect(base_url('admin/don-hang/thung-rac/'));
	}

	public function delete($MaDatVe){
		$this->Model_DonHang->delete($MaDatVe);
		return redirect(base_url('admin/don-hang/thung-rac/'));
	}

	public function deleteAll(){
		$this->Model_DonHang->deleteAll();
		return redirect(base_url('admin/don-hang/thung-rac/'));
	}

	public function View($MaDatVe){
		$data['detail'] = $this->Model_DonHang->getDetailOrderById($MaDatVe);
		return $this->load->view('Admin/View_XemDonHang', $data);
	}
}

/* End of file DonHang.php */
/* Location: ./application/controllers/DonHang.php */