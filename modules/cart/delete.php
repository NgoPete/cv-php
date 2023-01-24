<?php
$id = (int)$_GET['id'];

delete_cart($id);

# sau khi xoá sp xong điều hướng về trang giỏ hàng
redirect("?mod=cart&act=show");
