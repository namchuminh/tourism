<?php require(__DIR__.'/layouts/header.php'); ?>

<div class="background-under-header deistina">
    <div class="ChooseThePerfectHoliday-text background-under">
        <span class="choose header-abu">Tìm kiếm</span>
        <h2 class="theperfect header-abu">
            <?php if(count($list) >= 1){ ?>
                Địa điểm: <?php echo $_GET['s']; ?>
            <?php }else{ ?>
                Không tìm thấy địa điểm!
            <?php } ?>
        </h2>
    </div>
</div>
<!-- 12 image -->
<div class="all-image12-destinal">
    <div class="container destination list">

        <?php foreach ($list as $key => $value): ?>
            <a href="<?php echo base_url('dia-diem/'.$value['DuongDan'].'/'); ?>">
                <div class="col-12 col-sm-6 col-md-4 p-2 TheUnforgettableMediterranean ChooseYourDestination">
                    <div class="d-flex flex-column text-center border height100">
                        <div class="hovereffect choose-your-destinal">
                            <img style="height: auto;" class="img-responsive" src="<?php echo $value['AnhChinh'] ?>" alt="">
                            <div class="location-theunfor chooseyou">
                                <h2 class="location-theunfor-text"><?php echo $value['TenDiemDen']; ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        <?php endforeach ?>
        
        
    </div>
</div>

<?php require(__DIR__.'/layouts/footer.php'); ?>

