<!-- <div id="slideshow0" class="slider-home">
    <ul class="slides" style="width: 600%; transition-duration: 0.6s; transform: translate3d(-1132px, 0px, 0px);">
        <?php foreach (banner_imageActives() as $banner) { ?>
            <li style="width: 1132px; float: left; display: block;">
                <?php if ($banner['link']) { ?>
                    <a href="<?php echo $banner['link']; ?>">
                        <img src="<?php echo $banner['url_image_resized']; ?>" alt="<?php echo $banner['title']; ?>" class="img-responsive" />
                    </a>
                <?php } else { ?>
                    <img src="<?php echo $banner['url_image_resized']; ?>" alt="<?php echo $banner['title']; ?>" class="img-responsive" />
                <?php } ?>
                <?php echo $banner['description'] . $banner['price_text']; ?>
            </li>
        <?php } ?>
    </ul>
</div>

<script type="text/javascript">
    $('#slideshow0').flexslider({
        animation: 'slide',
        animationLoop: true,
        itemWidth: 1140
    });
</script>
 -->

<div id="slider">
    <div class="slider-text">
        <h1 class="slider-text-heading">
            <?php echo web_name(); ?>
        </h1>
        <div class="slider-text-content">Cổng thông tin miễn phí về động vật, thú cưng</div>
    </div>
