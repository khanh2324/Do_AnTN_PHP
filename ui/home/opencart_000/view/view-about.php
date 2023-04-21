<div class="about">
  <ul class="breadcrumb">
    <li><a href="/home.php"><i class="fa fa-home"></i>Trang Chủ</a></li>
    <li><a href="/about.php">Giới Thiệu</a></li>
  </ul>
	<br class="pc" />
	<br class="pc" />
	<br class="pc" />

	<div class="container-box">

  <div class="row">
		<br>
		<h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mon's Pet là:</font></font></h1>
		<div id="content" class="col-sm-12">
			<div class="row container-about">
				<div class="about-heading col-sm-12 col-md-6">
				 <strong>Mon’s Pet</strong> được xây dựng dựa trên tiêu chí là cổng thông tin khổng lồ và hoàn toàn miễn phí về các vấn đề xunh quanh động vật , đặc biệt là thú cưng, cụ thể như các bệnh về chó mèo, các thực phẩm dinh dưỡng dành cho thú cưng, cách chăm sóc và điều trị bệnh cho chó mèo… Tất cả những thông tin tại Monspet được sưu tầm và tham khảo từ nhiều nguồn khác nhau có chọn lọc, bên cạnh đó còn là trải nghiệm thực tế của chúng tôi trong quá trình nuôi thú cưng để đem đến cho độc giả những thông tin chính xác và hữu ích nhất. <br /> <br />

				 <strong>Monspet.com</strong> còn là nơi kết nối, truyền tải thông tin từ bác sĩ thú y tới người đọc nhằm cung cấp đến cho người nuôi động vật, thú cưng những thông tin chính xác nhất, được kiểm duyệt từ đội ngũ bác sĩ thú y đầy uy tín. Chúng tôi thành lập Monspet dựa trên tình yêu thương dành cho động vật, thú nuôi với mong muốn tất cả các bé chó mèo, thú nuôi sẽ được chăm sóc, cứu chữa kịp thời, và không một bé nào phải “ra đi” vì chủ nuôi hay người đang cần thông tin lại không được cung cấp thông tin một cách chính xác và đầy đủ.
</div>
				<div class="about-banner col-sm-12 col-md-6">
					<img src="./ui/home/opencart_000/images/poster-about.jpg" alt="" style="width:100%;height:100%;object-fit:cover">
				</div>
			</div>
			<div class="row container-about-bot">
				<div class="col-sm-6">
					<h2>Sứ mệnh</h2>
					<div class="about-heading">
						Sứ mệnh của chúng tôi là mang đến cho độc giả, những người yêu thương thú cưng những thông tin nhanh chóng và chính xác nhất. Nhằm đảm bảo và giảm thiểu những trường hợp vì thiếu thông tin mà gây ra những việc hậu quả đáng tiếc. <br /> <br />
						Mon‘s Pet cam kết mang lại cho độc giả một trải nghiệm tốt nhất trong ngành chăm sóc thú cưng. Chúng tôi cũng như các chủ nuôi – hay những người yêu quý động vật, đều dành một tình yêu to lớn cho những người bạn bốn chân. Monspet sẽ luôn đồng hành cùng với mọi người để giúp những người bạn bốn chân của chúng ta nhận ra rằng chúng đang được yêu thương và quý trọng như thế nào..
					</div>
				</div>
				<div class="col-sm-6">
				<h2>Tầm nhìn</h2>
					<div class="about-heading">
					Chúng tôi mong muốn Mon‘s Pet sẽ trở thành địa chỉ tìm kiếm thông tin đáng tin cậy cho những người quan tâm và yêu thương động vật. Và quan trọng hơn, Monspet sẽ là người bạn đồng hành thân cậy với mọi người trong quá trình chăm sóc thú nuôi.<br /> <br />
					Chúng tôi sẽ không ngừng nỗ lực và phát triển, phủ rộng thông tin đến mọi miền đất nước, đến những nơi cần chúng tôi trong hành trình chăm sóc động vật – thú cưng..
					</div>

				</div>
			</div>
	</div>

  </div>
</div>
</div>

<script type="text/javascript">

// Khi nhấp chuột vào nút tìm kiếm ...
$('#button-search').bind('click', function() {

	// ...thì điều hướng sang trang sau...
	url = '/blog.php';

	// ...với các tham số :
	// từ khóa tìm kiếm (để so sánh với tựa đề bài viết)
	var search = $('#content input[name=\'search\']').prop('value');

	if (search) {
		url += '?search=' + encodeURIComponent(search);
	}

	// nếu người dùng muốn tìm kiếm từ khóa cả ở trong nội dung của bài viết:
	var filter_content = $('#content input[name=\'content\']:checked').prop('value');

	if (filter_content) {
		url += '&content=true';
	}

	// Bắt đầu điều hướng:
	location = url;
});

// Khi ấn phím Enter trên hộp tìm kiếm
//$('#content input[name=\'search\']').bind('keydown', function(e) {
$("#content input[name='search']").bind('keydown', function(e) {
	if (e.keyCode == 13) {
		$('#button-search').trigger('click');
	}
});


</script>