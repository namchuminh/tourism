<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ChuyenDi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->has_userdata('taikhoan')){
			return redirect(base_url('admin/dang-nhap/'));
		}

		$data = array();
		$this->load->model('Admin/Model_ChuyenDi');
	}

	public function index()
	{
		$totalRecords = $this->Model_ChuyenDi->checkNumber();
		$recordsPerPage = 10;
		$totalPages = ceil($totalRecords / $recordsPerPage); 

		$data['totalPages'] = $totalPages;
		$data['list'] = $this->Model_ChuyenDi->getAll();
		return $this->load->view('Admin/View_ChuyenDi', $data);
	}

	public function Page($trang){

		$totalRecords = $this->Model_ChuyenDi->checkNumber();
		$recordsPerPage = 10;
		$totalPages = ceil($totalRecords / $recordsPerPage); 

		if($trang < 1){
			return redirect(base_url('admin/chuyen-di/'));
		}

		if($trang > $totalPages){
			return redirect(base_url('admin/chuyen-di/'));
		}

		$start = ($trang - 1) * $recordsPerPage;


		if($start == 0){
			$data['totalPages'] = $totalPages;
			$data['list'] = $this->Model_ChuyenDi->getAll();
			return $this->load->view('Admin/View_ChuyenDi', $data);
		}else{
			$data['totalPages'] = $totalPages;
			$data['list'] = $this->Model_ChuyenDi->getAll($start);
			return $this->load->view('Admin/View_ChuyenDi', $data);
		}
	}

	public function Add(){
		$data['destinations'] = $this->Model_ChuyenDi->getAllDestinations();
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$tenchuyendi = $this->input->post('tenchuyendi');
			$duongdan = $this->input->post('duongdan');
			$diemden = $this->input->post('diemden');
			$motangan = $this->input->post('motangan');
			$loaichuyendi = $this->input->post('loaichuyendi');
			$giachuyendi = $this->input->post('giachuyendi');
			$diemkhoihanh = $this->input->post('diemkhoihanh');
			$gioquayve = $this->input->post('gioquayve');
			$dotuoi = $this->input->post('dotuoi');
			$giokhoihanh = $this->input->post('giokhoihanh');
			$quydinhtrangphuc = $this->input->post('quydinhtrangphuc');
			$baogom = $this->input->post('baogom');
			$khongbaogom = $this->input->post('khongbaogom');

			$anhchinh = "";

			//Add image
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('anhchinh')){
				$imageChinh = $this->upload->data();
				$anhchinh = base_url('uploads')."/".$imageChinh['file_name'];
			}

			$this->Model_ChuyenDi->addTour($tenchuyendi,$duongdan,$anhchinh,$diemden,$motangan,$loaichuyendi,$giachuyendi,$diemkhoihanh,$gioquayve,$dotuoi,$giokhoihanh,$quydinhtrangphuc,$baogom,$khongbaogom);

			$data['success'] = "Thêm chuyến đi thành công!";
			return $this->load->view('Admin/View_ThemChuyenDi', $data);
		}
		return $this->load->view('Admin/View_ThemChuyenDi', $data);
	}

	public function Update($MaChuyenDi){
		if(count($this->Model_ChuyenDi->getById($MaChuyenDi)) == 0){
			return redirect(base_url('admin/chuyen-di/'));
		}

		$data['destinations'] = $this->Model_ChuyenDi->getAllDestinations();
		$data['detail'] = $this->Model_ChuyenDi->getById($MaChuyenDi);
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$tenchuyendi = $this->input->post('tenchuyendi');
			$duongdan = $this->input->post('duongdan');
			$diemden = $this->input->post('diemden');
			$motangan = $this->input->post('motangan');
			$loaichuyendi = $this->input->post('loaichuyendi');
			$giachuyendi = $this->input->post('giachuyendi');
			$diemkhoihanh = $this->input->post('diemkhoihanh');
			$gioquayve = $this->input->post('gioquayve');
			$dotuoi = $this->input->post('dotuoi');
			$giokhoihanh = $this->input->post('giokhoihanh');
			$quydinhtrangphuc = $this->input->post('quydinhtrangphuc');
			$baogom = $this->input->post('baogom');
			$khongbaogom = $this->input->post('khongbaogom');

			$anhchinh = "";


			//Update image
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg|webp';

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('anhchinh')){
				$imageChinh = $this->upload->data();
				$anhchinh = base_url('uploads')."/".$imageChinh['file_name'];
				$this->Model_ChuyenDi->update($tenchuyendi,$giachuyendi,$anhchinh,$motangan,$diemden,$loaichuyendi,$diemkhoihanh,$giokhoihanh,$gioquayve,$quydinhtrangphuc,$baogom,$khongbaogom,$duongdan,$dotuoi,$MaChuyenDi);
			}else{
				$this->Model_ChuyenDi->updateNoImage($tenchuyendi,$giachuyendi,$motangan,$diemden,$loaichuyendi,$diemkhoihanh,$giokhoihanh,$gioquayve,$quydinhtrangphuc,$baogom,$khongbaogom,$duongdan,$dotuoi,$MaChuyenDi);
			}

			
			$data['detail'] = $this->Model_ChuyenDi->getById($MaChuyenDi);
			$data['success'] = "Cập nhật chuyến đi thành công!";
			return $this->load->view('Admin/View_SuaChuyenDi', $data);

		}
		return $this->load->view('Admin/View_SuaChuyenDi', $data);
	}

	public function Image($MaChuyenDi){
		if(count($this->Model_ChuyenDi->getById($MaChuyenDi)) == 0){
			return redirect(base_url('admin/chuyen-di/'));
		}

		$data['destinations'] = $this->Model_ChuyenDi->getAllDestinations();
		$data['detail'] = $this->Model_ChuyenDi->getById($MaChuyenDi);
		$data['img'] = $this->Model_ChuyenDi->getImage($MaChuyenDi);
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$targetDir = "uploads/";
	        if (!empty($_FILES['images']['name'][0])) {

	        	$this->Model_ChuyenDi->deleteImage($MaChuyenDi);

	            // Lặp qua tất cả các tệp được tải lên
	            foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
	                $fileName = $_FILES['images']['name'][$key];
	                $filePath = $targetDir . $fileName;

	                // Di chuyển tệp tạm lên đường dẫn đích
	                move_uploaded_file($tmp_name, $filePath);

	                $this->Model_ChuyenDi->insertImage($filePath,$MaChuyenDi);
	            }

	            $data['img'] = $this->Model_ChuyenDi->getImage($MaChuyenDi);
				$data['success'] = "Cập nhật hình ảnh chuyến đi thành công!";
				return $this->load->view('Admin/View_HinhAnhChuyenDi', $data);

	        } else {
	            echo "No images uploaded.";
	        }
		}
		return $this->load->view('Admin/View_HinhAnhChuyenDi', $data);
	}

	public function List($MaChuyenDi){
		if(count($this->Model_ChuyenDi->getById($MaChuyenDi)) == 0){
			return redirect(base_url('admin/chuyen-di/'));
		}

		$ngaykhoihanh = new DateTime($this->Model_ChuyenDi->getById($MaChuyenDi)[0]['GioKhoiHanh']);
		$ngaytrove = new DateTime($this->Model_ChuyenDi->getById($MaChuyenDi)[0]['GioQuayVe']);
		$interval = $ngaykhoihanh->diff($ngaytrove);
		$data['days'] = $interval->days + 1;
		$data['numberList'] = $this->Model_ChuyenDi->getAllList($MaChuyenDi);
		if ($this->input->server('REQUEST_METHOD') === 'POST') {

			if(count($this->Model_ChuyenDi->getAllList($MaChuyenDi)) <= 0){
				for($i = 1; $i <= $data['days']; $i++){
					$ngay = $this->input->post('ngay'.$i);
					$noidung = $this->input->post('noidung'.$i);
					$this->Model_ChuyenDi->addList($MaChuyenDi,$ngay,$noidung);
				}
			}else{
				for($i = 1; $i <= $data['days']; $i++){
					$ngay = $this->input->post('ngay'.$i);
					$noidung = $this->input->post('noidung'.$i);
					$MaLichTrinh = $this->input->post('malichtrinh'.$i);
					$this->Model_ChuyenDi->updateList($MaLichTrinh,$ngay,$noidung);
				}
			}

			$data['numberList'] = $this->Model_ChuyenDi->getAllList($MaChuyenDi);
			$data['success'] = "Cập nhật lịch trình chuyến đi thành công!";
			return $this->load->view('Admin/View_LichTrinhChuyenDi', $data);
		}

		return $this->load->view('Admin/View_LichTrinhChuyenDi', $data);
	}

	public function Location($MaChuyenDi){
		if(count($this->Model_ChuyenDi->getById($MaChuyenDi)) == 0){
			return redirect(base_url('admin/chuyen-di/'));
		}
		$data['destinations'] = $this->Model_ChuyenDi->getAllDestinations();
		$data['detail'] = $this->Model_ChuyenDi->getById($MaChuyenDi);
		$data['numberLocation'] = $this->Model_ChuyenDi->getAllLocation($MaChuyenDi);
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$motangan = $this->input->post('motangan');
			$motadai = $this->input->post('motadai');
			$bando = $this->input->post('bando');

			if(count($this->Model_ChuyenDi->getAllLocation($MaChuyenDi)) <= 0){
				$this->Model_ChuyenDi->addLocation($MaChuyenDi,$motangan,$motadai,$bando);
			}else{
				$this->Model_ChuyenDi->updateLocation($MaChuyenDi,$motangan,$motadai,$bando);
			}

			$data['numberLocation'] = $this->Model_ChuyenDi->getAllLocation($MaChuyenDi);
			$data['success'] = "Cập nhật vị trí chuyến đi thành công!";
			return $this->load->view('Admin/View_ViTriChuyenDi', $data);
		}
		return $this->load->view('Admin/View_ViTriChuyenDi', $data);
	}

	public function remove($MaChuyenDi){
		$this->Model_ChuyenDi->remove($MaChuyenDi);
		return redirect(base_url('admin/chuyen-di/'));
	}

	public function trash(){
		$totalRecords = $this->Model_ChuyenDi->checkNumberTrash();
		$recordsPerPage = 10;
		$totalPages = ceil($totalRecords / $recordsPerPage); 

		$data['totalPages'] = $totalPages;
		$data['list'] = $this->Model_ChuyenDi->getAllTrash();
		return $this->load->view('Admin/View_ThungRacChuyenDi', $data);
	}

	public function PageTrash($trang){

		$totalRecords = $this->Model_ChuyenDi->checkNumberTrash();
		$recordsPerPage = 10;
		$totalPages = ceil($totalRecords / $recordsPerPage); 

		if($trang < 1){
			return redirect(base_url('admin/chuyen-di/thung-rac/'));
		}

		if($trang > $totalPages){
			return redirect(base_url('admin/chuyen-di/thung-rac/'));
		}

		$start = ($trang - 1) * $recordsPerPage;


		if($start == 0){
			$data['totalPages'] = $totalPages;
			$data['list'] = $this->Model_ChuyenDi->getAllTrash();
			return $this->load->view('Admin/View_ThungRacChuyenDi', $data);
		}else{
			$data['totalPages'] = $totalPages;
			$data['list'] = $this->Model_ChuyenDi->getAllTrash($start);
			return $this->load->view('Admin/View_ThungRacChuyenDi', $data);
		}
	}

	public function reset($MaChuyenDi){
		$this->Model_ChuyenDi->reset($MaChuyenDi);
		return redirect(base_url('admin/chuyen-di/thung-rac/'));
	}

	public function resetAll(){
		$this->Model_ChuyenDi->resetAll();
		return redirect(base_url('admin/chuyen-di/thung-rac/'));
	}

	public function delete($MaChuyenDi){
		$this->Model_ChuyenDi->delete($MaChuyenDi);
		return redirect(base_url('admin/chuyen-di/thung-rac/'));
	}

	public function deleteAll(){
		$this->Model_ChuyenDi->deleteAll();
		return redirect(base_url('admin/chuyen-di/thung-rac/'));
	}
}


/* End of file ChuyenDi.php */
/* Location: ./application/controllers/ChuyenDi.php */