<div class="main-panel">
    <div class="content-wrapper">        
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-format-list-bulleted"></i>
                </span> Loại Sản phẩm 
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
                            <input readonly type="text" class="form-control" name="id" value="<?php if(isset($_GET['idCategory'])){echo $_GET['idCategory'];}else{echo "";}?>" >
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
                    <div class="table-responsive-sm">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="th">  </th>
                                    <th class="th col"> Loại Giày </th>
                                    <th class="th col head-fix"> Sửa / Xóa </th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                $listCategory=loadCategories();
                                foreach ($listCategory as $category) {
                                    echo '
                                    <tr>
                                        <td> '.$category['ma_loai'].' </td>
                                        <td> '.$category['ten_loai'].' </td>
                                        <td> 
                                            <a href="?act=category&idCategory='.$category['ma_loai'].'&nameCategory='.$category['ten_loai'].'">
                                                <i class="mdi mdi-auto-fix fix col"></i>
                                            </a>
                                            <a href="?act=category&delete='.$category['ma_loai'].'">
                                                <i class="mdi mdi-delete col delete col" ></i>
                                            </a>
                                        </td>
                                    </tr>
                                    ';
                                }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
