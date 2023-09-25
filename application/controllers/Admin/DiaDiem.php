<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DiaDiem extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->has_userdata('taikhoan')){
			return redirect(base_url('admin/dang-nhap/'));
		}
		$data = array();
		$this->load->model('Admin/Model_DiaDiem');
	}

	public function index()
	{
		$totalRecords = $this->Model_DiaDiem->checkNumber();
		$recordsPerPage = 10;
		$totalPages = ceil($totalRecords / $recordsPerPage); 

		$data['totalPages'] = $totalPages;
		$data['list'] = $this->Model_DiaDiem->getAll();
		return $this->load->view('Admin/View_DiaDiem', $data);
	}

	public function Page($trang){

		$totalRecords = $this->Model_DiaDiem->checkNumber();
		$recordsPerPage = 10;
		$totalPages = ceil($totalRecords / $recordsPerPage); 

		if($trang < 1){
			return redirect(base_url('admin/dia-diem/'));
		}

		if($trang > $totalPages){
			return redirect(base_url('admin/dia-diem/'));
		}

		$start = ($trang - 1) * $recordsPerPage;


		if($start == 0){
			$data['totalPages'] = $totalPages;
			$data['list'] = $this->Model_DiaDiem->getAll();
			return $this->load->view('Admin/View_DiaDiem', $data);
		}else{
			$data['totalPages'] = $totalPages;
			$data['list'] = $this->Model_DiaDiem->getAll($start);
			return $this->load->view('Admin/View_DiaDiem', $data);
		}
	}

	public function Add(){
		$data['category'] = $this->Model_DiaDiem->getAllCategory();
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$tendiemden = $this->input->post('tendiemden');
			$duongdan = $this->input->post('duongdan');
			$mota = $this->input->post('mota');
			$chuyenmuc = $this->input->post('chuyenmuc');
			$quocgia = $this->input->post('quocgia');
			$yeucauvisa = $this->input->post('yeucauvisa');
			$dientich = $this->input->post('dientich');
			$the = $this->input->post('the');
			$donvitien = $this->input->post('donvitien');
			$ngonngu = $this->input->post('ngonngu');


			$anhchinh = "";
			$hinhanh = "";

			//Add image
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('anhchinh')){
				$imageChinh = $this->upload->data();
				$anhchinh = base_url('uploads')."/".$imageChinh['file_name'];
			}


			$targetDir = "uploads/";

	        if (!empty($_FILES['images']['name'][0])) {
	            foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
	                $fileName = $_FILES['images']['name'][$key];
	                $filePath = $targetDir . $fileName;
	                move_uploaded_file($tmp_name, $filePath);
	               	$hinhanh .= base_url($filePath)."#";
	            }
	        } else {
	            echo "No images uploaded.";
	            return;
	        }

			$hinhanh = substr($hinhanh, 0, -1); 
			
			$this->Model_DiaDiem->add($tendiemden,$duongdan,$anhchinh,$mota,$chuyenmuc,$quocgia,$the,$dientich,$donvitien,$hinhanh,$yeucauvisa,$ngonngu);

			$data['success'] = "Thêm địa điểm thành công!";
			return $this->load->view('Admin/View_ThemDiaDiem', $data);
		}

		return $this->load->view('Admin/View_ThemDiaDiem',$data);
	}

	public function Update($MaDiemDen){
		if(count($this->Model_DiaDiem->getById($MaDiemDen)) == 0){
			return redirect(base_url('admin/dia-diem/'));
		}

		$data['category'] = $this->Model_DiaDiem->getAllCategory();
		$data['detail'] = $this->Model_DiaDiem->getById($MaDiemDen);
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$tendiemden = $this->input->post('tendiemden');
			$duongdan = $this->input->post('duongdan');
			$mota = $this->input->post('mota');
			$chuyenmuc = $this->input->post('chuyenmuc');
			$quocgia = $this->input->post('quocgia');
			$yeucauvisa = $this->input->post('yeucauvisa');
			$dientich = $this->input->post('dientich');
			$the = $this->input->post('the');
			$donvitien = $this->input->post('donvitien');
			$ngonngu = $this->input->post('ngonngu');

			//Update image
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('anhchinh')){
				$imageChinh = $this->upload->data();
				$anhchinh = base_url('uploads')."/".$imageChinh['file_name'];
				$this->Model_DiaDiem->updateAnhChinh($MaDiemDen,$anhchinh);
			}

			$targetDir = "uploads/";
			$hinhanh = "";
	        if (!empty($_FILES['images']['name'][0])) {
	            foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
	                $fileName = $_FILES['images']['name'][$key];
	                $filePath = $targetDir . $fileName;
	                move_uploaded_file($tmp_name, $filePath);
	               	$hinhanh .= base_url($filePath)."#";
	            }

	            $hinhanh = substr($hinhanh, 0, -1);

	            $this->Model_DiaDiem->updateHinhAnh($MaDiemDen,$hinhanh);
	        }

	        $this->Model_DiaDiem->update($tendiemden,$duongdan,$mota,$chuyenmuc,$quocgia,$yeucauvisa,$dientich,$the,$donvitien,$ngonngu,$MaDiemDen);

			$data['detail'] = $this->Model_DiaDiem->getById($MaDiemDen);
			$data['success'] = "Cập nhật địa điểm thành công!";
			return $this->load->view('Admin/View_SuaDiaDiem', $data);
		}
		return $this->load->view('Admin/View_SuaDiaDiem', $data);
	}

	public function remove($MaDiemDen){
		$this->Model_DiaDiem->remove($MaDiemDen);
		return redirect(base_url('admin/dia-diem/'));
	}

	public function trash(){
		$totalRecords = $this->Model_DiaDiem->checkNumberTrash();
		$recordsPerPage = 10;
		$totalPages = ceil($totalRecords / $recordsPerPage); 

		$data['totalPages'] = $totalPages;
		$data['list'] = $this->Model_DiaDiem->getAllTrash();
		return $this->load->view('Admin/View_ThungRacDiaDiem', $data);
	}

	public function PageTrash($trang){

		$totalRecords = $this->Model_DiaDiem->checkNumberTrash();
		$recordsPerPage = 10;
		$totalPages = ceil($totalRecords / $recordsPerPage); 

		if($trang < 1){
			return redirect(base_url('admin/dia-diem/thung-rac/'));
		}

		if($trang > $totalPages){
			return redirect(base_url('admin/dia-diem/thung-rac/'));
		}

		$start = ($trang - 1) * $recordsPerPage;


		if($start == 0){
			$data['totalPages'] = $totalPages;
			$data['list'] = $this->Model_DiaDiem->getAllTrash();
			return $this->load->view('Admin/View_ThungRacDiaDiem', $data);
		}else{
			$data['totalPages'] = $totalPages;
			$data['list'] = $this->Model_DiaDiem->getAllTrash($start);
			return $this->load->view('Admin/View_ThungRacDiaDiem', $data);
		}
	}

	public function reset($MaDiemDen){
		$this->Model_DiaDiem->reset($MaDiemDen);
		return redirect(base_url('admin/dia-diem/thung-rac/'));
	}

	public function resetAll(){
		$this->Model_DiaDiem->resetAll();
		return redirect(base_url('admin/dia-diem/thung-rac/'));
	}

	public function delete($MaDiemDen){
		$this->Model_DiaDiem->delete($MaDiemDen);
		return redirect(base_url('admin/dia-diem/thung-rac/'));
	}

	public function deleteAll(){
		$this->Model_DiaDiem->deleteAll();
		return redirect(base_url('admin/dia-diem/thung-rac/'));
	}

}

/* End of file ChuyenMuc.php */
/* Location: ./application/controllers/ChuyenMuc.php */