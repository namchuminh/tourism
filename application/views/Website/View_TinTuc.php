<?php require(__DIR__.'/layouts/header.php'); ?>
<div class="background-under-header">
        <div class="ChooseThePerfectHoliday-text background-under">
            <span class="choose header-abu">Danh sách</span>
            <h2 class="theperfect header-abu">Tin Tức - Du Lịch</h2>
        </div>
    </div>
<!-- content 6 image -->
    <div class="holiday-time">
        <div class="all-holiday-time">
            <div class="row for-listblog">

                <?php foreach ($list as $key => $value): ?>

                    <div class="col-6 col-md-4">
                        <div class="ch-img-text">
                            <div class="img-hld-time">
                                <a href="<?php echo base_url('tin-tuc/'.$value['DuongDan'].'/') ?>" class="link-to-blog">
                                    <img src="<?php echo $value['AnhChinh']; ?>" alt="" class="picic">
                                </a>
                            </div>
                            <div class="text-hld-time">
                                <div class="two-text-top">
                                    <a href="<?php echo base_url('tin-tuc/'.$value['DuongDan'].'/') ?>" class="link-conti">
                                        <h1 class="name-holiday"><?php echo $value['TieuDe']; ?></h1>
                                    </a>
                                    <p class="name-tric-holiday"><?php echo substr($value['NoiDung'], 0, 79); ?>...</p>
                                </div>
                                <div class="standard-letf-four-text">
                                    <a href="#" class="link-from-blog-stand">
                                        <h1 class="time-ne">Ngày đăng: <?php echo date("d-m-Y", strtotime($value['NgayDang'])); ?></h1>
                                    </a>
                                    <a href="" class="link-from-blog-stand">
                                        <div class="h1m">
                                            <span class="icon-blog-stand"><i class="fa-regular fa-comment"></i></span>
                                            <p class="cmtt">Chuyên mục: <?php echo $value['TenChuyenMuc']; ?></p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endforeach ?>

                
            </div>
            <div class="loading">
                <button class="load-more" value="<?php echo $next_page; ?>">
                    Xem Thêm
                </button>
            </div>
        </div>
    </div>


<div id="intoop-header">
    <div class="all-suprise">
        <div class="sup">
            <p class="sup-now">Đăng Ký Không Bỏ Lỡ Tin Tức Du Lịch Mới Nhất!</p>
        </div>
        <div class="join">
            <a href="" class="link-joininnow">
                <button class="join-now">Đăng Ký</button>
            </a>
        </div>
    </div>
</div>

<?php require(__DIR__.'/layouts/footer.php'); ?>

<script>
$(document).ready(function(){
    $(".load-more").click(function(e){
        var page = $(this).attr("value")
        $(this).attr("value", parseInt(page) + 1);
        $.get("<?php echo base_url('tin-tuc/trang/'); ?>"+page, function(data){

            if(!data){
                return
            }else{
                $(".for-listblog").empty()
                var data = JSON.parse(data)

                for(var i = 0; i < data.length; i++){
                    var date = data[i].NgayDang;
                    var parts = date.split("-");
                    var newDate = parts[2] + "-" + parts[1] + "-" + parts[0];
                    var url = "<?php echo base_url('tin-tuc/'); ?>" + data[i].DuongDan + "/"
                    var content = data[i].NoiDung.slice(0, 79);
                    $(".for-listblog").append('<div class="col-6 col-md-4"> <div class="ch-img-text"> <div class="img-hld-time"> <a href="'+url+'" class="link-to-blog"> <img src="'+data[i].AnhChinh+'" alt="" class="picic"> </a> </div> <div class="text-hld-time"> <div class="two-text-top"> <a href="'+url+'" class="link-conti"> <h1 class="name-holiday">'+data[i].TieuDe+'</h1> </a> <p class="name-tric-holiday"></p><p>'+content+'...</p> </div> <div class="standard-letf-four-text"> <a href="#" class="link-from-blog-stand"> <h1 class="time-ne">Ngày đăng: '+newDate+'</h1> </a> <a href="" class="link-from-blog-stand"> <div class="h1m"> <span class="icon-blog-stand"><i class="fa-regular fa-comment"></i></span> <p class="cmtt">Chuyên mục: '+data[i].TenChuyenMuc+'</p> </div> </a> </div> </div> </div> </div>')
                }
            }
            
        });
    })
});
</script>