<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TrangChu extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->has_userdata('taikhoan')){
			return redirect(base_url('admin/dang-nhap/'));
		}

		$this->load->model('Admin/Model_TrangChu');
		$data = array();
	}

	public function index()
	{

		$doanhthungay = 0;
		$doanhthutuan = 0;

		if(count($this->Model_TrangChu->sumRevenueDay()) > 0){
			foreach ($this->Model_TrangChu->sumRevenueDay() as $key => $value) {
				$doanhthungay += $value['SoLuongVe'] * $value['GiaChuyenDi'];
			}
		}

		if(count($this->Model_TrangChu->sumRevenueWeek()) > 0){
			foreach ($this->Model_TrangChu->sumRevenueWeek() as $key => $value) {
				$doanhthutuan += $value['SoLuongVe'] * $value['GiaChuyenDi'];
			}
		}


		$data['sumTicketDay'] = $this->Model_TrangChu->sumTicketDay();
		$data['sumTicketWeek'] = $this->Model_TrangChu->sumTicketWeek();
		$data['sumRevenueDay'] = $doanhthungay;
		$data['sumRevenueWeek'] = $doanhthutuan;
		$data['tourStart'] = count($this->Model_TrangChu->tourStart());
		$data['sumCumstomerDay'] = count($this->Model_TrangChu->sumCumstomerDay());
		$data['sumCumstomerWeek'] = count($this->Model_TrangChu->sumCumstomerWeek());
		return $this->load->view('Admin/View_TrangChu',$data);
	}

	public function getSumRevenue(){

		$data = array();

		for($i = 1; $i <= 12; $i++){
			$list = $this->Model_TrangChu->getSumRevenue($i);
			if(empty($list[0]['TongDoanhThu']) || !isset($list[0]['TongDoanhThu']) || $list[0]['TongDoanhThu'] == null){
				array_push($data,0);
			}else{
				array_push($data,(int)$list[0]['TongDoanhThu']);
			}
		}

		$data = json_encode($data);

		echo $data;
	}
}

/* End of file TrangChu.php */
/* Location: ./application/controllers/TrangChu.php */