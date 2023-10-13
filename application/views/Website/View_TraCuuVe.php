<?php require(__DIR__.'/layouts/header.php'); ?>

<div class="background-under-header standard-tour">
    <div class="ChooseThePerfectHoliday-text background-under">
        <span class="choose header-abu">Tra cứu</span>
        <h2 class="theperfect header-abu">Thông tin vé được đặt</h2>
    </div>
</div>

<div class="box-search">
    <form class="search-form" action="<?php echo base_url('tra-cuu-ve/ket-qua/'); ?>" role="search">
        <div class="row home-select">
            <div class="col under-header">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    </div>
                    <input type="text" class="form-control bgr-form-fa" placeholder="Mã vé đã đặt..." aria-label="Mã vé đã đặt" aria-describedby="basic-addon1" name="code" required>
                </div>
            </div>
            <div class="col-3 under-header">
                <button type="submit" class="find-n">Tra Cứu</button>
            </div>
        </div>
        <?php if(isset($error) && !empty($error)){ ?>
        	<br>
        	<p style="font-weight: 500; font-size: 16px; color: #3fd0d4;"><?php echo $error; ?></p>
        <?php } ?>
    </form>
</div>

<?php require(__DIR__.'/layouts/footer.php'); ?>
