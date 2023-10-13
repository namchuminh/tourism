<?php require(__DIR__.'/layouts/header.php'); ?>

    <!-- background header -->
    <div class="background-under-header ttkh" style="background-image: url(<?php echo base_url('public/website/Image/thongtinkh.jpg'); ?>)">
      <div class="ChooseThePerfectHoliday-text background-under">
        <span class="choose header-abu">Welcome </span>
        <h2 class="theperfect header-abu">Thông Tin Khách Hàng</h2>
      </div>
    </div>

    <div id="container_KH">
      <div id="infokh">
        <div class="all-info-kh" style="z-index: unset;">
          <ul class="form-kh">
            <li class="ifkh">
              <div class="info-left">Tên khách hàng:</div>
              <div class="info-right"><?php echo $_SESSION['TenKhachHang']; ?></div>
            </li>
            <li class="ifkh">
              <div class="info-left">Số điện thoại:</div>
              <div class="info-right"><?php echo $_SESSION['SoDienThoai']; ?></div>
            </li>
            <li class="ifkh">
              <div class="info-left">Địa chỉ Email:</div>
              <div class="info-right"><?php echo $_SESSION['Email']; ?></div>
            </li>
            <li class="ifkh">
              <div class="info-left">Tài Khoản:</div>
              <div class="info-right"><?php echo $_SESSION['khachhang']; ?></div>
            </li>
            <li class="ifkh">
              <div class="info-left">Ngày Tham Gia:</div>
              <div class="info-right"><?php echo $_SESSION['NgayThamGia']; ?></div>
            </li>
          </ul>
          <hr>
          <div>
            <a href="<?php echo base_url('dang-xuat/') ?>" style="font-size: 22px; font-weight: 500; letter-spacing: 2px;">Đăng Xuất</a>
          </div>
        </div>
      </div>
    </div>

<?php require(__DIR__.'/layouts/footer.php'); ?>
<link rel="stylesheet" href="<?php echo base_url('public/website/KhachHang/style_KH.css'); ?>" />
<script src="<?php echo base_url('public/website/KhachHang/KHjs.js'); ?>"></script>

