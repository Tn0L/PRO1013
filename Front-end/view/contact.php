<!-- Contact section -->
<section class="contact-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 contact-info">
					<h3>Liên Lạc</h3>
					<p>Cao Đẳng Thực Hành FPT-Polytechnic</p>
					<p>098 172 58 36</p>
					<p>starsneaker@online.com</p>
					<div class="contact-social">
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
					</div>
					<form method="post" class="contact-form">
						<input name="ten" type="text" placeholder="Tên">
						<input name="email" type="text" placeholder="Email">
						<input name="sdt" type="text" placeholder="Số điện thoại">
						<textarea name="noidung" placeholder="Nội dung"></textarea>
						<input type="submit" name="send" value="Gửi" class="btn">
					</form>
				</div>
			</div>
		</div>
		<div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d62702.177561812874!2d106.6234734!3d10.8200279!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752a20be133a37%3A0x2222564f53ae22
		8d!2zQ8O0bmcgVmnDqm4gUGjhuqduIE3hu4FtIFF1YW5nIFRydW5n!5e0!3m2!1svi!2s!4v1576142048408!5m2!1svi!2s" width="100" height="300" frameborder="0" style="border:0;"></iframe></div>
	</section>
	<!-- Contact section end -->


	<!-- Related product section -->
	<section class="related-product-section">
		<div class="container">
			<div class="section-title">
				<h2>SẢN PHẨM LIÊN QUAN</h2>
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