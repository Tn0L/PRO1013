
	<!-- product section -->
	<section class="product-section">
		<div class="container">
			<div class="back-link">
				<a href="?act=category"> &lt;&lt; Back to Category</a>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="product-pic-zoom">
						<img class="product-big-img" src="view/img/category/<?=$chitiet['hinh']?>" alt="">
					</div>
					<div class="product-thumbs" tabindex="1" style="overflow: hidden; outline: none;">
						<div class="product-thumbs-track">
							<div class="pt active" data-imgbigurl="img/single-product/1.jpg"><img src="img/single-product/thumb-1.jpg" alt=""></div>
							<div class="pt" data-imgbigurl="img/single-product/2.jpg"><img src="img/single-product/thumb-2.jpg" alt=""></div>
							<div class="pt" data-imgbigurl="img/single-product/3.jpg"><img src="img/single-product/thumb-3.jpg" alt=""></div>
							<div class="pt" data-imgbigurl="img/single-product/4.jpg"><img src="img/single-product/thumb-4.jpg" alt=""></div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 product-details">
					<h2 class="p-title"><?=$chitiet['ten_san_pham']?></h2>
					<h3 class="p-price"><?= number_format($chitiet['gia'])." đ"; ?></h3>
					<h4 class="p-stock">Available: <span>In Stock</span></h4>
					<!-- <div class="p-rating">
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o fa-fade"></i>
					</div>
					<div class="p-review">
						<a href="">3 reviews</a>|<a href="">Add your review</a>
					</div> -->
					<div class="fw-size-choose">
						<p>Color</p>
						<div class="sc-item">
							<input class="color" type="radio" name="cl" id="red" value="red" onclick="color(0)" checked>
							<label for="red" style="background: red;"></label>
						</div>
						<div class="sc-item">
							<input class="color" type="radio" name="cl" id="black" value="black" onclick="color(1)">
							<label for="black" style="background: black;" ></label>
						</div>
						<div class="sc-item">
							<input class="color" type="radio" name="cl" id="white"value="white" onclick="color(2)">
							<label for="white" style="background: white;"></label>
						</div>
					</div>
					<!-- end color -->
					<div class="fw-size-choose">
						<p>Size</p>
						<div class="sc-item">
							<input class="size" type="radio" name="sc" id="32" value="32" onclick="kichthuoc(0)" checked >
							<label for="32">32</label>
						</div>
						<div class="sc-item">
							<input class="size" type="radio" name="sc" id="34" value="34" onclick="kichthuoc(1)">
							<label for="34">34</label>
						</div>
						<div class="sc-item">
							<input class="size" type="radio" name="sc" id="36" value="36" onclick="kichthuoc(2)">
							<label for="36">36</label>
						</div>
					</div>
					<div class="quantity">
						<p>Quantity</p>
                        <div class="pro-qty"><input type="text" value="1"></div>
                    </div>
					<a data-color="red" data-kichthuoc="32" data-id="<?php echo $chitiet['ma_san_pham']?>" data-name="<?php echo $chitiet['ten_san_pham']?>" data-img="view/img/category/<?=$chitiet['hinh']?>" data-price="<?php echo $chitiet['gia']?>" class="add-to-cart site-btn" id="addtocart">SHOP NOW</a>
					<div id="accordion" class="accordion-area">
						<div class="panel">
							<div class="panel-header" id="headingOne">
								<button class="panel-link active" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">information</button>
							</div>
							<div id="collapse1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
								<div class="panel-body">
								<?=$chitiet['mo_ta']?>
								</div>
							</div>
						</div>
						<div class="panel">
							<div class="panel-header" id="headingTwo">
								<button class="panel-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">care details </button>
							</div>
							<div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
								<div class="panel-body">
									<img src="view/img/cards.png" alt="">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integer bibendum sodales arcu id te mpus. Ut consectetur lacus leo, non scelerisque nulla euismod nec.</p>
								</div>
							</div>
						</div>
						<div class="panel">
							<div class="panel-header" id="headingThree">
								<button class="panel-link" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">shipping & Returns</button>
							</div>
							<div id="collapse3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
								<div class="panel-body">
									<h4>7 Days Returns</h4>
									<p>Cash on Delivery Available<br>Home Delivery <span>3 - 4 days</span></p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integer bibendum sodales arcu id te mpus. Ut consectetur lacus leo, non scelerisque nulla euismod nec.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="social-sharing">
						<a href=""><i class="fa fa-google-plus"></i></a>
						<a href=""><i class="fa fa-pinterest"></i></a>
						<a href=""><i class="fa fa-facebook"></i></a>
						<a href=""><i class="fa fa-twitter"></i></a>
						<a href=""><i class="fa fa-youtube"></i></a>
					</div>
				</div>

				<!-- comment -->
				<div class="col-12 t-title">Bình luận</div>
				<form class="t-bl" method="post">
					<input type="text">
					<input type="submit" value="Gửi bình luận">
				</form>
				<div class="t-content"> Nội dung bình luận</div>
				<!-- end comment -->
			</div>
		</div>
	</section>
	<!-- product section end -->


	<!-- RELATED PRODUCTS section -->
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
	<!-- RELATED PRODUCTS section end -->
