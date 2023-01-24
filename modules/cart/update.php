<?php
// <!-- B1. để cập nhật được giỏ hàng cần lấy được 2 thông tin sau -->
// <!-- 1. id của sp -->
// <!-- 2. số lượng của sp đó -->


// <!-- B2. sau khi đã lấy dc mảng thông tin trên, ta đi duyệt qua mảng đó và cập nhật thông tin trong đó -->
// <!-- thông tin cần cập nhật là số lượng -->
// show_array($_POST);
if (isset($_POST['btn_update_cart'])) {
    update_cart($_POST['quantity']);
    redirect('?mod=cart&act=show');
}
