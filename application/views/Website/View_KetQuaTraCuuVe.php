<?php require(__DIR__.'/layouts/header.php'); ?>
<div class="background-under-header standard-tour">
    <div class="ChooseThePerfectHoliday-text background-under">
        <span class="choose header-abu">Tra cứu</span>
        <h2 class="theperfect header-abu">Thông tin vé được đặt</h2>
    </div>
</div>

<div id="container_KH">
	<div id="infokh">
		<div class="all-info-kh">
			<ul class="form-kh">
				<li class="ifkh">
					<div class="info-left">Tên khách hàng</div>
					<div class="info-right"><?php echo $detail[0]['TenKhachHang']; ?></div>
				</li>
				<li class="ifkh">
					<div class="info-left">Tên Chuyến Đi</div>
					<div class="info-right"><a style="font-size: 24px; color: black; text-decoration: unset;" href="<?php echo base_url('tour-du-lich/'.$detail[0]['DuongDan'].'/'); ?>"><?php echo $detail[0]['TenChuyenDi']; ?></a></div>
				</li>
				<li class="ifkh">
					<div class="info-left">Điểm Du Lịch</div>
					<div class="info-right"><?php echo $this->Model_TrangChu->getLocationById($detail[0]['MaDiemDen'])[0]['TenDiemDen']; ?></div>
				</li>
				<li class="ifkh">
					<div class="info-left">Số Lượng Vé</div>
					<div class="info-right"><?php echo $detail[0]['SoLuongVe']; ?> vé</div>
				</li>
				<li class="ifkh">
					<div class="info-left">Ngày Đặt Vé</div>
					<div class="info-right"><?php echo $detail[0]['NgayDatVe']; ?></div>
				</li>
				<li class="ifkh">
					<div class="info-left">Ngày Khởi Hành</div>
					<div class="info-right"><?php echo date("d-m-Y", strtotime($detail[0]['GioKhoiHanh'])); ?></div>
				</li>
				<li class="ifkh">
					<div class="info-left">Nơi Khởi Hành</div>
					<div class="info-right"><?php echo $detail[0]['DiemKhoiHanh']; ?></div>
				</li>
				<li class="ifkh">
					<div class="info-left">Ngày Quay Về</div>
					<div class="info-right"><?php echo date("d-m-Y", strtotime($detail[0]['GioQuayVe'])); ?></div>
				</li>
				<li class="ifkh">
					<div class="info-left">Trạng Thái</div>
					<div class="info-right">
						<?php 
							if($detail[0]['status'] == 1){
								echo "Đang chờ duyệt vé!";
							}else if($detail[0]['status'] == 2){
								echo "Đã duyệt vé";
							}else if($detail[0]['status'] == 3){
								echo "Đang chuyển bị vé";
							}else if($detail[0]['status'] == 4){
								echo "Đã gửi vé cho KH";
							}else if($detail[0]['status'] == -1){
								echo "Đã gửi hủy vé";
							}else{
								echo "Vé bị xóa khỏi hệ thống";
							}
						?>
					</div>
				</li>
				<li class="ifkh"></li>
			</ul>
		</div>
	</div>
</div>
<?php require(__DIR__.'/layouts/footer.php'); ?>
<link rel="stylesheet" href="<?php echo base_url('public/website/KhachHang/style_KH.css'); ?>" />
<script src="<?php echo base_url('public/website/KhachHang/KHjs.js'); ?>"></script>
