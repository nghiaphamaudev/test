<div class="-fluid">
    <div class=" shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Cập nhật hóa đơn</h6>
        </div>
        <div class="card-body">
            <div class="form-addcate">
                <form action="../../../../Du_an_1/Controller/index_admin.php?request=update-bill" method="POST">
                    <div class="form-group mt-3">
                        <label for="formGroupExampleInput" class="font-lb">Mã hóa đơn</label>
                        <input type="text" name="id_bill" class="form-control" value="<?=$id_hoa_don?>" readonly>
                    </div>
                    <div class="form-group mt-3">
                        <label for="formGroupExampleInput" class="font-lb">Người đặt</label>
                        <input type="text" name="user_name" class="form-control" placeholder="Mã sản phẩm" value="<?=$ho_ten?>" disabled>
                    </div>
                    <div class="form-group mt-3">
                        <label for="formGroupExampleInput" class="font-lb">Địa chỉ nhận hàng</label>
                        <input type="text" name="user_name" class="form-control" placeholder="Mã sản phẩm" value="<?=$dia_chi_nguoi_nhan?>" disabled>
                    </div>
                    <div class="form-group mt-3">
                        <label for="formGroupExampleInput" class="font-lb">Ngày đặt</label>
                        <input type="text" name="order_date" class="form-control" placeholder="Ngày đặt hàng" value="<?=$ngay_tao?>" disabled>
                    </div>
                    <div class="form-group mt-3">
                        <label for="formGroupExampleInput" class="font-lb">Thành tiền</label>
                        <input type="text" name="total_amount" class="form-control" placeholder="Tổng thành tiền sản phẩm" value="<?php echo currency_format($tong_gia, ' VND'); ?>" disabled>
                    </div>
                    <div class="form-group mt-3">
                        <label for="formGroupExampleInput" class="font-lb">Phương thức thanh toán</label>
                        <input type="text" name="payment" class="form-control" placeholder="Phương thức thanh toán" value="<?php 
                        if($phuong_thuc === 0){
                            echo'Thanh toán khi nhận hàng';
                        } else {
                            echo'Thanh toán online';
                        } ?>" disabled>
                    </div>
                    <div class="form-group mt-3">
                        <label for="formGroupExampleInput" class="font-lb">Trạng thái</label>
                        <select required class="form-control" name="status" id="">
                            <option selected>Chờ xác nhận</option>
                            <option value="1" >Xác nhận đơn hàng</option>
                            <option value="3">Hủy đơn hàng</option>
                           
                        </select>
                    </div>

                    <div class="wrap-btn">
                        <input type="submit" name="btn_update" class="btn btn-success mt-3" value="Cập nhật">
                        <input type="reset" class="btn btn-danger mt-3" value="Nhập lại">
                    </div>
                </form>
            </div>
            <!-- <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Sản phẩm</h6>
            </div>
            <div class="table-content table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="jb-product-thumbnail">Hình ảnh</th>
                            <th class="cart-product-name">Sản phẩm</th>
                            <th class="jb-product-price">Đơn giá</th>
                            <th class="jb-product-quantity">Số lượng</th>
                            <th class="jb-product-subtotal">Thành tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                            <tr>
                                <td class="jb-product-thumbnail"><img src="../img/product/" alt="Ultraphone Product" width="80px"></img></td>
                                <td class="jb-product-name"><a href=""></a></td>
                                <td class="jb-product-price"><span class="amount"> ₫</span></td>
                                <td class="quantity"></td>
                                <td class="product-subtotal"><span class="amount">₫</span></td>
                            </tr>
                       
                    </tbody>
                </table>
            </div> -->
        </div>
    </div>
</div>
<!-- /.container-fluid -->