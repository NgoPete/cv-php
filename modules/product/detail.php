<?php
get_header();
?>
<?php
# checklist
# 1. lấy id
$id = (int)$_GET['id'];
# 2. lấy data sp theo id của sp
# tạo hàm lấy thông tin chi tiết(có nút add cart) sp theo id
$item = get_product_by_id($id);
// show_array($item);
?>

<div id="main-content-wp" class="container mt-5 detail-product-page clearfix">
    <div class="wp-inner clearfix">

        <div id="content" class="">
            <div class="section mb-5" id="info-product-wp">
                <div class="section-detail row">
                    <div class="thumb col-6 col-md-3">
                        <img class="img-fluid" src="<?php echo $item['product_thumb'] ?>" alt="">
                    </div>
                    <div class="detail text-justify col-6 col-md-9">
                        <h3 class="title"><?php echo $item['product_title'] ?></h3>
                        <p class="price text-danger fw-bold"><?php echo money_format($item['price']) ?></p>
                        <p class="product-code">Mã sản phẩm: <span><?php echo $item['code'] ?></span></p>
                        <div class="desc-short">
                            <h5>Mô tả sản phẩm:</h5>
                            <p><?php echo $item['product_desc'] ?></p>
                        </div>
                        <div class="num-order-wp">
                            <!-- <span>Số lượng:</span>
                            <input type="text" id="num-order" name="num-order" value="1"> -->
                            <a href="<?php echo $item['url_add_to_cart'] ?>" title="" class="add-to-cart">Thêm vào giỏ hàng</a>
                            <!-- url dẫn vào giỏ hàng này dc thêm vào function get_product_by_id trong cart_handler.php -->
                        </div>

                    </div>
                </div>
            </div>
            <div class="section" id="desc-wp">
                <div class="section-head">
                    <h3 class="section-title">Chi tiết sản phẩm</h3>
                </div>
                <div class="section-detail text-justify">
                    <?php echo $item['product_content'] ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>