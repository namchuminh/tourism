<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DiemDen extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Website/Model_DiemDen');
		$this->load->model('Website/Model_TinTuc');
		$data = [];
	}

	public function index()
	{
		$data['title'] = "Địa điểm du lịch mới nhất!";
		$data['list'] = $this->Model_DiemDen->getAll();
		return $this->load->view('Website/View_DiemDen', $data);
	}

	public function Detail($duongdan){
		$data['detail'] = $this->Model_DiemDen->getBySlug($duongdan);
		$data['title'] = $this->Model_DiemDen->getBySlug($duongdan)[0]['TenDiemDen'];
		$data['category'] = $this->Model_TinTuc->getAllCategory();
		$data['related'] = $this->Model_DiemDen->getRandom($duongdan);
		$data['tag'] = $this->Model_DiemDen->getAllTag();
		return $this->load->view('Website/View_ChiTietDiemDen', $data);
	}
}

/* End of file TinTuc.php */
/* Location: ./application/controllers/TinTuc.php */