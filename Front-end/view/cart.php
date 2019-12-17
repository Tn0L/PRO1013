
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

