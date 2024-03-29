<div class="container">
            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="order_box bill">
                        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-custom">
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav d-flex justify-content-around w-100">
                                    <li class="nav-item">
                                        <a class="nav-link" href="../../../../Du_an_1/Controller/index_user.php?request=wait-confirm">Chờ Xác Nhận</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../../../../Du_an_1/Controller/index_user.php?request=transport">Đang Giao</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-warning" href="../../../../Du_an_1/Controller/index_user.php?request=receive">Nhận Hàng</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../../../../Du_an_1/Controller/index_user.php?request=complete">Hoàn Thành</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../../../../Du_an_1/Controller/index_user.php?request=cancel">Đã Hủy</a>
                                    </li>
                                </ul>
                             </div>
                        </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<div class="container mb-3">
            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-12">

                        <?php if(!empty( $list_bill_receive)) :  ?>
                        <?php foreach( $list_bill_receive as $value):extract($value)?>
                            <div class="order_box mb-3 ">
                                <div class="row  border-bottom">
                                    <div class="col-9 ">
                                        <img src="../../../../Du_an_1/images_giao_dien/flat-laptop-logo-template_23-2149017459.avif" style="height: 50px; width: 50px;" alt="">
                                        <span>NMT Laptop World</span>
                                    </div>
                                    <div class="col-3 justify-content-center my-auto text-center">
                                        <i class="fa-solid fa-circle-check"></i>
                                        <span class="ml-2">Đơn hàng đã giao đến bạn</span>
                                    </div>
                                </div>
                                <?php 
                                    $detail_bill = Load_Detail_Bill_Transport($id_hoa_don);
                                    foreach($detail_bill as $innerValue):
                                        extract($innerValue);
                                        echo '
                                            <div class="row mt-4 border-bottom">
                                                <div class="col-2">
                                                    <img src="../../../../Du_an_1/img/'.$img.'" style ="width: 120px" alt="">
                                                </div>
                                                <div class="col-8">
                                                    <div><span style="font-size: 15px">'.$ten_sp.'</span></div>
                                                    <div>X'.$quantity.'</div>
                                                </div>
                                                <div class="col-2"><span style="font-size: 18px">'.currency_format($gia, ' VND').'</span></div>
                                            </div>
                                        ';
                                    endforeach;
                                ?>
                                <div class="row mt-4 mb-2">
                                    <div class="col-8"></div>
                                    <div class="col-4 text-right">
                                        <i class="fa-regular fa-money-bill-1" style="font-size: 18px"></i>
                                        <span style="font-size: 18px">Thành tiền: <?php echo currency_format($tong_gia, ' VND'); ?></span>
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-10 my-auto">
                                        <span>Ngày tạo : <?=$ngay_tao?></span>
                                    </div>
                                    <div class="col-2">
                                        <div class="d-inline">
                                            <a href="../../../../Du_an_1/Controller/index_user.php?request=received-product&id_bill=<?=$id_hoa_don?>" class="btn btn-success">Đã nhận được hàng</a>
                                        </div>
                                    </div>
                                            
                                </div>
                            </div>
                        <?php endforeach ?>
                    <?php else :  ?>
                        <div class="text-center" role="alert">
                            <p class="alert alert-primary h3">Chưa có đơn hàng nào</p>
                        </div>
                    <?php endif; ?>
                       



                    </div>
                </div>
            </div>
        </div>

     

