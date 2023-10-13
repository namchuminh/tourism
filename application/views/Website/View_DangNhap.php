<?php require(__DIR__.'/layouts/header.php'); ?>

    <!-- background header -->
    <div class="background-under-header ttkh" style="background-image: url(<?php echo base_url('public/website/Image/thongtinkh.jpg'); ?>)">
      <div class="ChooseThePerfectHoliday-text background-under">
        <span class="choose header-abu">Welcome </span>
        <h2 class="theperfect header-abu">Đăng Nhập</h2>
      </div>
    </div>

    <!-- cotainer  -->
    <div id="all-dangnhap">
      <div class="login-box">
        <h1>Đăng Nhập</h1>
        <form method="POST">
          <?php if(isset($error) || !empty($error)){ ?>
            <p style="text-align: center; color: white;"><?php echo $error; ?></p>
          <?php } ?>
          <div class="user-box name">
            <input type="text" name="username" required/>
            <label> Tài khoản</label>
          </div>
          <div class="user-box pass">
            <input type="password" name="password" required/>
            <span class="show-btn"><i class="fas fa-eye"></i></span>
            <label> Mật khẩu</label>
          </div>
          <div class="dangnhap">
            <a>
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <button type="submit" style="background: none; border: none; color: #f1f1f1; text-transform: uppercase; letter-spacing: 3px; font-size: 16px; width: 100%; height: 100%;">Đăng Nhập</button>
            </a>
            <a href="<?php echo base_url('dang-ky/') ?>">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              Đăng Ký
            </a>
          </div>
        </form>
      </div>
    </div>
<?php require(__DIR__.'/layouts/footer.php'); ?>
<link rel="stylesheet" href="<?php echo base_url('public/website/KhachHang/style_KH.css'); ?>" />
<script src="<?php echo base_url('public/website/KhachHang/KHjs.js'); ?>"></script>

