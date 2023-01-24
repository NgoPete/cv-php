<?php
get_header();
?>

<?php
# checklist
# 1. get id
$id = (int)$_GET['id'];
// echo $id;
# 2. tạo hàm (đưa ra tên hàm trước khi đi tạo hàm trong lib/cart_handler.php)
$item = get_page_by_id($id);
# hàm này lấy data từ trang database/page.php
# gán cho hàm biến $item để thuận tiện cho việc đổ data bên dưới
# 3. khai báo hàm trong lib/cart_handler.php
// show_array($item);


?>

<div id="main-content-wp" class="detail-news-page">
    <div class="wp-inner clearfix">
        <?php get_sidebar() ?>
        <div id="content" class="fl-right">
            <div class="section" id="detail-news-wp">
                <div class="section-head">
                    <h3 class="section-title"><?php echo $item['page_title'] ?></h3>
                </div>
                <div class="section-detail">
                    <p class="create-date"><?php echo $item['create_at'] ?></p>
                    <div class="content-news">
                        <?php echo $item['page_content'] ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>