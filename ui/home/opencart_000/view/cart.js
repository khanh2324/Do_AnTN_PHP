
/**
 * @return void
 * @abstract Tìm kiếm sản phẩm
 */
function search() 
{
	// Trang tìm kiếm 
	url = '/search.php';

	// Từ khóa mà người dùng gõ vào hộp tìm kiếm...
	var value = $('input[name=\'search\']').val();
	
	// ...được bổ sung vào đuôi url tìm kiếm như là một 
	// tham số truy vấn
	// ví dụ: http://localhost:82/search.php?search=iphone
	if (value) {
		url += '?search=' + encodeURIComponent(value);
	}

	// Điều hướng cửa sổ trình duyệt sang trang tìm kiếm
	window.location = url;
}

var cart = {
	'add': function(product_id, quantity) { 
		$.ajax({
			url: '/cart-add.php',
			type: 'post',
			data: 'product_id=' + product_id + '&quantity=' + (typeof(quantity) != 'undefined' ? quantity : 1),
			dataType: 'json',
			beforeSend: function() {
				$('#cart > button').button('loading');
			},
			success: function(json) {	
				$('.alert, .text-danger .success, .warning, .attention, .information, .error').remove();

				$('#cart > button').button('reset');
				if (json['redirect']) {
						
						location = json['redirect'];
				}
					
					
				if (json['success']) {
						
						$('#content').parent().before('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + json['success'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
						
						$('.alert-success').fadeOut(10000);
						
						// cập nhật thông tin số sản phẩm trong giỏ hàng
						$('#cart-total').html(json['total']);
						
						// cuộn lên đầu trang
						$('html, body').animate({ scrollTop: 0 }, 'slow');

				
						$('#cart').load('/cart-ajax.php#cart > *');
						
						
				}
			},
			error: function(){
				alert('Lỗi!-Không thêm sản phẩm vào giỏ hàng được! Kiểm tra đường dẫn ajax và thử lại.');
			}
		});
	},
	'update': function(product_id, quantity) {
		$.ajax({
			url: '/cart-edit.php',
			type: 'post',
			data: 'product_id=' + product_id + '&quantity=' + (typeof(quantity) != 'undefined' ? quantity : 1),
			dataType: 'json',
			beforeSend: function() {
				$('#cart > button').button('loading');
			},
			success: function(json) {
				//$('#cart > button').button('reset');

				$('#cart-total').html(json['total']);

				if ( window.location.pathname == '/cart.php')
				{ 
					location = '/cart.php';
				} 
				else 
				{
					
					$('#cart').load('/cart-ajax.php#cart > *');
				}
			}
		});
	},
	'remove': function(product_id) { 
		$.ajax({
			url: '/cart-remove.php', 
			type: 'post',
			data: 'product_id=' + product_id,
			dataType: 'json',
			beforeSend: function() {
				$('#cart > button').button('loading');
			},
			success: function(json) { 
				//$('#cart > button').button('reset');

				$('#cart-total').html(json['total']);

				if ( window.location.pathname == '/cart.php')
				{ 
					
					location = '/cart.php';
				} 
				else 
				{
					
					$('#cart').load('/cart-ajax.php#cart > *');
				}
			},
			error: function(){
				alert('error!');
			}
		});
	}
} // kết thúc giỏ hàng

// So sánh sản phẩm
var compare = {
	    'add': function(product_id) {
	        $.ajax({
	            url: '/product-compare-add.php',
	            type: 'post',
	            data: 'product_id=' + product_id,
	            dataType: 'json',
	            success: function(json) {
	                $('.alert').remove();
	                if (json['success']) {
	                    $('#content').parent().before('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + json['success'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
	                    $('#compare-total').html(json['total']);
	                    $('html, body').animate({
	                        scrollTop: 0
	                    }, 'slow');
	                }
	            }
	        });
	    },
	    'remove': function() {}
}// kết thúc so sánh sản phẩm

$(document).ready(function(){
	
	// menu tiền tệ, menu tài khoản, đăng kí, đăng nhập...trong layout.php
	$(".dropdown-toggle").dropdown();
});
