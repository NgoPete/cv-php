<?php
get_header();

?>

<?php
# checklist
# 1. lấy cate_id
$cate_id = (int)$_GET['cate_id'];
// echo $cate_title;
// hàm int có chức năng ép kiểu
# 2. tạo hàm để lấy loại sản phẩm từ trang database/product.php
// 2.1 tạo hàm lấy cate_id, hàm này được khai báo trong lib/cart_handler.php
$info_cate = get_info_cate($cate_id);
// show_array($info_cate);
///////////////
# 3. tạo hàm lấy danh sách sp
$list_item = get_list_product_by_cate_id($cate_id);
// show_array($list_item);
?>


<div id="main-content-wp" class="container category-product-page">
    <div class="wp-inner clearfix">
        <?php get_sidebar() ?>
        <div id="content" class="fl-right mt-3">
            <div class="section list-cat">
                <div class="section-head">
                    <!-- <h3 class="section-title"><?php echo $info_cate['cate_title'] ?></h3> -->
                    <p class="section-desc">Có <?php echo count($list_item) ?> sản phẩm trong mục này</p>
                </div> <!--  dùng hàm built-in count để đếm số lượng pt trong mảng -->
                <div class="section-detail">
                    <!-- kt nếu $list_item có data mới tiến hành đổ dữ liệu -->
                    <?php if (!empty($list_item)) {
                    ?>
                        <ul class="list-unstyled d-flex justify-content-around list-item clearfix">
                            <?php
                            foreach ($list_item as $item) { ?>

                                <li class="border border-1 col-md-3 col-6">
                                    <!-- đem url ở đây gán vào function get_list_product_by_cate_id ở trang cart_handler.php, để code gọn gàng hơn -->
                                    <a href="<?php echo $item['url'] ?>" title="" class="thumb">
                                        <img class="img-fluid" src="<?php echo $item['product_thumb'] ?>" alt="">
                                    </a>
                                    <!-- đem url ở đây gán vào function get_list_product_by_cate_id ở trang cart_handler.php, để code gọn gàng hơn -->
                                    <div class="mt-3">
                                        <a href="<?php echo $item['url'] ?>" title="" class="title text-decoration-none"><?php echo $item['product_title'] ?></a>
                                        <p class="price"><?php echo money_format($item['price']) ?></p>
                                    </div>
                                </li><!-- tạo hàm money_format trong cart_handler.php để convert price -->
                            <?php
                            }
                            ?>

                        </ul>

                    <?php   } ?>

                </div>
            </div>
            <!-- <div class="section" id="pagenavi-wp">
                <div class="section-detail">
                    <ul id="list-pagenavi">
                        <li class="active">
                            <a href="" title="">1</a>
                        </li>
                        <li>
                            <a href="" title="">2</a>
                        </li>
                        <li>
                            <a href="" title="">3</a>
                        </li>
                    </ul>
                    <a href="" title="" class="next-page"><i class="fa fa-angle-right"></i></a>
                </div>
            </div> -->
        </div>
    </div>
</div>

<?php
get_footer();
?>