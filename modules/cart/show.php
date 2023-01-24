<?php
get_header();
?>
<?php
// show_array($_SESSION['cart']);
$list_buy = get_list_buy_cart();
// show_array($list_buy);
$total_bill = total_bill();
// show_array($total_bill);
// show_array($list_buy);
?>
<div id="main-content-wp" class="cart-page">
    <div class="section" id="breadcrumb-wp">
        <div class="wp-inner">
            <div class="section-detail">
                <h3 class="title">Giỏ hàng</h3>
            </div>
        </div>
    </div>
    <div id="wrapper" class="wp-inner clearfix">
        <div class="section" id="info-cart-wp">
            <div class="section-detail table-responsive">
                <form action="?mod=cart&act=update" method="post">
                    <!-- việc update cart được xử lý ở đường dẫn sau -->
                    <table class="table">
                        <thead>
                            <tr>
                                <td>Mã sản phẩm</td>
                                <td>Ảnh sản phẩm</td>
                                <td>Tên sản phẩm</td>
                                <td>Giá sản phẩm</td>
                                <td>Số lượng</td>
                                <td colspan="2">Thành tiền</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (!empty($list_buy)) { ?>

                                <?php
                                foreach ($list_buy as $i) {
                                ?>
                                    <tr>
                                        <td><?php echo $i['code'] ?></td>
                                        <td>
                                            <a href="<?php echo $i['url'] ?>" title="" class="thumb">
                                                <!-- $i['url'] này dc lấy $_SESSION['cart']['buy'][$id] -->
                                                <!-- $_SESSION['cart']['buy'][$id] lại được gán từ function get_product_by_id -->
                                                <img src="<?php echo $i['product_thumb'] ?>" alt="">
                                            </a>
                                        </td>
                                        <td>
                                            <a href="<?php echo $i['url'] ?>" title="" class="name-product"><?php echo $i['product_title'] ?></a>
                                        </td>
                                        <td class="price"><?php echo money_format($i['price']) ?></td>
                                        <td>
                                            <input type="number" min="1" max="10" data-id="<?php echo $i['id'] ?>" name="quantity[<?php echo $i['id'] ?>]" value="<?php echo $i['qty'] ?>" class="num_order">
                                        </td> <!-- quantity là id của sp và value là số lượng của nó, được đẩy vào $_POST -->
                                        <!-- tạo thuộc tính data-id để thao tác với ajax -->
                                        <td id="sub-total-<?php echo $i["id"] ?>" class="total"><?php echo money_format($i['sub_total']) ?></td>
                                        <td> <!-- tạo id sub-total để đổ data ajax -->
                                            <a href="<?php echo $i['url_delete_cart'] ?>" title="" class="del-product"><i class="fa fa-trash-o"></i></a>
                                            <!-- ['url_delete_cart'] được tạo ra trong function get_list_buy_cart ở cart_handler.php -->
                                        </td>
                                    </tr>

                                <?php }
                                ?>
                            <?php } else {
                            ?>
                                <?php echo "<p>Không có sản phẩm trong giỏ hàng, click <a href='?'>vào đây</a> để quay lại trng chủ</p>" ?>
                            <?php }

                            ?>



                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="7">
                                    <div class="clearfix">
                                        <p id="total-price" class="fl-right">Tổng giá: <span><?php echo money_format(get_total_cart())  ?></span></p>
                                        <!-- get_total_cart đc tạo trong lib/cart_handler.php -->
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="7">
                                    <div class="clearfix">
                                        <div class="fl-right">
                                            <input type="submit" id="update-cart" name="btn_update_cart" value="Cập nhật giỏ hàng">

                                            <a href="?mod=page&act=checkout" title="" id="checkout-cart">Thanh toán</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </form>
            </div>
        </div>
        <div class="section" id="action-cart-wp">
            <div class="section-detail">
                <p class="title">Click vào <span>“Cập nhật giỏ hàng”</span> để cập nhật số lượng. Nhập vào số lượng <span>0</span> để xóa sản phẩm khỏi giỏ hàng. Nhấn vào thanh toán để hoàn tất mua hàng.</p>
                <a href="?page=home" title="" id="buy-more">Mua tiếp</a><br />
                <a href="?mod=cart&act=delete" title="" id="delete-cart">Xóa giỏ hàng</a>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>