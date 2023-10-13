<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class KhachHang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->has_userdata('khachhang')){
			return redirect(base_url('dang-nhap/'));
		}
		$data = [];
	}

	public function index()
	{
		$data['title'] = "Thông tin khách hàng";
		return $this->load->view('Website/View_KhachHang', $data);
	}

}

/* End of file KhachHang.php */
/* Location: ./application/controllers/KhachHang.php */