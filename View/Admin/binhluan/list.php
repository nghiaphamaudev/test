<!-- MAIN -->
<main>
    <div class="head-title">
        <div class="left">
            <h1>Quản Lý Bình Luận</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="">Home</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="active" href="#">Quản Lý Bình Luận</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Danh sách bình luận</h3>
            </div>
            <table>
                <thead>
                        <th>Tên Sản Phẩm</th>
                        <th>Số lượng</th>
                        <th>Cũ nhất</th>
                        <th>Mới nhất</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach( $list_data_manage_comment as $cmt){
                            extract($cmt);
                    ?>
                    <tr>
                        <td><?=$ten_sp?></td>
                        <td><?=$so_lan_comment?></td>
                        <td><?=$ngay_bat_dau?></td>
                        <td><?=$ngay_cuoi?></td>
                        <td>
                            <a href="../../../../Du_an_1/Controller/index_admin.php?request=detail_comment&id_product=<?=$id_sp?>" class="btn btn-primary status pending">Chi tiết</a>
                        </td>
                    </tr>
                    <?php
                }?>
                </tbody>
            </table>
        </div>

    </div>
</main>
<!-- MAIN -->
</section>