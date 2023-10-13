<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TinTuc extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Website/Model_TinTuc');
		$data = [];
	}

	public function index()
	{
		$data['next_page'] = 2;
		$data['title'] = "Tin tức du lịch mới nhất!";
		$data['list'] = $this->Model_TinTuc->getAll();
		return $this->load->view('Website/View_TinTuc', $data);
	}


	public function Page($trang)
	{

		$totalRecords = $this->Model_TinTuc->checkNumber();
		$recordsPerPage = 6;
		$totalPages = ceil($totalRecords / $recordsPerPage); 

		if($trang < 1){
			echo FALSE;
		}else if($trang > $totalPages){
			echo FALSE;
		}else{
			$start = ($trang - 1) * $recordsPerPage;

			$end = $trang * $recordsPerPage;

			$data = $this->Model_TinTuc->getAll(0,$end);

			echo json_encode($data);
		}
	}

	public function Detail($duongdan){
		$data['detail'] = $this->Model_TinTuc->getBySlug($duongdan);
		$data['title'] = $this->Model_TinTuc->getBySlug($duongdan)[0]['TieuDe'];
		$data['category'] = $this->Model_TinTuc->getAllCategory();
		$data['related'] = $this->Model_TinTuc->getRelated($this->Model_TinTuc->getBySlug($duongdan)[0]['MaChuyenMuc']);
		$data['tag'] = $this->Model_TinTuc->getAllTag();
		return $this->load->view('Website/View_ChiTietTinTuc', $data);
	}
}

/* End of file TinTuc.php */
/* Location: ./application/controllers/TinTuc.php */