<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TrangChu extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Website/Model_TrangChu');
		$this->load->model('Website/Model_TinTuc');
		$this->load->model('Website/Model_DiemDen');
		$data = [];
	}

	public function index()
	{
		$data['news'] = $this->Model_TrangChu->getAllNews();
		$data['location'] = $this->Model_TrangChu->getAllLocation();
		$data['tour'] = $this->Model_TrangChu->getAllTour();
		$data['title'] = "Setsail - Tour du lịch giá rẻ!";
		return $this->load->view('TrangChu', $data);
	}

	public function Search(){

		$timkiem = $this->input->get('s');
		$type = $this->input->get('t');

		if(!isset($timkiem) && !isset($type)){
			return redirect(base_url('tin-tuc/'));
		}

		if(!isset($timkiem) && isset($type) && $type == "diadiem"){
			return redirect(base_url('dia-diem/'));
		}

		if(isset($timkiem) && !isset($type)){
			$data['title'] = "Tìm kiếm bài viết: " . $timkiem;
			$data['list'] = $this->Model_TinTuc->search($timkiem);
			return $this->load->view('Website/View_TimKiemTinTuc', $data);
		}

		if(isset($timkiem) && isset($type) && $type == "diadiem"){
			$data['title'] = "Tìm kiếm địa điểm: " . $timkiem;
			$data['list'] = $this->Model_DiemDen->search($timkiem);
			return $this->load->view('Website/View_TimKiemDiemDen', $data);
		}

		
	}
}