</div>
<div class="new__posts">
    <div class="new__posts-heading">
        <div class="container">
            <div class="col new__posts-heading-wrap">
                <h2 class="new__posts-header">Những bài viết mới</h2>
                <div class="new__posts-header-text">Dưới đây là những thú cưng mới nhất tại
                    <?php echo web_name(); ?>:
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container" style="overflow:hidden">
    <div class="row">
        <!-- START SẢN PHẨM NỔI BẬT -->
        <!-- <h3 class="brand">Thú Cưng Nổi Bật</h3> -->
        <div class="row product-layout yourclass">
            <?php foreach (productFeatureds(['width' => 200, 'height' => 200, 'limit' => settings('products_featured_limit')]) as $product) { ?>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="product-thumb transition">
                        <div class="image">
                            <a href="<?php echo $product['href']; ?>">
                                <img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>"
                                    title="<?php echo $product['name']; ?>" class="img-responsive">
                            </a>
                        </div>
                        <div class="caption">
                            <h4><a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a></h4>
                            <p>
                                <?php echo $product['desc_short']; ?>
                            </p>
                            <p class="price">
                                <span class="price-new">
                                    <?php echo $product['price_text']; ?>
                                </span>
                                <!--
                                <span class="price-old">$122.00</span>
                                <span class="price-tax">Ex Tax: $80.00</span>
                                 -->
                            </p>
                        </div>
                        <div class="button-group">
                            <button type="button" onclick="cart.add('<?php echo $product['product_id']; ?>');"><i
                                    class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Thêm vào
                                    giỏ</span></button>
                            <!-- <button type="button" data-toggle="tooltip" title="" onclick="alert('đang xây dựng...');//wishlist.add('30');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></button>
                            <button type="button" data-toggle="tooltip" title="" onclick="compare.add('<?php echo $product['product_id'] ?>');" data-original-title="So sánh sản phẩm"><i class="fa fa-exchange"></i></button> -->
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
</div>
<div class="new__posts">
    <div class="new__posts-heading">
        <div class="container">
            <div class="col new__posts-heading-wrap">
                <h2 class="new__posts-header" style="color:blue">Best Seller</h2>
                <div class="new__posts-header-text">Dưới đây là những thú cưng best seller nhất tại
                    <?php echo web_name(); ?>:
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container" style="overflow:hidden">
    <div class="row">
        <!-- START SẢN PHẨM NỔI BẬT -->
        <!-- <h3 class="brand">Thú Cưng Nổi Bật</h3> -->
        <div class="row product-layout yourclass">
            <?php foreach (productBestSellers(['width' => 200, 'height' => 200, 'limit' => settings('products_featured_limit')]) as $product) { ?>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="product-thumb transition">
                        <div class="image">
                            <a href="<?php echo $product['href']; ?>">
                                <img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>"
                                    title="<?php echo $product['name']; ?>" class="img-responsive">
                            </a>
                        </div>
                        <div class="caption">
                            <h4><a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a></h4>
                            <p>
                                <?php echo $product['desc_short']; ?>
                            </p>
                            <p class="price">
                                <span class="price-new">
                                    <?php echo $product['price_text']; ?>
                                </span>
                                <!--
                                <span class="price-old">$122.00</span>
                                <span class="price-tax">Ex Tax: $80.00</span>
                                 -->
                            </p>
                        </div>
                        <div class="button-group">
                            <button type="button" onclick="cart.add('<?php echo $product['product_id']; ?>');"><i
                                    class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Thêm vào
                                    giỏ</span></button>
                            <!-- <button type="button" data-toggle="tooltip" title="" onclick="alert('đang xây dựng...');//wishlist.add('30');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></button>
                            <button type="button" data-toggle="tooltip" title="" onclick="compare.add('<?php echo $product['product_id'] ?>');" data-original-title="So sánh sản phẩm"><i class="fa fa-exchange"></i></button> -->
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <h3 class="brand">Nhãn Hàng Nổi Bật</h3>
        <!-- SLIDE SHOW ẢNH LOGO CÁC HÃNG SẢN XUẤT -->
        <div id="carousel0" class="flexslider carousel">
            <ul class="slides"
                style="width: 100%;transition-duration: 0.6s;">

                <?php foreach (manufacturerFeatureds(['width' => 100, 'height' => 100, 'limit' => settings('manufacturers_featured_limit')]) as $manufacturer) { ?>
                    <li style="width: 208px;padding-left: 16px; float: left; display: block;">
                        <a href="<?php echo $manufacturer['href']; ?>">
                            <img src="<?php echo $manufacturer['thumb']; ?>" alt="<?php echo $manufacturer['name']; ?>"
                                class="img-responsive" draggable="false" />
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </div>

        <script type="text/javascript">
            $(window).load(function () {
                $('#carousel0').flexslider({
                    animation: 'slide',
                    itemWidth: 120,
                    itemMargin: 100,
                    minItems: 2,
                    maxItems: 4
                });
            });
        </script>


        <!-- Google Map  -->
        <h3 class="brand">Địa chỉ của chúng tôi</h3>
        <div style="height: 400px;position: relative; background-color: rgb(229, 227, 223); overflow: hidden; padding:0; width:100%"
            id="google-map" class="col-sm-12">
            <?php echo html_google_map(); ?>
        </div>

    </div>
</div>
</div>
<div class="container">
    <div class="row">
        <div id="content" class="col-sm-12">
            <!-- Giới thiệu -->
            <div class="col-sm-12">
                <!-- Introduce -->
                <div class="introduce">
                    <div class="col introduce__header">
                        <h2>Giới thiệu</h2>
                    </div>
                    <div class="row col introduce__container flex-sp">
                        <div class="col-6 col-sm-12 introduce__content">
                            <div class="introduce__content-wrap">
                                <div class="introduce__content-text">
                                    <span><span class="introduce-text-header">
                                            <?php echo web_name(); ?>
                                        </span> được xây dựng dựa trên tiêu chí là cổng thông tin khổng lồ và hoàn toàn
                                        miễn phí về các vấn đề xung quanh động vật , đặc biệt là thú cưng, cụ thể như
                                        các bệnh về chó mèo, các thực phẩm dinh dưỡng dành cho thú cưng, cách chăm sóc
                                        và điều trị bệnh cho chó mèo...</span>
                                </div>
                                <div class="introduce__content-text">
                                    <span>Tất cả những thông tin tại <span class="introduce-text-header">
                                            <?php echo web_name(); ?>
                                        </span> được sưu tầm và tham khảo từ nhiều nguồn khác nhau có chọn lọc, bên cạnh
                                        đó còn là trải nghiệm thực tế của chúng tôi trong quá trình nuôi thú cưng để đem
                                        đến cho độc giả những thông tin chính xác và hữu ích nhất.</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-12 introduce__img">
                            <div class="introduce__img-wrap">
                                <img src="https://monspet.com/wp-content/uploads/2019/07/shaking-hands8.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!-- START LOẠI SẢN PHẨM NỔI BẬT -->
            <h1 class="brand" style="font-weight:bold; font-size:25px">Danh Mục Nổi Bật</h1>
            <div class="row" style="border-bottom: #ddd solid 1px;">
                <?php foreach (categoryFeatureds(['width' => 370, 'height' => 240, 'limit' => settings('categories_featured_limit')]) as $category) { ?>
                    <div class="col-sm-4 col-xs-12">
                        <a href="<?php echo $category['href']; ?>" class="product-home-image">
                            <div class="s-desc" style="">
                                <h3 >
                                    <?php echo $category['name']; ?>
                                </h3>
                            </div>
                            <img src="<?php echo $category['url_image_resized']; ?>" alt="banner-3" title="banner-3"
                                width="<?php echo $category['width'] ?>" height="<?php echo $category['height'] ?>"
                                style="transition: all 0.5s ease;z-index: -100">
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<div class="commit" style="overflow:hidden">
    <div class="container" >
        <div class="col-sm-12">
            <div class="commit__heading">
                <h1 class="commit-header">Cam kết</h1>
                <div class="commit-text">
                    <?php echo web_name(); ?> được định hình là trang web về động vật, thú cưng hàng đầu. Chúng tôi cam
                    kết tất cả nội dung cung cấp trên trang đều được trích dịch từ các nguồn web nước ngoài rõ ràng, có
                    ý kiến và trích dẫn thú y. Từ đó mang lại những trải nghiệm tối nhất cho người xem.
                </div>
            </div>

            <div class="row commit__content yourclass">
                <div class="col-md-4 col-sm-12 commit__content-wrap">
                    <div class="commit__content-icon">
                        <img src="https://monspet.com/wp-content/uploads/2019/07/i1-1.png" alt="">
                    </div>
                    <div class="commit__content-header">Nội dung</div>
                    <div class="commit__content-text">Nội dung chất lượng, chính xác, có nguồn uy tín, có thú y xem xét.
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 commit__content-wrap">
                    <div class="commit__content-icon">
                        <img src="https://monspet.com/wp-content/uploads/2019/07/i2-1.png" alt="">
                    </div>
                    <div class="commit__content-header">Thú cưng</div>
                    <div class="commit__content-text">Thú cưng chất lượng, dễ thương, được kiểm định chuẩn xác theo tiêu
                        chuẩn.</div>
                </div>
                <div class="col-md-4 col-sm-12 commit__content-wrap">
                    <div class="commit__content-icon">
                        <img src="https://monspet.com/wp-content/uploads/2019/07/i3-1.png" alt="">
                    </div>
                    <div class="commit__content-header">Hỗ trợ</div>
                    <div class="commit__content-text">Hỗ trợ hết mình, hướng dẫn những nguồn khám bệnh thú cưng uy tín,
                        chất lượng.</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Friends -->
<div class="friends">
    <div class="container">
        <div class="col friends__heading">
            <h2 class="friends__header">Những người bạn</h2>
            <div class="friends__heading-text">
                <?php echo web_name(); ?> cung cấp những bài viết thông tin chủ yếu cho 4 loại thú cưng rất thường gặp
                và là những người bạn thân thiết dễ dàng bắt gặp tại mỗi gia đình người Việt chúng ta. Đó là: Chó, Mèo,
                Chim và Hamster.
            </div>
            <div class="friends__heading-text">Ngoài ra chúng tôi vẫn có 1 số bài viết về những loại động vật khác nhưng
                sẽ ít hơn.</div>
        </div>

        <div class="row col friends__wrap yourclass">
            <div class="col-lg-3 col-md-6 col-md-12 friends-img">
                <img src="https://monspet.com/wp-content/uploads/2019/07/meo.jpg" alt="">
                <div class="friends__name-item"> <i>Mèo</i></div>
            </div>
            <div class="col-lg-3 col-md-6 col-md-12 friends-img">
                <img src="https://monspet.com/wp-content/uploads/2019/07/hamster.jpg" alt="">
                <div class="friends__name-item"> <i>Hamster</i></div>
            </div>
            <div class="col-lg-3 col-md-6 col-md-12 friends-img">
                <img src="https://monspet.com/wp-content/uploads/2019/07/cho.jpg" alt="">
                <div class="friends__name-item"> <i>Chó</i></div>
            </div>
            <div class="col-lg-3 col-md-6 col-md-12 friends-img">
                <img src="https://monspet.com/wp-content/uploads/2019/07/chim.jpg" alt="">
                <div class="friends__name-item"> <i>Chim</i></div>
            </div>
        </div>
    </div>
</div>
