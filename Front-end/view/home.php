


	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">

			<div class="hs-item set-bg" data-setbg="view/img/bg.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-white">
							<span>SẢN PHẨM MỚI</span>
							<h2>denim jackets</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
							<a href="#" class="site-btn sb-line">DISCOVER</a>
							<a href="#" class="site-btn sb-white">ADD TO CART</a>
						</div>
					</div>
					<div class="offer-card text-white">
						<span>from</span>
						<h2>$29</h2>
						<p>SHOP NOW</p>
					</div>
				</div>
			</div>

			<div class="hs-item set-bg" data-setbg="view/img/bg-2.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-white">
							<span>New Arrivals</span>
							<h2>denim jackets</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
							<a href="#" class="site-btn sb-line">DISCOVER</a>
							<a href="#" class="site-btn sb-white">ADD TO CART</a>
						</div>
					</div>
					<div class="offer-card text-white">
						<span>from</span>
						<h2>$29</h2>
						<p>SHOP NOW</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="slide-num-holder" id="snh-1"></div>
		</div>
	</section>
	<!-- Hero section end -->



	<!-- Features section -->
	<section class="features-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="view/img/icons/1.png" alt="#">
						</div>
						<h2>Fast Secure Payments</h2>
					</div>
				</div>
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="view/img/icons/2.png" alt="#">
						</div>
						<h2>Premium Products</h2>
					</div>
				</div>
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="view/img/icons/3.png" alt="#">
						</div>
						<h2>Free & fast Delivery</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Features section end -->


	<!-- letest product section -->
	<section class="top-letest-product-section">
		<div class="container">
			<div class="section-title">
				<h2>SẢN PHẨM MỚI</h2>
			</div>
			<div class="product-slider owl-carousel">
			<?php foreach($spmoi as $dulieu):?>
				<div class="product-item">
					<div class="pi-pic">
					<a href="?act=category&id=<?=$dulieu['ma_san_pham']?>"><img src="view/img/category/<?= $dulieu['hinh']?>" alt=""></a>
						<div class="pi-links">
							<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
							<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
						</div>
					</div>
					<div class="pi-text">
						<h6><?=$dulieu['gia']?></h6>
						<p><a href="?act=category&id=<?=$dulieu['ma_san_pham']?>"><?= $dulieu['ten_san_pham']?></a></p>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
	<!-- letest product section end -->



	<!-- Product filter section -->
	<section class="product-filter-section">
		<div class="container">
			<div class="section-title">
				<h2>SẢN PHẨM BÁN CHẠY </h2>
			</div>

			<ul class="product-filter-menu row justify-content-center">
				<?php foreach($danhmuc as $data):?>
					<li><a href="?act=category&id_loai=<?=$data['ma_loai']?>"><?= $data['ten_loai']?></a></li>
				<?php endforeach; ?>
			</ul>
			<div class="row">
			<?php foreach($sphome as $dulieu):?>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
						<a href="?act=category&id=<?=$dulieu['ma_san_pham']?>"><img src="view/img/category/<?= $dulieu['hinh']?>" alt=""></a>
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6><?=$dulieu['gia']?></h6>
							<p><a href="?act=category&id=<?=$dulieu['ma_san_pham']?>"><?= $dulieu['ten_san_pham']?></a></p>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
			</div>
			<div class="text-center pt-5">
				<a href="?act=category" class="site-btn sb-line sb-dark">LOAD MORE</a>
			</div>
		</div>
	</section>
	<!-- Product filter section end -->


	<!-- Banner section -->
	<!-- Banner section end  -->

