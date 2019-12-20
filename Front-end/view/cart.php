
	<!-- cart section end -->
	<section class="cart-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="cart-table">
						<h3>Your Cart</h3>
						<div class="cart-table-warp">
							<table>
							<thead>
								<tr>
									<th class="product-th">Sản phẩm</th>
									<th class="quy-th">Name</th>
									<th class="total-th">Giá</th>
									<th class="quy-th">Số lượng</th>
									<th  class="quy-th">Màu</th>
									<th class="size-th">Kích cỡ</th>
									<th class="total-th">Tổng cộng</th>
								</tr>
							</thead>
							<tbody class="show-cart">
								
							</tbody>
						</table>
						</div>
						<div class="total-cost">
							<h6>Tổng cộng $<span class="total-cart"></span> </h6>
						</div>
					</div>
				</div>
				<div class="col-lg-4 card-right">
					<a style="color:white;" class="clear-cart site-btn bg-primary">Xóa giỏ hàng</a>
					<a href="" class="site-btn">Kiểm tra</a>
					<a href="" class="site-btn sb-dark">Tiếp tục mua hàng</a>
				</div>
			</div>
		</div>
	</section>
	<!-- cart section end -->
	<div class="container">
			<div class="row">
				<div class="col-lg-8 order-2 order-lg-1">
					<form class="checkout-form">
						<div class="cf-title">Khách hàng</div>
						<div class="row address-inputs">
							<div class="col-md-12">
								<input type="text" placeholder="Địa chỉ">
								<input type="text" placeholder="Tên">
								<input type="text" placeholder="Email">
							</div>
							<div class="col-md-6">
								<input type="text" placeholder="Zip code">
							</div>
							<div class="col-md-6">
								<input type="text" placeholder="Số điện thoại">
							</div>
						</div>
						<!-- <div class="cf-title">Delievery Info</div> -->
						<div class="row shipping-btns">
							<div class="col-6">
								<!-- <h4>Standard</h4> -->
							</div>
							<!-- <div class="col-6">
								<div class="cf-radio-btns">
									<div class="cfr-item">
										<input type="radio" name="shipping" id="ship-1">
										<label for="ship-1">Free</label>
									</div>
								</div>
							</div>
							<div class="col-6">
								<h4>Next day delievery  </h4>
							</div>
							<div class="col-6">
								<div class="cf-radio-btns">
									<div class="cfr-item">
										<input type="radio" name="shipping" id="ship-2">
										<label for="ship-2">$3.45</label>
									</div>
								</div>
							</div> -->
						</div>
						<!-- <div class="cf-title">Payment</div>
						<ul class="payment-list">
							<li>Paypal<a href="#"><img src="view/img/paypal.png" alt=""></a></li>
							<li>Credit / Debit card<a href="#"><img src="view/img/mastercart.png" alt=""></a></li>
							<li>Pay when you get the package</li>
						</ul> -->
						<button class="site-btn submit-order-btn">ĐẶT HÀNG</button>
					</form>
				</div>
				<!-- <div class="col-lg-4 order-1 order-lg-2">
					<div class="checkout-cart">
						<h3>Your Cart</h3>
						<ul class="product-list">
							<li>
								<div class="pl-thumb"><img src="view/img/cart/1.jpg" alt=""></div>
								<h6>Animal Print Dress</h6>
								<p>$45.90</p>
							</li>
							<li>
								<div class="pl-thumb"><img src="view/img/cart/2.jpg" alt=""></div>
								<h6>Animal Print Dress</h6>
								<p>$45.90</p>
							</li>
						</ul>
						<ul class="price-list">
							<li>Total<span>$99.90</span></li>
							<li>Shipping<span>free</span></li>
							<li class="total">Total<span>$99.90</span></li>
						</ul>
					</div>
				</div> -->
			</div>
		</div>
	<!-- Related product section -->
	<section class="related-product-section">
		<div class="container">
			<div class="section-title">
				<h2>Tiếp tục mua hàng</h2>
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

