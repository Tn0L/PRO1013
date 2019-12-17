<div class="main-panel">
    <div class="content-wrapper">        
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-table-large menu-icon"></i>
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
                <form class="forms-sample" action="?act=product" method="post">
                    <div class="form-group">
                        <label for="exampleInputName1">Id</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="idProduct" placeholder="Id" readonly value="<?php if(isset($_GET['idProduct'])){echo $_GET['idProduct'];}else{echo "";}?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Tên Sản Phẩm</label>
                        <input type="text" class="form-control" id="exampleInputEmail3" name="nameProduct" placeholder="Tên Sản Phẩm" required value="<?php if(isset($_GET['nameProduct'])){echo $_GET['nameProduct'];}else{echo "";}?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Loại Sản Phẩm</label>
                        <select class="form-control" name="categoryProduct" id="exampleSelectGender" >
                            <option><?php if(isset($_GET['categoryProduct'])){echo $_GET['categoryProduct'];}else{echo "";}?></option>
                            <?php
                            $listCategory=loadCategories();
                            foreach ($listCategory as $category) {
                            ?>
                                <option value="<?php echo $category['ma_loai'];?>">
                                    <?php echo $category['ten_loai'];?>
                                </option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group" >
                        <label for="exampleInputCity1">Giá</label>
                        <input type="text" class="form-control" id="priceInputCity1" placeholder="Giá" name="priceProduct" required value="<?php if(isset($_GET['priceProduct'])){echo $_GET['priceProduct'];}else{echo "";}?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea1">Mô Tả</label>
                        <textarea class="form-control" id="exampleTextarea1" rows="4" name="describeProduct" ><?php if(isset($_GET['describeProduct'])){echo $_GET['describeProduct'];}else{echo "";}?></textarea>
                    </div>
                    <button type="submit" name="submit" value="submit" class="btn btn-gradient-primary mr-2">Thêm</button>
                    <button type="submit" name="edit" value="edit" class="btn btn-light">Sửa</button>
                </form>
              </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">    
                        <form class="forms-sample" action="?act=product" enctype="multipart/form-data" method="post">
                            <div class="form-group">
                                <label for="exampleInputUsername1">Id</label>
                                <input type="text" class="form-control" id="exampleInputUsername1" name="idColor" placeholder="Id" readonly value="<?php if(isset($_GET['idColor'])){echo $_GET['idColor'];}else{echo "";}?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Mã Sản Phẩm</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="colorProduct" placeholder="Mã Sản Phẩm" readonly value="<?php if(isset($_GET['colorProduct'])){echo $_GET['colorProduct'];}else{echo "";}?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Màu</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="color" placeholder="Màu" required value="<?php if(isset($_GET['color'])){echo $_GET['color'];}else{echo "";}?>">
                                <div class="show-color"></div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="box col">
                                    <input type="file" name="img" id="file-1" class="inputfile inputfile-2 input-img" data-multiple-caption="{count} files selected" multiple />
                                    <label for="file-1"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Hình &hellip;</span></label>
                                </div>
                            </div>
                            <button type="submit" name="submit1" value="submit1" class="btn btn-gradient-primary mr-2">Thêm</button>
                            <button class="btn btn-light" name="edit1" value="edit1">Sửa</button>
                        </form>
                    </div>
                </div>
            </div>
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                    <div class="card-body">
                       
                        <form class="forms-sample" action="?act=product" method="post">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Id</label>
                            <input type="text" class="form-control" id="exampleInputUsername1" name="idSize" placeholder="Id" readonly value="<?php if(isset($_GET['idSize'])){echo $_GET['idSize'];}else{echo "";}?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mã Màu</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="colorSize" placeholder="Mã Màu" readonly value="<?php if(isset($_GET['colorSize'])){echo $_GET['colorSize'];}else{echo "";}?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Kích Thước</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="size" placeholder="Kích Thước" value="<?php if(isset($_GET['size'])){echo $_GET['size'];}else{echo "";}?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputConfirmPassword1">Số Lượng</label>
                            <input type="text" class="form-control" id="exampleInputConfirmPassword1" name="count" placeholder="Số Lượng" value="<?php if(isset($_GET['count'])){echo $_GET['count'];}else{echo "";}?>">
                        </div>
                        <button type="submit" name="submit2" value="submit2" class="btn btn-gradient-primary mr-2">Thêm</button>
                        <button class="btn btn-light" name="edit2" value="edit2">Sửa</button>
                        </form>
                    </div>
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
                                <?php
                                    $listProduct=loadProduct();
                                    foreach ($listProduct as $product) {
                                ?>
                                            <tr>
                                                <td> <?php echo $product['ma_san_pham']; ?> </td>
                                                <td> <?php echo $product['ten_san_pham']; ?></td>
                                                <td>
                                                    <?php echo $product['ten_loai']; ?> 
                                                </td>
                                                <td> <?php echo $product['gia']; ?>  </td>
                                                <td class="td-detail">
                                                    <i class="mdi mdi-swap-vertical detail col" data-toggle="collapse" data-target="#collapse-<?php echo $product['ma_san_pham']; ?>" aria-expanded="true" aria-controls="collapse-<?php echo $product['ma_san_pham']; ?>"></i>
                                                </td>
                                                <td>
                                                    <a href="?act=product&colorProduct=<?php echo $product['ma_san_pham'];?>">
                                                        <i class="mdi mdi-library-plus add col" ></i>
                                                    </a> 
                                                    <a  href="?act=product&idProduct=<?php echo $product['ma_san_pham'];?>&nameProduct=<?php echo $product['ten_san_pham'];?>&categoryProduct=<?php echo $product['loai_san_pham'];?>&priceProduct=<?php echo $product['gia'];?>&describeProduct=<?php echo $product['mo_ta'];?>">
                                                        <i class="mdi mdi-auto-fix fix col"></i>
                                                    </a>
                                                    <a  href="?act=product&delete=<?php echo $product['ma_san_pham'];?>">
                                                        <i class="mdi mdi-delete delete col" ></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr >
                                                <td colspan="6" class="td-detail-product">
                                                    <div id="collapse-<?php echo $product['ma_san_pham']; ?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" colspan="6">
                                                        <div class="detail-product">
                                                            <div class="justify-content-center row">
                                                                <?php
                                                                $listColor=listColor($product['ma_san_pham']);
                                                                foreach ($listColor as $productColor){
                                                                ?>
                                                                    <div class="col-12 col-md-5">
                                                                        <div class="detail-act">
                                                                            <a href="?act=product&colorSize=<?php echo $productColor['id'];?>">
                                                                                <i class="mdi mdi-library-plus add col"></i>
                                                                            </a> 
                                                                            <a  href="?act=product&idColor=<?php echo $productColor['id'];?>&colorProduct=<?php echo $productColor['ma_san_pham'];?>&color=<?php echo $productColor['mau'];?>">
                                                                                <i class="mdi mdi-auto-fix fix col"></i>
                                                                            </a>
                                                                            <a  href="?act=product&delete1=<?php echo $productColor['id'];?>">
                                                                                <i class="mdi mdi-delete delete col" ></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="detail-color" style="background:<?php echo $productColor['mau'];?>">

                                                                        </div>
                                                                        <div class="carousel slide detail-slide" data-ride="carousel">
                                                                            
                                                                            <div class="carousel-inner">
                                                                                <div class="carousel-item active">
                                                                                    <img class="d-block " src="../uploads/products/<?php echo $productColor['hinh'];?>" >
                                                                                </div>   
                                                                            </div>
                                                                           
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-md-7 row justify-content-start">
                                                                        <div class="detail-size-head">
                                                                            <b>Kích Cỡ</b>
                                                                        </div>
                                                                        <?php
                                                                        $listSize=listSize($productColor['id']);
                                                                        foreach ($listSize as $productSize){
                                                                        ?>
                                                                            <div class="col-sm-12 col-md-6 col-lg-4">
                                                                                <div class="detail-size">    
                                                                                    <div class="detail-act">
                                                                                        <a  href="?act=product&idSize=<?php echo $productSize['id_size'];?>&colorSize=<?php echo $productSize['id_mau'];?>&count=<?php echo $productSize['so_luong'];?>&size=<?php echo $productSize['size'];?>">
                                                                                            <i class="mdi mdi-auto-fix fix col"></i>
                                                                                        </a>
                                                                                        <a  href="?act=product&delete2=<?php echo $productSize['id_size'];?>">
                                                                                            <i class="mdi mdi-delete delete col" ></i>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="size-sl">
                                                                                        <b class="col">Size : <span><?php echo $productSize['size'];?></span></b>
                                                                                    </div>
                                                                                    <div class="size-sl">
                                                                                        <b class="col">Số Lượng : <span><?php echo $productSize['so_luong'];?></span> Đôi</b>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        <?php
                                                                        }
                                                                        ?>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="detail-bar"></div>
                                                                    </div>
                                                                <?php
                                                                }
                                                                ?>
                                                            </div>
                                                        </div>
                                                        <div class="description justify-content-center row">
                                                            <div class="col-8">
                                                                <b>Mô Tả :</b>
                                                                <p><?php echo $product['mo_ta']; ?> </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    