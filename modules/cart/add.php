<?php
# checklist
# 1. để thêm 1 sp vào giỏ hàng, cần biết được thông tin của sp
// để biết thông tin của sp, cần lấy được id của sp đó
$id = (int)$_GET['id'];
// $item = get_product_by_id($id);
// show_array($item);
# 2. sau khi lấy đc data của sp, tiến hành đưa data đó vào giỏ hàng
// đưa vào bằng session
# tối ưu code bằng cách đưa code vào function add_cart được tạo ở lib/cart_handler.php
add_cart($id);
# code được viết ra sau đó lưu vào hàm được tạo trong lib/cart_handler.php
# được viết thành function để tối ưu code

// session_unset();
// show_array($_SESSION['cart']);
# session là mảng toàn cục ko cần return vẫn sữ dụng được
# sau khi xử lý xong data chuyển hướng đên trang giao diện giỏ hàng
redirect('?mod=cart&act=show');
