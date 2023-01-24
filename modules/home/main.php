<?php
get_header();
?>
<?php
# để hiển hị tất cả sp ra trang chủ, đơn giản là cho hiển thị các sp đã được phân loại
# theo cate_id, chỉ cần copy các hàm trong trang product/main.php cho vào là ok
# lưu ý khi copy function get_list_product_by_cate_i từ trang product/main.php
# ta gán cứng scate_id = số
$list_mobile = get_list_product_by_cate_id(1);
$list_laptop = get_list_product_by_cate_id(2);
# thêm link đến chi tiết sp vào trong function này để thuận tiện đổ data

# lưu ý khi copy function get_info_cate từ trang product/main.php
# ta gán cứng scate_id = số
$info_cate_mobile = get_info_cate(1);
$info_cate_laptop = get_info_cate(2);

?>
<div id="wp-content" class="my-3">
    <div class="container">
        <section class="slider mb-3">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>

                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="2000">
                        <img height="400" width="1180" src="public/images/sale-1.jpg" class="rounded d-block w-100" alt="banner-1">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img height="400" width="1180" src="public/images/sale-2.jpg" class="rounded d-block w-100" alt="banner-2">
                    </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <!-- end slider -->

        <div class="container">
            <div class="products-list mb-3">
                <div class="row mb-4 products-area">
                    <div class=" mb-3">
                        <h4 class="cate-title">
                            <a href="?mod=product&act=main&cate_id=1" class="text-light bg-danger text-decoration-none px-3 py-1 d-inline-block">Điện thoại</a>
                        </h4>
                    </div>
                    <?php if (!empty($list_mobile)) {
                    ?> <?php
                        foreach ($list_mobile as $mobile) { ?>
                            <div class="cate-item col-6 col-md-3 mx-2 mb-3">

                                <div class="post-thumb mb-2">
                                    <a href="<?php echo $mobile['url'] ?>" class="pb-3">
                                        <img class="img-fluid" src="<?php echo $mobile['product_thumb'] ?>" alt="smart phone">
                                    </a>
                                </div>
                                <a href="<?php echo $mobile['url'] ?>" class="text-decoration-none"><?php echo $mobile['product_title'] ?></a>
                                <div class="price"><?php echo money_format($mobile['price']) ?></div>
                                <div class="row">
                                    <span class="col-4 old-price text-decoration-line-through text-danger"><?php echo money_format($mobile['sale']) ?></span>

                                </div>

                            </div>
                        <?php
                        }
                        ?>
                    <?php
                    }
                    ?>

                </div>
            </div>

            <div class="row mb-4 products-area">
                <div class=" mb-3">
                    <h4 class="cate-title laptop">
                        <a href="?mod=product&act=main&cate_id=2" class="text-light text-decoration-none px-3 py-1 d-inline-block">Laptop</a>
                    </h4>
                </div>
                <?php if (!empty($list_laptop)) {
                ?> <?php
                    foreach ($list_laptop as $laptop) { ?>
                        <div class="cate-item col-6 col-md-3 mx-2 mb-3">
                            <div class="post-thumb mb-2">
                                <a href="<?php echo $laptop['url'] ?>" class="pb-3">
                                    <img class="img-fluid" src="<?php echo $laptop['product_thumb'] ?>" alt="laptop">
                                </a>
                            </div>
                            <a href="<?php echo $laptop['url'] ?>" class="text-decoration-none"><?php echo $laptop['product_title'] ?></a>
                            <div class="price"><?php echo money_format($laptop['price']) ?></div>
                            <div class="row">
                                <span class="col-4 old-price text-decoration-line-through text-danger"><?php echo money_format($laptop['sale']) ?></span>

                            </div>
                        </div>
                    <?php
                    }
                    ?>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    <!-- end products list -->
</div>
</div>
</div>

<?php
get_footer();
?>