<!DOCTYPE HTML>
<?php include_once $_SERVER["DOCUMENT_ROOT"] . '/configs.php'; ?>
<HTML lang="en" dir="ltr">

<HEAD>
	<TITLE>
		<?php echo $web_title; ?>
	</TITLE>

	<META charset="UTF-8">
	<META content="IE=11.0000" http-equiv="X-UA-Compatible">
	<META http-equiv="X-UA-Compatible" content="IE=edge">
	<META name="viewport" content="width=device-width, initial-scale=1">
	<META name="description" content="The eProject1 Online Store">
	<META name="keywords" content="opencart,demo,store,ecommerce,epj1,eProject1,online">

	<!-- <LINK href="https://demo.opencart.com/image/catalog/cart.png" rel="icon"> -->
	<LINK href="<?php echo web_icon_url(); ?>" rel="icon">

	<LINK href="/ui/home/opencart_000/template_files/bootstrap.min.css" rel="stylesheet" type="text/css" media="screen">
	<LINK href="/ui/home/opencart_000/template_files/font-awesome.min.css" rel="stylesheet" type="text/css" media="screen">
	<LINK href="/ui/home/opencart_000/template_files/css.css" rel="stylesheet" rel="stylesheet" type="text/css" media="screen">
	<LINK href="/ui/home/opencart_000/template_files/stylesheet.css" rel="stylesheet" type="text/css" media="screen">
	<LINK href="/ui/home/opencart_000/template_files/flexslider.css" rel="stylesheet" type="text/css" media="screen">

	<!-- Styles that are Commonly Shared between FrontEnd UI Themes -->
	<link href="/ui/src/js/jquery/plugins/magnific/magnific-popup.css" rel="stylesheet" type="text/css" media="screen">
	<link href="/ui/src/js/jquery/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" media="screen">
	<link href="/ui/src/js/jquery/plugins/owl-carousel/owl.transitions.css" rel="stylesheet" type="text/css" media="screen">
	<link href="/ui/src/css/common-home.css" rel="stylesheet" type="text/css" media="screen">

	<SCRIPT src="/ui/home/opencart_000/template_files/jquery-2.1.1.min.js" type="text/javascript"></SCRIPT>
	<SCRIPT src="/ui/home/opencart_000/template_files/bootstrap.min.js" type="text/javascript"></SCRIPT>
	<!-- Boostrap 4 -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
	
	<!-- sửa nội dung bên trong common.js cho phù hợp với dự án EPJ1 -->
	<SCRIPT src="/ui/home/opencart_000/template_files/common.js" type="text/javascript"></SCRIPT>

	<!-- bổ sung mã nguồn giỏ hàng của EPJ1, viết đề lên của OpenCart -->
	<SCRIPT src="/ui/home/opencart_000/view/cart.js" type="text/javascript"></SCRIPT>

	<SCRIPT src="/ui/home/opencart_000/template_files/jquery.flexslider-min.js" type="text/javascript"></SCRIPT>
	<script src="/ui/src/js/jquery/plugins/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
	<!-- thư viện javascript cho xem slide ảnh chi tiết sản phẩm: -->
	<script src="/ui/src/js/jquery/plugins/magnific/jquery.magnific-popup.min.js" type="text/javascript"></script>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

	<META name="GENERATOR" content="MSHTML 11.00.9600.16384">
</HEAD>

