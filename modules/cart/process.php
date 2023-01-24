<?php
# trong trang app.js nếu sữ dụng phương thức POST thì ở đây cũng dùng method POST để đẩy data
$id = $_POST['id'];
$qty = $_POST['qty'];
$item = get_product_by_id($id); // hàm get_product_by_id() ở lib/cart_handler.php
if (isset($_SESSION['cart']) && array_key_exists($id, $_SESSION['cart']['buy'])) {
    // kiểm tra trong session cart buy có pt nào có id == $id hay ko
    // nếu có thì cập nhật số lượng qty của nó bằng $num_order
    $_SESSION['cart']['buy'][$id]['qty'] = $qty;
    // cập nhật tổng tiền
    $sub_total = $qty * $item['price'];
    $_SESSION['cart']['buy'][$id]['sub_total'] = $sub_total;

    // cập nhật lại toàn bộ giỏ hàng bằng hàm trong cart_handler.php
    update_info_cart();

    // lấy tổng giá trị giỏ hàng
    $total = get_total_cart();

    // giá trị trả về
    $data = array(
        'sub_total' => money_format($sub_total),
        'total' => money_format($total)
    );
    echo json_encode($data);
}
# nếu muốn trả về data dạng json(tập hợp nhiều data), trước tiên tạo một mảng
// $result = array(
//     'price' => $price,
//     'num_order' => $num_order,
//     'total' => $total
// );
# Xuất data thì echo, data sẽ được đẩy về ajax xử lý
// echo $total;
# đối với json xử dụng cú pháp echo json_encode()
// echo json_encode($data);
# sau khi lấy data xuống = method POST, data được đẩy vào ajax
# data được xử lý trong phần success và được đẩy ra giao diện
