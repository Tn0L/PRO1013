<div class="main-panel">
    <div class="content-wrapper">        
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-format-list-bulleted"></i>
                </span> Sản Phẩm 
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form class="needs-validation" action="?act=category" method="post">
                        <div class="form-group">
                            <label for="id">Id</label>
                            <input type="text" class="form-control" name="id" value="<?php if(isset($_GET['idCategory'])){echo $_GET['idCategory'];}else{echo "";}?>" >
                        </div>
                        <div class="form-group">
                            <label for="kind">Loại</label>
                            <input type="text" class="form-control" name="nameCategory" value="<?php if(isset($_GET['nameCategory'])){echo $_GET['nameCategory'];}else{echo "";}?>" placeholder="Loại Sản Phẩm" required>
                        </div>
                        <div class="justify-content-center row">
                            <button type="submit" name="submit" value="submit" class="btn btn-gradient-primary mr-2">Thêm</button>
                            <button type="submit" name="edit" value="edit" class="btn btn-gradient-info btn-fw">Sửa</button>
                        </div>    
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive-xl" id="accordion">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="th"> </th>
                                    <th class="th "> Tên Sản Phẩm </th>
                                    <th class="th "> Loại </th>
                                    <th class="th "> Giá </th>
                                    <th class="th head-detail"> Chi Tiết </th>
                                    <th class="th head-fix" style="width:100px"> Thêm / Sửa / Xóa </th>

                                </tr>
                            </thead>
                            <tbody >
                                <tr>
                                    <td> 1 </td>
                                    <td> Ultraboost 20 </td>
                                    <td>
                                        Ngoài Trời
                                    </td>
                                    <td> $ 249.99 </td>
                                    <td class="td-detail">
                                        <i class="mdi mdi-swap-vertical detail col" data-toggle="collapse" data-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1"></i>
                                    </td>
                                    <td>
                                        <a href="">
                                            <i class="mdi mdi-library-plus add col" ></i>
                                        </a> 
                                        <a  href="">
                                            <i class="mdi mdi-auto-fix fix col"></i>
                                        </a>
                                        <a  href="">
                                            <i class="mdi mdi-delete delete col" ></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr >
                                    <td colspan="6" class="td-detail-product">
                                        <div id="collapse-1" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" colspan="6">
                                            <div class="detail-product">
                                                <div class="justify-content-center row">
                                                    <div class="col-12 col-md-5">
                                                        <div class="detail-act">
                                                            <a href="">
                                                                <i class="mdi mdi-library-plus add col" ></i>
                                                            </a> 
                                                            <a  href="">
                                                                <i class="mdi mdi-auto-fix fix col"></i>
                                                            </a>
                                                            <a  href="">
                                                                <i class="mdi mdi-delete delete col" ></i>
                                                            </a>
                                                        </div>
                                                        <div class="detail-color" style="background:white">

                                                        </div>
                                                        <div id="product-color-1" class="carousel slide detail-slide" data-ride="carousel">
                                                            <ol class="carousel-indicators">
                                                                <li data-target="#product-color-1" data-slide-to="0" class="active"></li>
                                                                <li data-target="#product-color-1" data-slide-to="1"></li>
                                                                <li data-target="#product-color-1" data-slide-to="2"></li>
                                                            </ol>
                                                            <div class="carousel-inner">
                                                                <div class="carousel-item active">
                                                                    <img class="d-block " src="./uploads/products/EG0695-01-white.jpg" alt="First slide">
                                                                </div>
                                                                <div class="carousel-item">
                                                                    <img class="d-block " src="./uploads/products/EG0695-02-white.jpg" alt="Second slide">
                                                                </div>
                                                                <div class="carousel-item">
                                                                    <img class="d-block " src="./uploads/products/EG0695-03-white.jpg" alt="Third slide">
                                                                </div>
                                                            </div>
                                                            <a class="carousel-control-prev" href="#product-color-1" role="button" data-slide="prev">
                                                                <span class="mdi mdi-format-align-left" aria-hidden="true"></span>
                                                                
                                                            </a>
                                                            <a class="carousel-control-next" href="#product-color-1" role="button" data-slide="next">
                                                                <span class="mdi mdi-format-align-right" aria-hidden="true"></span>
                                                                
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-7 row justify-content-start">
                                                        <div class="detail-size-head">
                                                            <b>Kích Cỡ</b>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6 col-lg-4">
                                                            <div class="detail-size">    
                                                                <div class="detail-act">
                                                                    <a  href="">
                                                                        <i class="mdi mdi-auto-fix fix col"></i>
                                                                    </a>
                                                                    <a  href="">
                                                                        <i class="mdi mdi-delete delete col" ></i>
                                                                    </a>
                                                                </div>
                                                                <div class="size-sl">
                                                                    <b class="col">Size : <span>38</span></b>
                                                                </div>
                                                                <div class="size-sl">
                                                                    <b class="col">Số Lượng : <span>10</span> Đôi</b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6 col-lg-4">
                                                            <div class="detail-size">    
                                                                <div class="detail-act">
                                                                    <a  href="">
                                                                        <i class="mdi mdi-auto-fix fix col"></i>
                                                                    </a>
                                                                    <a  href="">
                                                                        <i class="mdi mdi-delete delete col" ></i>
                                                                    </a>
                                                                </div>
                                                                <div class="size-sl">
                                                                    <b class="col">Size : <span>39</span></b>
                                                                </div>
                                                                <div class="size-sl">
                                                                    <b class="col">Số Lượng : <span>10</span> Đôi</b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6 col-lg-4">
                                                            <div class="detail-size">    
                                                                <div class="detail-act">
                                                                    <a  href="">
                                                                        <i class="mdi mdi-auto-fix fix col"></i>
                                                                    </a>
                                                                    <a  href="">
                                                                        <i class="mdi mdi-delete delete col" ></i>
                                                                    </a>
                                                                </div>
                                                                <div class="size-sl">
                                                                    <b class="col">Size : <span>40</span></b>
                                                                </div>
                                                                <div class="size-sl">
                                                                    <b class="col">Số Lượng : <span>10</span> Đôi</b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6 col-lg-4">
                                                            <div class="detail-size">    
                                                                <div class="detail-act">
                                                                    <a  href="">
                                                                        <i class="mdi mdi-auto-fix fix col"></i>
                                                                    </a>
                                                                    <a  href="">
                                                                        <i class="mdi mdi-delete delete col" ></i>
                                                                    </a>
                                                                </div>
                                                                <div class="size-sl">
                                                                    <b class="col">Size : <span>41</span></b>
                                                                </div>
                                                                <div class="size-sl">
                                                                    <b class="col">Số Lượng : <span>10</span> Đôi</b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="detail-bar"></div>
                                                    </div>
                                                    <div class="col-12 col-md-5">
                                                        <div class="detail-act">
                                                            <a href="">
                                                                <i class="mdi mdi-library-plus add col" ></i>
                                                            </a> 
                                                            <a  href="">
                                                                <i class="mdi mdi-auto-fix fix col"></i>
                                                            </a>
                                                            <a  href="">
                                                                <i class="mdi mdi-delete delete col" ></i>
                                                            </a>
                                                        </div>
                                                        <div class="detail-color" style="background:black">

                                                        </div>
                                                        <div id="product-color-2" class="carousel slide detail-slide" data-ride="carousel">
                                                            <ol class="carousel-indicators">
                                                                <li data-target="#product-color-2" data-slide-to="0" class="active"></li>
                                                                <li data-target="#product-color-2" data-slide-to="1"></li>
                                                                <li data-target="#product-color-2" data-slide-to="2"></li>
                                                            </ol>
                                                            <div class="carousel-inner">
                                                                <div class="carousel-item active">
                                                                    <img class="d-block " src="./uploads/products/EG0695-01-black.jpg" alt="First slide">
                                                                </div>
                                                                <div class="carousel-item">
                                                                    <img class="d-block " src="./uploads/products/EG0695-02-black.jpg" alt="Second slide">
                                                                </div>
                                                                <div class="carousel-item">
                                                                    <img class="d-block " src="./uploads/products/EG0695-03-black.jpg" alt="Third slide">
                                                                </div>
                                                            </div>
                                                            <a class="carousel-control-prev" href="#product-color-2" role="button" data-slide="prev">
                                                                <span class="mdi mdi-format-align-left" aria-hidden="true"></span>
                                                                
                                                            </a>
                                                            <a class="carousel-control-next" href="#product-color-2" role="button" data-slide="next">
                                                                <span class="mdi mdi-format-align-right" aria-hidden="true"></span>
                                                                
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-7 row justify-content-start">
                                                        <div class="detail-size-head">
                                                            <b>Kích Cỡ</b>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6 col-lg-4">
                                                            <div class="detail-size">    
                                                                <div class="detail-act">
                                                                    <a  href="">
                                                                        <i class="mdi mdi-auto-fix fix col"></i>
                                                                    </a>
                                                                    <a  href="">
                                                                        <i class="mdi mdi-delete delete col" ></i>
                                                                    </a>
                                                                </div>
                                                                <div class="size-sl">
                                                                    <b class="col">Size : <span>38</span></b>
                                                                </div>
                                                                <div class="size-sl">
                                                                    <b class="col">Số Lượng : <span>10</span> Đôi</b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6 col-lg-4">
                                                            <div class="detail-size">    
                                                                <div class="detail-act">
                                                                    <a  href="">
                                                                        <i class="mdi mdi-auto-fix fix col"></i>
                                                                    </a>
                                                                    <a  href="">
                                                                        <i class="mdi mdi-delete delete col" ></i>
                                                                    </a>
                                                                </div>
                                                                <div class="size-sl">
                                                                    <b class="col">Size : <span>39</span></b>
                                                                </div>
                                                                <div class="size-sl">
                                                                    <b class="col">Số Lượng : <span>10</span> Đôi</b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6 col-lg-4">
                                                            <div class="detail-size">    
                                                                <div class="detail-act">
                                                                    <a  href="">
                                                                        <i class="mdi mdi-auto-fix fix col"></i>
                                                                    </a>
                                                                    <a  href="">
                                                                        <i class="mdi mdi-delete delete col" ></i>
                                                                    </a>
                                                                </div>
                                                                <div class="size-sl">
                                                                    <b class="col">Size : <span>40</span></b>
                                                                </div>
                                                                <div class="size-sl">
                                                                    <b class="col">Số Lượng : <span>10</span> Đôi</b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6 col-lg-4">
                                                            <div class="detail-size">    
                                                                <div class="detail-act">
                                                                    <a  href="">
                                                                        <i class="mdi mdi-auto-fix fix col"></i>
                                                                    </a>
                                                                    <a  href="">
                                                                        <i class="mdi mdi-delete delete col" ></i>
                                                                    </a>
                                                                </div>
                                                                <div class="size-sl">
                                                                    <b class="col">Size : <span>41</span></b>
                                                                </div>
                                                                <div class="size-sl">
                                                                    <b class="col">Số Lượng : <span>10</span> Đôi</b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="detail-bar"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="description justify-content-center row">
                                                <div class="col-8">
                                                    <b>Mô Tả :</b>
                                                    <p>Giày Đẹp Vờ Cờ Lờ , Bùn Ngủ vãi L , nghỉ không làm nữa ngủ !</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> 2 </td>
                                    <td> Ultraboost 21 </td>
                                    <td>
                                        Chạy Bộ
                                    </td>
                                    <td> $ 249.99 </td>
                                    <td class="td-detail">
                                        <i class="mdi mdi-swap-vertical detail col" data-toggle="collapse" data-target="#collapse-2" aria-expanded="true" aria-controls="collapse-2"></i>
                                    </td>
                                    <td>
                                        <a href="">
                                            <i class="mdi mdi-library-plus add col" ></i>
                                        </a> 
                                        <a  href="">
                                            <i class="mdi mdi-auto-fix fix col"></i>
                                        </a>
                                        <a  href="">
                                            <i class="mdi mdi-delete delete col" ></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr >
                                    <td colspan="6" class="td-detail-product">
                                        <div id="collapse-2" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" colspan="6">
                                            <div class="detail-product">
                                                <div class="justify-content-center row">
                                                    <div class="col-12 col-md-5">
                                                        <div class="detail-act">
                                                            <a href="">
                                                                <i class="mdi mdi-library-plus add col" ></i>
                                                            </a> 
                                                            <a  href="">
                                                                <i class="mdi mdi-auto-fix fix col"></i>
                                                            </a>
                                                            <a  href="">
                                                                <i class="mdi mdi-delete delete col" ></i>
                                                            </a>
                                                        </div>
                                                        <div class="detail-color" style="background:white">

                                                        </div>
                                                        <div id="product-color-3" class="carousel slide detail-slide" data-ride="carousel">
                                                            <ol class="carousel-indicators">
                                                                <li data-target="#product-color-3" data-slide-to="0" class="active"></li>
                                                                <li data-target="#product-color-3" data-slide-to="1"></li>
                                                                <li data-target="#product-color-3" data-slide-to="2"></li>
                                                            </ol>
                                                            <div class="carousel-inner">
                                                                <div class="carousel-item active">
                                                                    <img class="d-block " src="./uploads/products/EG0695-01-white.jpg" alt="First slide">
                                                                </div>
                                                                <div class="carousel-item">
                                                                    <img class="d-block " src="./uploads/products/EG0695-02-white.jpg" alt="Second slide">
                                                                </div>
                                                                <div class="carousel-item">
                                                                    <img class="d-block " src="./uploads/products/EG0695-03-white.jpg" alt="Third slide">
                                                                </div>
                                                            </div>
                                                            <a class="carousel-control-prev" href="#product-color-3" role="button" data-slide="prev">
                                                                <span class="mdi mdi-format-align-left" aria-hidden="true"></span>
                                                                
                                                            </a>
                                                            <a class="carousel-control-next" href="#product-color-3" role="button" data-slide="next">
                                                                <span class="mdi mdi-format-align-right" aria-hidden="true"></span>
                                                                
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-7 row justify-content-start">
                                                        <div class="detail-size-head">
                                                            <b>Kích Cỡ</b>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6 col-lg-4">
                                                            <div class="detail-size">    
                                                                <div class="detail-act">
                                                                    <a  href="">
                                                                        <i class="mdi mdi-auto-fix fix col"></i>
                                                                    </a>
                                                                    <a  href="">
                                                                        <i class="mdi mdi-delete delete col" ></i>
                                                                    </a>
                                                                </div>
                                                                <div class="size-sl">
                                                                    <b class="col">Size : <span>38</span></b>
                                                                </div>
                                                                <div class="size-sl">
                                                                    <b class="col">Số Lượng : <span>10</span> Đôi</b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6 col-lg-4">
                                                            <div class="detail-size">    
                                                                <div class="detail-act">
                                                                    <a  href="">
                                                                        <i class="mdi mdi-auto-fix fix col"></i>
                                                                    </a>
                                                                    <a  href="">
                                                                        <i class="mdi mdi-delete delete col" ></i>
                                                                    </a>
                                                                </div>
                                                                <div class="size-sl">
                                                                    <b class="col">Size : <span>39</span></b>
                                                                </div>
                                                                <div class="size-sl">
                                                                    <b class="col">Số Lượng : <span>10</span> Đôi</b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6 col-lg-4">
                                                            <div class="detail-size">    
                                                                <div class="detail-act">
                                                                    <a  href="">
                                                                        <i class="mdi mdi-auto-fix fix col"></i>
                                                                    </a>
                                                                    <a  href="">
                                                                        <i class="mdi mdi-delete delete col" ></i>
                                                                    </a>
                                                                </div>
                                                                <div class="size-sl">
                                                                    <b class="col">Size : <span>40</span></b>
                                                                </div>
                                                                <div class="size-sl">
                                                                    <b class="col">Số Lượng : <span>10</span> Đôi</b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6 col-lg-4">
                                                            <div class="detail-size">    
                                                                <div class="detail-act">
                                                                    <a  href="">
                                                                        <i class="mdi mdi-auto-fix fix col"></i>
                                                                    </a>
                                                                    <a  href="">
                                                                        <i class="mdi mdi-delete delete col" ></i>
                                                                    </a>
                                                                </div>
                                                                <div class="size-sl">
                                                                    <b class="col">Size : <span>41</span></b>
                                                                </div>
                                                                <div class="size-sl">
                                                                    <b class="col">Số Lượng : <span>10</span> Đôi</b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="detail-bar"></div>
                                                    </div>
                                                    <div class="col-12 col-md-5">
                                                        <div class="detail-act">
                                                            <a href="">
                                                                <i class="mdi mdi-library-plus add col" ></i>
                                                            </a> 
                                                            <a  href="">
                                                                <i class="mdi mdi-auto-fix fix col"></i>
                                                            </a>
                                                            <a  href="">
                                                                <i class="mdi mdi-delete delete col" ></i>
                                                            </a>
                                                        </div>
                                                        <div class="detail-color" style="background:black">

                                                        </div>
                                                        <div id="product-color-4" class="carousel slide detail-slide" data-ride="carousel">
                                                            <ol class="carousel-indicators">
                                                                <li data-target="#product-color-4" data-slide-to="0" class="active"></li>
                                                                <li data-target="#product-color-4" data-slide-to="1"></li>
                                                                <li data-target="#product-color-4" data-slide-to="2"></li>
                                                            </ol>
                                                            <div class="carousel-inner">
                                                                <div class="carousel-item active">
                                                                    <img class="d-block " src="./uploads/products/EG0695-01-black.jpg" alt="First slide">
                                                                </div>
                                                                <div class="carousel-item">
                                                                    <img class="d-block " src="./uploads/products/EG0695-02-black.jpg" alt="Second slide">
                                                                </div>
                                                                <div class="carousel-item">
                                                                    <img class="d-block " src="./uploads/products/EG0695-03-black.jpg" alt="Third slide">
                                                                </div>
                                                            </div>
                                                            <a class="carousel-control-prev" href="#product-color-4" role="button" data-slide="prev">
                                                                <span class="mdi mdi-format-align-left" aria-hidden="true"></span>
                                                                
                                                            </a>
                                                            <a class="carousel-control-next" href="#product-color-4" role="button" data-slide="next">
                                                                <span class="mdi mdi-format-align-right" aria-hidden="true"></span>
                                                                
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-7 row justify-content-start">
                                                        <div class="detail-size-head">
                                                            <b>Kích Cỡ</b>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6 col-lg-4">
                                                            <div class="detail-size">    
                                                                <div class="detail-act">
                                                                    <a  href="">
                                                                        <i class="mdi mdi-auto-fix fix col"></i>
                                                                    </a>
                                                                    <a  href="">
                                                                        <i class="mdi mdi-delete delete col" ></i>
                                                                    </a>
                                                                </div>
                                                                <div class="size-sl">
                                                                    <b class="col">Size : <span>38</span></b>
                                                                </div>
                                                                <div class="size-sl">
                                                                    <b class="col">Số Lượng : <span>10</span> Đôi</b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6 col-lg-4">
                                                            <div class="detail-size">    
                                                                <div class="detail-act">
                                                                    <a  href="">
                                                                        <i class="mdi mdi-auto-fix fix col"></i>
                                                                    </a>
                                                                    <a  href="">
                                                                        <i class="mdi mdi-delete delete col" ></i>
                                                                    </a>
                                                                </div>
                                                                <div class="size-sl">
                                                                    <b class="col">Size : <span>39</span></b>
                                                                </div>
                                                                <div class="size-sl">
                                                                    <b class="col">Số Lượng : <span>10</span> Đôi</b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6 col-lg-4">
                                                            <div class="detail-size">    
                                                                <div class="detail-act">
                                                                    <a  href="">
                                                                        <i class="mdi mdi-auto-fix fix col"></i>
                                                                    </a>
                                                                    <a  href="">
                                                                        <i class="mdi mdi-delete delete col" ></i>
                                                                    </a>
                                                                </div>
                                                                <div class="size-sl">
                                                                    <b class="col">Size : <span>40</span></b>
                                                                </div>
                                                                <div class="size-sl">
                                                                    <b class="col">Số Lượng : <span>10</span> Đôi</b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6 col-lg-4">
                                                            <div class="detail-size">    
                                                                <div class="detail-act">
                                                                    <a  href="">
                                                                        <i class="mdi mdi-auto-fix fix col"></i>
                                                                    </a>
                                                                    <a  href="">
                                                                        <i class="mdi mdi-delete delete col" ></i>
                                                                    </a>
                                                                </div>
                                                                <div class="size-sl">
                                                                    <b class="col">Size : <span>41</span></b>
                                                                </div>
                                                                <div class="size-sl">
                                                                    <b class="col">Số Lượng : <span>10</span> Đôi</b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="detail-bar"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="description justify-content-center row">
                                                <div class="col-8">
                                                    <b>Mô Tả :</b>
                                                    <p>Giày Đẹp Vờ Cờ Lờ , Bùn Ngủ vãi L , nghỉ không làm nữa ngủ !</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    