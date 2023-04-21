<ul class="breadcrumb">
    <div class="container breadcrumb-wrap">
        <li><a href="/home.php"><i class="fa fa-home"></i>Trang Chủ</a></li>
        <li><a href="/product-info.php?product_id=<?php echo $_GET['product_id']; ?>"><?php echo $product_info['name']; ?></a></li>
    </div>
</ul>
<div class="container">

    <div class="row">
        <div id="content" class="col-sm-12">
            <div class="row">
                <div class="col-sm-6">
                    <?php if ($product_info['thumb'] || $product_info['product_images']) { ?>
                        <ul class="list-product_image thumbnails">
                            <?php if ($product_info['thumb']) { ?>
                                <li><a class="main-product_image" href="<?php echo $product_info['popup']; ?>" title="<?php echo $product_info['name']; ?>">
                                    <img src="<?php echo $product_info['thumb']; ?>" title="<?php echo $product_info['name']; ?>" alt="<?php echo $product_info['name']; ?>" />
                                </a></li>
                            <?php } ?>
                            <?php if ($product_info['product_images']) { ?>
                                <?php foreach ($product_info['product_images'] as $image) { ?>
                                    <li class="image-additional">
                                        <a class="thumbnail" rel="fancybox" href="<?php echo $image['popup']; ?>" title="<?php echo $product_info['name']; ?>"> <img src="<?php echo $image['thumb']; ?>" title="<?php echo $product_info['name']; ?>" alt="<?php echo $product_info['name']; ?>" /></a>
                                    </li>
                                <?php } ?>
                            <?php } ?>
                        </ul>
                    <?php } ?>
                </div>
                <div class="col-sm-6">
                    <h1 style="margin-top:0"><?php echo $product_info['name']; ?></h1>
                    <ul class="list-unstyled" style="margin-top:20px">
                        <li style="font-size:16px;color:#333; margin-bottom:10px">Nhà Sản Xuất: <a style="color:red; font-weight:bold; margin-lèt:5px" href="<?php echo $product_info['manufacturer_href']; ?>"><?php echo $product_info['manufacturer']; ?></a></li>
                        <li style="font-size:16px;color:#333; margin-bottom:10px">Model: <a style="color:red; font-weight:bold; margin-lèt:5px"> <?php echo $product_info['model']; ?></a></li>
                        <li style="font-size:16px;color:#333; margin-bottom:10px">Tình Trạng: <a style="color:red; font-weight:bold; margin-lèt:5px"><?php echo $product_info['availability']; ?></a></li>
                        <li style="font-size:16px;color:#333; margin-bottom:10px; display:flex; align-items:center">Đánh Giá:
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#f9ca24" width="25px" height="25px" viewBox="0 0 32 32" version="1.1"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"> <title>star</title> <path d="M3.488 13.184l6.272 6.112-1.472 8.608 7.712-4.064 7.712 4.064-1.472-8.608 6.272-6.112-8.64-1.248-3.872-7.808-3.872 7.808z"/> </g></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#f9ca24" width="25px" height="25px" viewBox="0 0 32 32" version="1.1"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"> <title>star</title> <path d="M3.488 13.184l6.272 6.112-1.472 8.608 7.712-4.064 7.712 4.064-1.472-8.608 6.272-6.112-8.64-1.248-3.872-7.808-3.872 7.808z"/> </g></svg><svg xmlns="http://www.w3.org/2000/svg" fill="#f9ca24" width="25px" height="25px" viewBox="0 0 32 32" version="1.1"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"> <title>star</title> <path d="M3.488 13.184l6.272 6.112-1.472 8.608 7.712-4.064 7.712 4.064-1.472-8.608 6.272-6.112-8.64-1.248-3.872-7.808-3.872 7.808z"/> </g></svg><svg xmlns="http://www.w3.org/2000/svg" fill="#f9ca24" width="25px" height="25px" viewBox="0 0 32 32" version="1.1"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"> <title>star</title> <path d="M3.488 13.184l6.272 6.112-1.472 8.608 7.712-4.064 7.712 4.064-1.472-8.608 6.272-6.112-8.64-1.248-3.872-7.808-3.872 7.808z"/> </g></svg><svg xmlns="http://www.w3.org/2000/svg" fill="#f9ca24" width="25px" height="25px" viewBox="0 0 32 32" version="1.1"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"> <title>star</title> <path d="M3.488 13.184l6.272 6.112-1.472 8.608 7.712-4.064 7.712 4.064-1.472-8.608 6.272-6.112-8.64-1.248-3.872-7.808-3.872 7.808z"/> </g></svg>
                        </div>
                    </li>

                    </ul>
                    <ul class="list-unstyled">
                        <li>
                            <h2><?php echo $product_info['price']; ?></h2>
                        </li>
                    </ul>
                    <div id="product">
                        <div class="form-group pt-3">
                            <div class="d-flex align-items-center">
                                <h3 class="control-label font-weight-bold font-size" for="input-quantity">Số Lượng : </h3>
                                <input type="text" name="quantity" value="1" size="2" id="input-quantity" class="form-control product-info-form-control" />
                                <input type="hidden" name="product_id" value="<?php echo $_GET['product_id']; ?>" />
                            </div>
                            <br />
                            <button onclick="" type="button" id="button-cart" data-loading-text="<?php echo $text_loading; ?>" class="btn btn-outline-primary btn-lg btn-block w-50 py-3 mt-4">Thêm vào giỏ hàng</button>
                        </div>
                        <?php if ($minimum > 1) { ?>
                            <div class="alert alert-info"><i class="fa fa-info-circle"></i> Tối thiểu</div>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <!--  trước đây là sản phẩm nổi bật, có thể xem lại code trong view-product-info.php -->

            <?php if ($tags) { ?>
                <p><?php echo $text_tags; ?>
                    <?php for ($i = 0; $i < count($tags); $i++) { ?>
                        <?php if ($i < (count($tags) - 1)) { ?>
                            <a href="<?php echo $tags[$i]['href']; ?>"><?php echo $tags[$i]['tag']; ?></a>,
                        <?php } else { ?>
                            <a href="<?php echo $tags[$i]['href']; ?>"><?php echo $tags[$i]['tag']; ?></a>
                        <?php } ?>
                    <?php } ?>
                </p>
            <?php } ?>
        </div>
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tab-description" data-toggle="tab">Mô tả</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="tab-description"><?php echo $product_info['description']; ?></div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $('#button-cart').on('click', function() {
        $.ajax({
            url: '/cart-add.php',
            type: 'post',
            data: $('#product input[type=\'text\'], #product input[type=\'hidden\'], #product input[type=\'radio\']:checked, #product input[type=\'checkbox\']:checked, #product select, #product textarea'),
            dataType: 'json',
            beforeSend: function() {
                $('#button-cart').button('loading');
            },
            complete: function() {
                $('#button-cart').button('reset');
            },
            success: function(json) {
                $('.alert, .text-danger').remove();
                $('.form-group').removeClass('has-error');

                if (json['error']) {
                    if (json['error']['option']) {
                        for (i in json['error']['option']) {
                            var element = $('#input-option' + i.replace('_', '-'));

                            if (element.parent().hasClass('input-group')) {
                                element.parent().after('<div class="text-danger">' + json['error']['option'][i] + '</div>');
                            } else {
                                element.after('<div class="text-danger">' + json['error']['option'][i] + '</div>');
                            }
                        }
                    }

                    if (json['error']['recurring']) {
                        $('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');
                    }

                    // Highlight any found errors
                    $('.text-danger').parent().addClass('has-error');
                }

                if (json['success']) {
                    $('.breadcrumb').after('<div class="alert alert-success">' + json['success'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');

                    $('#cart-total').html(json['total']);

                    $('html, body').animate({
                        scrollTop: 0
                    }, 'slow');

                    //$('#cart > ul').load('index.php?route=common/cart/info ul li');
                    // tải lại nội dung html của giỏ hàng bằng (ajax load) lấy từ nguồn: /common/cart-info.php
                    // chỉ lấy phần nội dung bên trong phần tử html có id="cart"
                    // sau đó đắp phần html đó vào bên trong phần tử id="cart" của trang hiện tại.
                    $('#cart').load('/cart-ajax.php#cart > *');
                }
            }
        });
    });
</script>

<script type="text/javascript">
    $(function() {
        $('.date').datetimepicker({
            pickTime: false
        });

        $('.datetime').datetimepicker({
            pickDate: true,
            pickTime: true
        });

        $('.time').datetimepicker({
            pickDate: false
        });
    });
</script>

<script type="text/javascript">
    //Slideshow ảnh sản phẩm
    // đừng có cố đưa bxslider, elevatezoom vào đây
    // vì mã html/css không tương thích tí nào.
    // nếu thích thì tích hợp thêm một bản horizontal slide vào themes mẫu
    // một bản vertical slide (khó) vào nữa.
    // $(document).ready(function() { // không chạy !!!

    // 	$('.thumbnails').magnificPopup({
    // 		type:'image',
    // 		delegate: 'li > a',
    // 		gallery: {
    // 			enabled:true
    // 		}
    // 	});

    // });

    $('.thumbnails').magnificPopup({ // chạy ngon (: >
        type: 'image',
        delegate: 'li > a',
        gallery: {
            enabled: true
        }
    });
</script>