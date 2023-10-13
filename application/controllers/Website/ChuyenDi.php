<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ChuyenDi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Website/Model_ChuyenDi');
		$this->load->model('Website/Model_DiemDen');
		$data = [];
	}

	public function index()
	{
		$data['title'] = "Thông tin các chuyến đi Tour lịch mới nhất!";
		$data['list'] = $this->Model_ChuyenDi->getAll();
		$data['location'] = $this->Model_DiemDen->getAll();
		return $this->load->view('Website/View_ChuyenDi', $data);
	}

	public function Detail($duongdan)
	{
		$data['detail'] = $this->Model_ChuyenDi->getBySlug($duongdan);
		$data['title'] = "Thông tin chuyến đi ".$this->Model_ChuyenDi->getBySlug($duongdan)[0]["TenChuyenDi"];
		$data['plan'] = $this->Model_ChuyenDi->getPlanByIdTour($this->Model_ChuyenDi->getBySlug($duongdan)[0]["MaChuyenDi"]);
		$data['images'] = $this->Model_ChuyenDi->getImageByIdTour($this->Model_ChuyenDi->getBySlug($duongdan)[0]["MaChuyenDi"]);
		$data['location'] = $this->Model_ChuyenDi->getLocationByIdTour($this->Model_ChuyenDi->getBySlug($duongdan)[0]["MaChuyenDi"]);
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$hoten = $this->input->post('fullname');
			$email = $this->input->post('email');
			$sodienthoai = $this->input->post('phone');
			$soluongve = $this->input->post('number');
			$loinhan = $this->input->post('message');
			$loaikhachhang = 1;

			if(!$this->session->has_userdata('khachhang')){
				$newdata = array(
				    'TenKhachHang' => $hoten,
				    'SoDienThoai' => $sodienthoai,
				    'Email' => $email,
				);
				$this->session->set_userdata($newdata);
				$loaikhachhang = 0;
			}


			if(empty($hoten) || empty($email) || empty($sodienthoai) || empty($soluongve)){
				$data['error'] = "Vui lòng nhập đủ thông tin!";
				$data['message'] = $loinhan;
				$data['number'] = $soluongve;
				return $this->load->view('Website/View_ChiTietChuyenDi', $data);
			}

			if (!preg_match('/^(0|\+84)(3[2-9]|5[2689]|7[06789]|8[1-9]|9[0-9])[0-9]{7}$/', $sodienthoai)) {
			    $data['error'] = "Vui lòng nhập số điện thoại hợp lệ!";
			    $data['message'] = $loinhan;
				$data['number'] = $soluongve;
				return $this->load->view('Website/View_ChiTietChuyenDi', $data);
			}

			$machuyendi = $this->Model_ChuyenDi->getBySlug($duongdan)[0]["MaChuyenDi"];

			$madatve = $this->Model_ChuyenDi->orderTicket($machuyendi,$soluongve,$hoten,$email,$sodienthoai,$loaikhachhang,$loinhan);

			$matimkiem = strtoupper("VE".$hoten[0].$hoten[strlen($hoten) - 1].$sodienthoai[3].$email[0].$sodienthoai[5].$email[1].$madatve);

			$this->Model_ChuyenDi->updateIdOrderTicket($matimkiem, $madatve);

			$data['success'] = "Đặt vé thành công! Mã tìm kiếm thông tin vé là: <b>".$matimkiem."</b>";
		    $data['message'] = "";
			$data['number'] = "";
			return $this->load->view('Website/View_ChiTietChuyenDi', $data);
		}
		return $this->load->view('Website/View_ChiTietChuyenDi', $data);
	}

	public function Search(){
		$madiemden = $this->input->get('diemden');
		$thang = $this->input->get('thang');
		$min_gia = $this->input->get('min_gia');
		$max_gia = $this->input->get('max_gia');
		$loaichuyendi = $this->input->get('loai');
		$type = $this->input->get('t');

		if(isset($type) AND !empty($type) AND $type == "home"){
			$data['title'] = "Tìm kiếm Tour";
			$data['tour'] = $this->Model_ChuyenDi->getAll();
			$data['location'] = $this->Model_DiemDen->getAll();
			$data['list'] = $this->Model_ChuyenDi->searchHome($madiemden, $thang, $loaichuyendi);
			$data['allList'] = $this->Model_ChuyenDi->getAll();
			return $this->load->view('Website/View_TimKiemChuyenDi', $data);
		}else{
			$data['title'] = "Tìm kiếm Tour";
			$data['tour'] = $this->Model_ChuyenDi->getAll();
			$data['location'] = $this->Model_DiemDen->getAll();
			$data['list'] = $this->Model_ChuyenDi->search($madiemden, $thang, $min_gia, $max_gia, $loaichuyendi);
			$data['allList'] = $this->Model_ChuyenDi->getAll();
			return $this->load->view('Website/View_TimKiemChuyenDi', $data);
		}

	}

}

/* End of file ChuyenDi.php */
/* Location: ./application/controllers/ChuyenDi.php */