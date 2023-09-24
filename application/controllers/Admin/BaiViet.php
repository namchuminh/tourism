<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class BaiViet extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->has_userdata('taikhoan')){
			return redirect(base_url('admin/dang-nhap/'));
		}

		$data = array();
		$this->load->model('Admin/Model_BaiViet');
		$this->load->model('Admin/Model_DangNhap');
	}

	public function index()
	{

		$totalRecords = $this->Model_BaiViet->checkNumber();
		$recordsPerPage = 10;
		$totalPages = ceil($totalRecords / $recordsPerPage); 

		$data['totalPages'] = $totalPages;
		$data['list'] = $this->Model_BaiViet->getAll();
		return $this->load->view('Admin/View_BaiViet', $data);
	}

	public function Page($trang){

		$totalRecords = $this->Model_BaiViet->checkNumber();
		$recordsPerPage = 10;
		$totalPages = ceil($totalRecords / $recordsPerPage); 

		if($trang < 1){
			return redirect(base_url('admin/bai-viet/'));
		}

		if($trang > $totalPages){
			return redirect(base_url('admin/bai-viet/'));
		}

		$start = ($trang - 1) * $recordsPerPage;


		if($start == 0){
			$data['totalPages'] = $totalPages;
			$data['list'] = $this->Model_BaiViet->getAll();
			return $this->load->view('Admin/View_BaiViet', $data);
		}else{
			$data['totalPages'] = $totalPages;
			$data['list'] = $this->Model_BaiViet->getAll($start);
			return $this->load->view('Admin/View_BaiViet', $data);
		}
	}

	public function Add(){
		$data['category'] = $this->Model_BaiViet->getAllCategory();
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$tenbaiviet = $this->input->post('tenbaiviet');
			$duongdan = $this->input->post('duongdan');
			$the = $this->input->post('the');
			$noidung = $this->input->post('noidung');
			$machuyenmuc = $this->input->post('chuyenmuc');
			$anhchinh = "";

			if(empty($tenbaiviet) || empty($duongdan) || empty($the) || empty($noidung)){
				$data['error'] = "Vui lòng nhập đủ thông tin bài viết!";
				return $this->load->view('Admin/View_ThemBaiViet', $data);
			}
			$regex = '/^.{1,500}$/u';
			if (!preg_match($regex, $tenbaiviet)) {
				$data['error'] = "Tên bài viết phải là hợp lệ và dưới 500 ký tứ!";
				return $this->load->view('Admin/View_ThemBaiViet', $data);
			}

			if (empty($_FILES['anhchinh']['name'])){
				$data['error'] = "Vui lòng nhập ảnh chính của tin tức!";
				return $this->load->view('Admin/View_ThemBaiViet', $data);
			}


			//Add image
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('anhchinh')){
				$imageChinh = $this->upload->data();
				$anhchinh = base_url('uploads')."/".$imageChinh['file_name'];
			}

			$MaNhanVien = $this->Model_DangNhap->getInfoByUsername($this->session->userdata('taikhoan'))[0]['MaNhanVien'];
			
			//Add news
			$masanpham = $this->Model_BaiViet->addNews($tenbaiviet,$noidung,$anhchinh,$duongdan,$machuyenmuc,$the,$MaNhanVien);

			$data['success'] = "Thêm tin tức thành công!";
			return $this->load->view('Admin/View_ThemBaiViet', $data);
		}
		return $this->load->view('Admin/View_ThemBaiViet', $data);
	}

	public function Update($MaBaiViet){
		if(count($this->Model_BaiViet->getById($MaBaiViet)) == 0){
			return redirect(base_url('admin/bai-viet/'));
		}

		$data['category'] = $this->Model_BaiViet->getAllCategory();
		$data['detail'] = $this->Model_BaiViet->getById($MaBaiViet);
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$tenbaiviet = $this->input->post('tenbaiviet');
			$duongdan = $this->input->post('duongdan');
			$the = $this->input->post('the');
			$noidung = $this->input->post('noidung');
			$machuyenmuc = $this->input->post('chuyenmuc');
			$anhchinh = "";

			if(empty($tenbaiviet) || empty($duongdan) || empty($the) || empty($noidung)){
				$data['error'] = "Vui lòng nhập đủ thông tin bài viết!";
				return $this->load->view('Admin/View_ThemBaiViet', $data);
			}
			$regex = '/^.{1,500}$/u';
			if (!preg_match($regex, $tenbaiviet)) {
				$data['error'] = "Tên bài viết phải là hợp lệ và dưới 500 ký tứ!";
				return $this->load->view('Admin/View_ThemBaiViet', $data);
			}


			//Update image
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg|webp';

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('anhchinh')){
				$imageChinh = $this->upload->data();
				$anhchinh = base_url('uploads')."/".$imageChinh['file_name'];
				$this->Model_BaiViet->update($tenbaiviet,$noidung,$anhchinh,$duongdan,$machuyenmuc,$the,$MaBaiViet);
			}

			$this->Model_BaiViet->updateNoImage($tenbaiviet,$noidung,$duongdan,$machuyenmuc,$the,$MaBaiViet);

			$data['detail'] = $this->Model_BaiViet->getById($MaBaiViet);
			$data['success'] = "Cập nhật tin tức thành công!";
			return $this->load->view('Admin/View_SuaBaiViet', $data);

		}
		return $this->load->view('Admin/View_SuaBaiViet', $data);
	}

	public function remove($MaBaiViet){
		$this->Model_BaiViet->remove($MaBaiViet);
		return redirect(base_url('admin/bai-viet/'));
	}

	public function trash(){
		$totalRecords = $this->Model_BaiViet->checkNumberTrash();
		$recordsPerPage = 10;
		$totalPages = ceil($totalRecords / $recordsPerPage); 

		$data['totalPages'] = $totalPages;
		$data['list'] = $this->Model_BaiViet->getAllTrash();
		return $this->load->view('Admin/View_ThungRacBaiViet', $data);
	}

	public function PageTrash($trang){

		$totalRecords = $this->Model_BaiViet->checkNumberTrash();
		$recordsPerPage = 10;
		$totalPages = ceil($totalRecords / $recordsPerPage); 

		if($trang < 1){
			return redirect(base_url('admin/bai-viet/thung-rac/'));
		}

		if($trang > $totalPages){
			return redirect(base_url('admin/bai-viet/thung-rac/'));
		}

		$start = ($trang - 1) * $recordsPerPage;


		if($start == 0){
			$data['totalPages'] = $totalPages;
			$data['list'] = $this->Model_BaiViet->getAllTrash();
			return $this->load->view('Admin/View_ThungRacBaiViet', $data);
		}else{
			$data['totalPages'] = $totalPages;
			$data['list'] = $this->Model_BaiViet->getAllTrash($start);
			return $this->load->view('Admin/View_ThungRacBaiViet', $data);
		}
	}

	public function reset($MaBaiViet){
		$this->Model_BaiViet->reset($MaBaiViet);
		return redirect(base_url('admin/bai-viet/thung-rac/'));
	}

	public function resetAll(){
		$this->Model_BaiViet->resetAll();
		return redirect(base_url('admin/bai-viet/thung-rac/'));
	}

	public function delete($MaBaiViet){
		$this->Model_BaiViet->delete($MaBaiViet);
		return redirect(base_url('admin/bai-viet/thung-rac/'));
	}

	public function deleteAll(){
		$this->Model_BaiViet->deleteAll();
		return redirect(base_url('admin/bai-viet/thung-rac/'));
	}
}

/* End of file TinTuc.php */
/* Location: ./application/controllers/TinTuc.php */