<BODY class="common-home">
	<NAV id="menu">
		<div class="container">
			<DIV class="navbar-header pc">
				<!-- <SPAN class="visible-xs" id="category">Danh Mục</SPAN> -->
				<!-- <BUTTON class="btn btn-navbar navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-ex1-collapse"><I class="fa fa-bars"></I></BUTTON> -->
			</DIV>
			<DIV class="header-nav_main">
				<DIV class="col-sm-4">
					<a href="/" class="header-logo_link">
						<img class="header-logo_img" title="<?php echo web_name(); ?>" src="<?php echo web_logo_url(); ?>" alt="<?php echo web_name(); ?>">
					</a>
				</DIV>
				<i class="fa fa-bars menu-icon-sp sp"></i>
				<ul class="nav navbar-nav col-sm-8 header-menu_nav menu-sp d-md-none d-lg-block">
					<?php foreach (categoryGetAllForMenuHomePage() as $category) { ?>
						<?php if ($category['children']) { ?>
							<li class="dropdown position-relative">
								<a href="<?php echo $category['href']; ?>" class="dropdown-toggle" data-toggle="dropdown"><?php echo $category['name']; ?>&nbsp;</a>
								<div class="dropdown-menu menu-subnav position-absolute">
									<div class="dropdown-inner menu-subnav_inner">
										<?php foreach (array_chunk($category['children'], ceil(count($category['children']) / $category['column'])) as $children) { ?>
											<ul class="list-unstyled menu-subnav_unstyled">
												<?php foreach ($children as $child) { ?>
													<li><a href="<?php echo $child['href']; ?>"><?php echo $child['name']; ?></a></li>
												<?php } ?>
											</ul>
										<?php } ?>
									</div>
									<a href="<?php echo $category['href']; ?>" class="see-all">Xem tất cả <?php echo $category['name']; ?></a>
								</div>
							</li>
						<?php } else { ?>
							<li><a class="header-menu_link" href="<?php echo $category['href']; ?>"><?php echo $category['name']; ?></a>
							</li>
						<?php } ?>
					<?php } ?>

					<!-- <DIV class="d-block d-md-none">
					<DIV class="input-group" id="search">
						<INPUT name="search" class="form-control input-lg" type="text" placeholder="Tìm kiếm..." value="">
						<BUTTON class="btn-search" type="button"><I class="fa fa-search"></I></BUTTON>
					</DIV> -->
				</DIV>
				</ul>
			</DIV>
		</div>
	</NAV>
	<NAV id="top">
		<DIV class="container">
			<div class="topnav d-flex justify-content-between">
				<DIV class="col-lg-3 d-none d-md-block">
					<DIV class="input-group" id="search">
						<INPUT name="search" class="form-control input-lg" type="text" placeholder="Tìm kiếm..." value="">
						<BUTTON class="btn-search" type="button"><I class="fa fa-search"></I></BUTTON>
					</DIV>
				</DIV>
				<ul class="nav col-lg-8 list-inline" id="top-links">
					<li>
						<?php include_once "view/view-cart.php"; ?>
					</li>
					<LI>
						<div class="btn-group">
							<A class="btn-menu_nav" title="Đường dây nóng" href="/contact.php"><I class="fa fa-phone" style="margin-right:5px"></I>
								<SPAN class="hidden-xs hidden-sm hidden-md">
									<?php echo web_telephone(); ?>
								</SPAN>
							</A>
						</div>
					</LI>
					<LI>
						<div class="btn-group"><A class="btn-menu_nav" title="Thanh Toán" href="/checkout.php"><I class="fa fa-share" style="margin-right:5px"></I> <SPAN class="hidden-xs hidden-sm hidden-md">Thanh Toán</SPAN></A></div>
					</LI>
					<DIV class="btn-group">
						<?php if (isset($_SESSION['CUS_LOGGED'])) { ?>
							<div class="dropdown">
								<BUTTON class="btn btn-link dropdown-toggle" type="button" data-toggle="dropdown"><strong><i class="fa fa-user"></i></strong>
									<SPAN class="hidden-xs hidden-sm hidden-md">Xin chào </SPAN>
									<?php echo $_SESSION['CUS_FULLNAME'] ?> !
								</BUTTON>
								<UL class="dropdown-menu subnav-menu">
									<li class="drop-down-item"><a href="/logout.php"><i class="fa fa-sign-out"></i>&nbsp;Đăng Thoát</a>
									</li>
									<li class="drop-down-item"><a href="/account-edit.php?cid=<?php echo user_id(); ?>"><i class="fa fa-edit"></i>&nbsp;Tài Khoản Của Tôi</a></li>
									<li class="drop-down-item">
										<a href="/order-history.php"><i class="fa fa-list"></i>&nbsp;Lịch Sử Đơn Hàng</a>
									</li>
								</UL>
							</div>
						<?php } else { ?>
							<div class="drop-down">
								<BUTTON class="btn btn-link dropdown-toggle" type="button" data-toggle="dropdown"><strong><i class="fa fa-user" style="margin-right:5px"></i></strong>
									<SPAN class="hidden-xs hidden-sm hidden-md">Tài Khoản</SPAN></BUTTON>
								<UL class="dropdown-menu subnav-menu">
									<LI class="">
										<A class="register-btn_options" href="/register.php"><i class="fa fa-user"></i>&nbsp;Đăng Kí</A>
									</LI>
									<LI class="">
										<A class="register-btn_options" href="/login.php"><i class="fa fa-lock"></i>&nbsp;Đăng Nhập</A>
									</LI>
								</UL>
							</div>
						<?php } ?>
					</DIV>
				</ul>
			</div>

		</DIV>
	</NAV>

	<HEADER>

	</HEADER>

	<!-- web content, web_content, ruột -->
	<?php include_once $web_content; ?>


	<footer>
		<div class="footer__content">
			<div class="container">
				<div class="row footer__content-container">
					<div class="col-md-4 col-sm-12">
						<div class="footer__content-logo">
							<img src="https://monspet.com/wp-content/uploads/2021/06/logo-2021-monspet-size2-300x168.jpg" alt="">
						</div>
						<div class="footer__content-text"><i>Mon’s Pet là cổng thông tin khổng lồ và hoàn toàn miễn phí về các vấn
								đề xung quanh thú cưng và động vật</i></div>
					</div>

					<div class="col-md-4 col-sm-12 footer-list-page">
						<div class="footer-page-header">Danh Sách Trang</div>
						<ul class="footer-page-list">
							<li class="footer-list-page-item">
								<a href="/about.php" class="footer-list-page-link">Giới thiệu</a>
							</li>
							<li class="footer-list-page-item">
								<a href="/security.php" class="footer-list-page-link">Chính sách bảo mật</a>
							</li>
							<li class="footer-list-page-item">
								<a href="/terms.php" class="footer-list-page-link">Điều khoản dịch vụ</a>
							</li>
							<li class="footer-list-page-item">
								<a href="/contact.php" class="footer-list-page-link">Liên hệ</a>
							</li>
						</ul>
						<div class="footer-page-license">@Bản quyền bài viết thuộc về Monspet.com</div>

					</div>

					<div class="col-md-4 col-sm-12 footer-link-page">
						<div class="footer-page-header">Link Fanpage Facebook</div>
						<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fmonspet%2F&tabs=timeline&width=320&height=252&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="400" height="252" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
					</div>
				</div>

				<div class="row">
					<!-- p>Copyright © <?php echo date('Y') ?> <?php echo web_name(); ?>. All Rights Reserved.</p  -->
					<div class="col-lg-6">
						<div class='d-sm-flex'>
							©
							<?php echo date('Y') ?>
							<?php echo web_name(); ?>
						</div>
					</div>
					<div class="col-lg-6">
						<ul class="list-inline">
							<li><a title="Facebook" href="https://facebook.com"><i class="fa fa-facebook"></i></a></li>
							<li><a title="Twitter" href="https://twitter.com"><i class="fa fa-twitter"></i></a></li>
							<!-- <li><a title="Google"   href="https://plus.google.com"><i class="fa fa-google-plus"></i></a></li> -->
							<li><a title="Youtube" href="https://youtube.com"><i class="fa fa-youtube"></i></a></li>

							<!-- <li><a title="Linked In"   href="https://linkedin.com"><i class="fa fa-linkedin"></i></a></li> -->
							<li><a title="Instagram" href="http://instagram.com"><i class="fa fa-instagram"></i></a></li>
							
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
</BODY>
<script text="text/javascript">
	const menu = document.querySelector(".menu-sp")
	const toggle = document.querySelector(".menu-icon-sp");
	toggle.addEventListener("click", function() {
		menu.classList.toggle("is-show")
		toggle.classList.toggle("color");
	});
	document.addEventListener("click", handleClickOutMenu);

	function handleClickOutMenu(event) {
		if (!menu.contains(event.target) && !event.target.matches(".menu-icon-sp")) {
			menu.classList.remove("is-show")
		}
	}
</script>

</HTML>