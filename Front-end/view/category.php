<!-- Category section -->
	<section class="category-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 order-2 order-lg-1">
					<div class="filter-widget">
						<h2 class="fw-title">Loại</h2>
						<ul class="category-menu">
							<?php foreach($danhmuc as $data):?>
								<li><a href="?act=category&id_loai=<?=$data['ma_loai']?>"><?= $data['ten_loai']?></a></li>
							<?php endforeach; ?>

							<!-- <li><a href="#">Nữ</a>
								<ul class="sub-menu">
									// ở đây
								</ul>
							</li>
							<li><a href="#">Nam</a>
								<ul class="sub-menu">
									<li><a href="#">Loại 2 <span>(3)</span></a></li>
								</ul></li>
							<li><a href="#">Trẻ Trâu</a>
								<ul class="sub-menu">
									<li><a href="#">Loại 3 <span>(4)</span></a></li>
								</ul>
							</li> -->

						</ul>
					</div>
					<!-- <div class="filter-widget mb-0">
						<h2 class="fw-title">refine by</h2>
						<div class="price-range-wrap">
							<h4>Price</h4>
                            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" data-min="10" data-max="270">
								<div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 0%; width: 100%;"></div>
								<span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0%;">
								</span>
								<span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 100%;">
								</span>
							</div>
							<div class="range-slider">
                                <div class="price-input">
                                    <input type="text" id="minamount">
                                    <input type="text" id="maxamount">
                                </div>
                            </div>
                        </div>
					</div> -->
					<div class="filter-widget mb-0">
						<h2 class="fw-title">color by</h2>
						<div class="fw-color-choose">
							<div class="cs-item">
								<input type="radio" name="cs" id="gray-color">
								<label class="cs-gray" for="gray-color">
									<span>(3)</span>
								</label>
							</div>
							<div class="cs-item">
								<input type="radio" name="cs" id="orange-color">
								<label class="cs-orange" for="orange-color">
									<span>(25)</span>
								</label>
							</div>
							<div class="cs-item">
								<input type="radio" name="cs" id="yollow-color">
								<label class="cs-yollow" for="yollow-color">
									<span>(112)</span>
								</label>
							</div>
							<div class="cs-item">
								<input type="radio" name="cs" id="green-color">
								<label class="cs-green" for="green-color">
									<span>(75)</span>
								</label>
							</div>
							<div class="cs-item">
								<input type="radio" name="cs" id="purple-color">
								<label class="cs-purple" for="purple-color">
									<span>(9)</span>
								</label>
							</div>
							<div class="cs-item">
								<input type="radio" name="cs" id="blue-color" checked="">
								<label class="cs-blue" for="blue-color">
									<span>(29)</span>
								</label>
							</div>
						</div>
					</div>
					<div class="filter-widget mb-0">
						<h2 class="fw-title">Size</h2>
						<div class="fw-size-choose">
							<div class="sc-item">
								<input type="radio" name="sc" id="xs-size">
								<label for="xs-size">37</label>
							</div>
							<div class="sc-item">
								<input type="radio" name="sc" id="s-size">
								<label for="s-size">38</label>
							</div>
							<div class="sc-item">
								<input type="radio" name="sc" id="m-size"  checked="">
								<label for="m-size">39</label>
							</div>
							<div class="sc-item">
								<input type="radio" name="sc" id="l-size">
								<label for="l-size">40</label>
							</div>
							<div class="sc-item">
								<input type="radio" name="sc" id="xl-size">
								<label for="xl-size">41</label>
							</div>
							<div class="sc-item">
								<input type="radio" name="sc" id="xxl-size">
								<label for="xxl-size">42</label>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-9  order-1 order-lg-2 mb-5 mb-lg-0">
					<div class="row">
						<?php foreach($sanpham as $get_product): ?>

							<div class="col-lg-4 col-sm-6">
								<div class="product-item">
								<?php $listColor = listColor($get_product['ma_san_pham']);
									foreach ($listColor as $hinh):
								?>
										<div class="pi-pic">
										<a href="?act=product&id=<?=$hinh['ma_san_pham']?>&idcolor=<?=$hinh['id']?>">
										<img src="view/img/category/<?= $hinh['hinh']?>" alt=""></a>
											<div class="pi-links">
												<!-- <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a> -->
												<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
											</div>
										</div>
								<?php endforeach ?>
									<div class="pi-text">
										<h6><?= $get_product['gia']?></h6>
										<a href="?act=product&id=<?=$get_product['ma_san_pham']?>&idcolor=<?=$hinh['id']?>"><?= $get_product['ten_san_pham']?></a>
									</div>
								</div>
							</div>

						<?php endforeach; ?>
						<div class="col-md-12 text-center">
								<div class="block-27">
							<ul>
								<li><a href="#"><i class="ion-ios-arrow-back"></i></a></li>
								<?=$phantrang;?>
								<li><a href="#"><i class="ion-ios-arrow-forward"></i></a></li>
							</ul>
							</div>
							</div>
						<div class="text-center w-100 pt-3">
							<a href="?act=category"><button class="site-btn sb-line sb-dark">XEM THÊM</button></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Category section end -->
