
	<!-- Contact section -->
	<section class="contact-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 contact-info">
					<h3>Get in touch</h3>
					<p>Main Str, no 23, New York</p>
					<p>+546 990221 123</p>
					<p>hosting@contact.com</p>
					<div class="contact-social">
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>
					</div>
					<form class="contact-form">
						<input type="text" placeholder="Your name">
						<input type="text" placeholder="Your e-mail">
						<input type="text" placeholder="Subject">
						<textarea placeholder="Message"></textarea>
						<button class="site-btn">SEND NOW</button>
					</form>
				</div>
			</div>
		</div>
		<div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14376.077865872314!2d-73.879277264103!3d40.757667781624285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1546528920522" style="border:0" allowfullscreen></iframe></div>
	</section>
	<!-- Contact section end -->


	<!-- Related product section -->
	<section class="related-product-section">
		<div class="container">
			<div class="section-title">
				<h2>RELATED PRODUCTS</h2>
			</div>
			<div class="product-slider owl-carousel">

			<?php foreach($sanpham as $get_product): ?>
				<div class="product-item">
					<div class="pi-pic">
					<a href="?act=product&id=<?=$get_product['ma_san_pham']?>"><img src="view/img/category/<?= $get_product['hinh']?>" alt=""></a>
						<div class="pi-links">
							<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
							<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
						</div>
					</div>
					<div class="pi-text">
						<h6><?= $get_product['gia']?></h6>
						<a href="?act=product&id=<?=$get_product['ma_san_pham']?>"><?= $get_product['ten_san_pham']?></a>
					</div>
				</div>
			<?php endforeach; ?>
			</div>
		</div>
	</section>
	<!-- Related product section end -->

