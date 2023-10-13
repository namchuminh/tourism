<?php require(__DIR__.'/layouts/header.php'); ?>

<div class="background-under-header">
    <div class="ChooseThePerfectHoliday-text background-under">
        <span class="choose header-abu">Bài viết</span>
        <h2 class="theperfect header-abu"><?php echo $detail[0]['TieuDe']; ?></h2>
    </div>
</div>
<div class="blog-standard">
    <div class="all-blog-standard">
        <div class="standard-letf">
            <div class="all-standard-letf">
                <div class="standard-letf-one">
                    <div class="chua-img-stan">
                        <img src="<?php echo $detail[0]['AnhChinh']; ?>" alt="" class="standard-ne">
                    </div>
                </div>
                <div class="standard-letf-two">
                    <h2 class="beauti"><?php echo $detail[0]['TieuDe']; ?></h2>
                </div>
                <div class="standard-letf-three">
                	<?php echo $detail[0]['NoiDung']; ?>
                </div>
                
                <div class="standard-letf-four">
                    <div class="standard-letf-four-text">
                        <a href="" class="link-from-blog-stand">
                            <h1 class="time-ne">Ngày đăng: <?php echo date("d-m-Y", strtotime($detail[0]['NgayDang'])); ?></h1>
                        </a>
                        <a href="" class="link-from-blog-stand">
                            <div class="h1m">
                                <p class="cmtt">Chuyên Mục: <?php echo $detail[0]['TenChuyenMuc']; ?></p>
                            </div>
                        </a>
                    </div>
                    <div class="standard-letf-four-icon">
                        <span class="icon-stand-four"><i class="fa-brands fa-facebook"></i></span>
                        <span class="icon-stand-four"><i class="fa-brands fa-twitter"></i></span>
                        <span class="icon-stand-four"><i class="fa-brands fa-linkedin"></i></span>
                        <span class="icon-stand-four"><i class="fa-brands fa-pinterest"></i></span>
                    </div>

                </div>
                <div class="tag-for-blog">
                    <div class="tags-con">
                    	<?php 
                    		$array = explode(",", $detail[0]['The']);
							foreach ($array as $item) {
							    echo '<a href="#" class="link-to-tags-left">'.$item.'</a>';
							}
                    	?>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="standard-right">
                <div class="all-sidebar-for-destination">
                    <div class="search-for-faq">
                        <form action="<?php echo base_url('tim-kiem/'); ?>" method="GET" class="input-group mb-3 faq-searchh">
                            <input type="text" name="s" class="form-control onefaq" placeholder="Nhập tên bài viết..." title="Tìm kiếm" aria-label="" aria-describedby="basic-addon1" required>
                            <div class="input-group-prepend">
                              <button type="submit" class="input-group-text" id="basic-addon1 fqaaa" style="background: #3abdc1; color: white;"><i class="fa-solid fa-magnifying-glass fa-rotate-90 for-faqqq"></i></button>
                            </div>
                        </form>
                        <div class="about-me" style="box-shadow: 0 0em 0.5em rgb(15 15 15 / 25%); border-radius: 10px;">
                        	<br>
                            <a href="" class="link-to-about-me">
                                <img style="box-shadow: 0 0em 0.5em rgb(15 15 15 / 25%);"src="<?php echo $detail[0]['avt']; ?>" alt="" class="toi-day">
                            </a>
                            <p class="lailalodem" style="font-size: 22px; font-weight: 500; text-align: center;"><?php echo $detail[0]['TenNhanVien']; ?></p>
                        </div>
                        <div class="Categories">
                            <h1 class="laila-Categories">Chuyên Mục</h1>
                            <div class="all-lick-nua">
                            	<?php if(count($category) > 0){ ?>
	                            	<?php foreach ($category as $key => $value): ?>
	                            		<a href="#" class="link-from-Categories"><?php echo $value['TenChuyenMuc']; ?></a>
	                            	<?php endforeach ?>
	                            <?php } ?>
                            </div>
                        </div>
                        <div class="LatestPosts">
                        	<h1 class="laila-Categories">Liên Quan</h1>
                        	<?php if(count($related) > 0){ ?>
	                        	<?php foreach ($related as $key => $value): ?>
	                        		<div class="img-and-text-latestposts">
		                                <div class="img-latestposts">
		                                    <div class="hovereffect ">
		                                        <img style="width: 150px; height: 150px; image-rendering: -webkit-optimize-contrast;" class="img-responsive" src="<?php echo $value['AnhChinh']; ?>" alt="">
		                                    </div>
		                                </div>
		                                <div class="text-latestposts">
		                                    <a href="<?php echo base_url('tin-tuc/'.$value['DuongDan'].'/') ?>" class="link-hoai">
		                                        <h1 class="very"><?php echo $value['TieuDe']; ?></h1>
		                                        <p class="many">Ngày đăng: <?php echo date("d-m-Y", strtotime($value['NgayDang'])); ?></p>
		                                    </a>
		                                </div>
		                            </div>
	                        	<?php endforeach ?>
                        	<?php } ?>
                        </div>
                        <div class="Tags">
                            <h1 class="laila-Categories">Thẻ</h1>
                            <br>
                            <div class="tags-con">
                                <?php $listTag = "" ?>
                                <?php if(count($tag) > 0){ ?>
                                	<?php foreach ($tag as $key => $value): ?>
                                		<?php $listTag .= $value['The'].","; ?>
                                	<?php endforeach ?>
                                <?php } ?>

                                <?php 
                                	$array = explode(",", $listTag);
                                	array_pop($array);
                                    $array = array_unique($array);
									foreach ($array as $item) {
									    echo '<a href="#" class="link-to-tags-left">'.$item.'</a>';
									}
                                ?>
                            </div>
                        </div>

                        <div class="col fm-faq">
                            <div class="content-footer-three sbm-faq">
                                <h4 class="Our-rent">Đăng Ký</h4>
                                <p class="text--footer faq-n">Nhận thông báo các bài viết du lịch!</p>
                                <form class="form-footer" role="search">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1 bgr-form-fa"><i class="fa-solid fa-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control bgr-form-fa" placeholder="Name" aria-label="Name" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1 bgr-form-fa"><i class="fa-regular fa-envelope"></i></span>
                                        </div>
                                        <input type="text" class="form-control bgr-form-fa" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
                                    </div>
                                    <button class="btn-sub sbm-for-faqa">Đăng Ký</button>
                                </form>
                            </div>
                        </div>
                        <div class="follow-me">
                            <h1 class="laila-Categories">Theo Dõi</h1>
                            <br>
                            <div class="icon-followme">
                                <a class="hmmmmmm" href="">
                                    <span class="icon-supper-new"><i class="fa-brands fa-twitter new-iconn"></i></span>
                                </a>
                                <a class="hmmmmmm" href="">
                                    <span class="icon-supper-new"><i class="fa-brands fa-pinterest-p new-iconn"></i></span>
                                </a>
                                <a class="hmmmmmm" href="">
                                    <span class="icon-supper-new"><i class="fa-brands fa-facebook new-iconn"></i></span>
                                </a>
                                <a class="hmmmmmm" href="">
                                    <span class="icon-supper-new"><i class="fa-brands fa-instagram new-iconn"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>

<?php require(__DIR__.'/layouts/footer.php'); ?>
