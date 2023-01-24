<?php
# 1. hàm lấy dữ liệu page by id cho phần giới thiệu và liên hệ
// trả về mảng thông tin tương ứng với id của trang
function get_page_by_id($id)
{
    global $list_page;
    foreach ($list_page as $item) {
        if ($id == $item['id']) {
            return $item;
        }
    };
    return false;
    // cách 2
    // if (array_key_exists($id, $list_page)) {
    //     return $list_page[$id];
    // } else {
    //     return false;
    // }
}


// hàm lấy "loại" sp theo cate_id
function get_info_cate($cate_id)
{
    global $list_product_cate;
    // foreach ($list_product_cate as $item) {
    //     if ($item[$cate_id] == $item['id']) {
    //         return $item;
    //     } else {
    //         return false;
    //     }
    // }
    if (array_key_exists($cate_id, $list_product_cate)) {
        $list_product_cate[$cate_id]['url'] = "?mod=product&act=main&cate_id={$cate_id}";
        return $list_product_cate[$cate_id];
    } else {
        return false;
    }
}


# hàm lấy danh sách các sp theo cate_id
# khi lấy thêm vào cho nó url dẫn đến chi tiết sp đó luôn
function get_list_product_by_cate_id($cate_id)
{
    global $list_product;
    $result = array(); // tạo mảng rỗng để chứa các sp lọc được theo cate_id
    foreach ($list_product as $item) {
        if ($item['cate_id'] == $cate_id) { # kt xem cate_id của mỗi pt trong $list_product có khớp với $cate_id đầu vào hay ko?
            # trước khi nạp pt dc chọn vào mảng, ta thêm cho nó 1 url
            # url này dẫn vào chi tiết của sp đó nơi có nút add cart
            $item['url'] = "?mod=product&act=detail&id={$item['id']}";
            $result[] = $item;
        }
    }
    return $result;
}
///////////////
// hàm lấy sp theo id
function get_product_by_id($id)
{
    global $list_product;
    if (array_key_exists($id, $list_product)) {
        $list_product[$id]['url_add_to_cart'] = "?mod=cart&act=add&id={$id}";
        # thêm vào sp dc chọn theo id 1 url đi vào giỏ hàng (nút thêm vào giỏ hàng)
        $list_product[$id]['url'] = "?mod=product&act=detail&id={$id}";
        # thêm vào sp dc chọn theo id 1 url đi vào chi tiết sp đó
        return $list_product[$id];
    }
    return false;
}



// hàm format price sp
function money_format($number)
{
    return number_format($number) . "đ";
}






function add_cart($id)
{
    global $list_product;
    # 1. lấy id của sp, bước này dc thực hiện ở trang cart/add.php
    // sau khi lấy dc id rồi cho vào function get_product_by_id đã tạo ra ở trên
    // function này trả về mảng data của sp đó, ta gán cho kq biến $item
    $item = get_product_by_id($id);
    // show_array($item);


    #Thêm thông tin vào giỏ hàng
    # số lượng ban đầu của sp = 1(trường hợp sp này được thêm vào cart lần đầu tiên)
    $qty = 1;

    # 2. kiểm tra $_SESSion['cart] đã có hay chưa, lưu ý phải bật session ở index.php trước
    // trường hợp user đã mua 1 sp và muốn mua thêm 1 đơn vị nữa bằng cách thêm vào giở hàng trong trang chi tiết
    // kiểm tra $id đã từng xuất hiện trong giỏ hàng hay chưa, nếu rồi tức là nó đã từng được thêm vào giỏ hàng
    if (isset($_SESSION['cart']) && array_key_exists($id, $_SESSION['cart']['buy'])) {
        $qty = $_SESSION['cart']['buy'][$id]['qty'] + 1;
    };

    # 3. nếu $_SESSION['cart'] đã tồn tại, ta gán cho nó 1 số trường
    // tạo lớp buy cho các sp được add vào giở hàng
    // và để lấy dc sp đó ta phải lấy dc id của nó, bc này đã làm ở cart/add.php
    // các trường khác được lấy từ $item là kq của get_product_by_id($id)
    // lưu ý: $_SESSION['cart']['buy'][$id] và $item có id như nhau, giống nhau
    $_SESSION['cart']['buy'][$id] = array(
        'id' => $item['id'],
        'url' => $item['url'],
        // thêm url đi vào chi tiết sp, url này đc thêm vào function get_product_by_id
        'product_title' => $item['product_title'],
        'price' => $item['price'],
        'product_thumb' => $item['product_thumb'],
        'code' => $item['code'],
        'qty' => $qty,
        // lưu ý qty lúc này bằng với $qty
        'sub_total' =>  $item['price'] * $qty,
    );
    # session là mảng toàn cục ko cần return vẫn sữ dụng được
    # cập nhật hoá đơn
    update_info_cart();
}


# quá trình update giỏ hàng sẽ lặp lại ở nhiều bước vì thế ta tạo 1 hàm để chứa code
function update_info_cart()
{
    if (isset($_SESSION['cart'])) {
        $num_order = 0;
        $total = 0;
        // để tính tổng số tiền các sp ta đi lặp qua $_SESSION['cart']['buy']
        // tính tổng của các sp đó rồi đẩy vào biến $total;
        // sau khi lặp ta lấy thêm thông tin về số lượng của mỗi sp và cho vào $num_order
        foreach ($_SESSION['cart']['buy'] as $item) {
            $num_order += $item['qty'];
            $total += $item['sub_total'];
        }

        // sau khi tính dc $num_order và $total rồi ta đi đẩy nó vào $_SESSION['cart']['info']
        // session này chứa thông tin chung về các sp
        $_SESSION['cart']['info'] = array(
            'num_order' => $num_order,
            'total' => $total,
        );
    }
}
/////////////////
// Xử lý giỏ hàng
function get_list_buy_cart()
{
    # kt session giỏ hàng đã tồn tại chưa
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart']['buy'] as &$item) {
            // lặp qua các sp có trong lớp buy
            $item['url_delete_cart'] = "?mod=cart&act=delete&id={$item['id']}";
        }
        // kt $_SESSION['cart'], nếu có tồn tại thì trả về mảng $_SESSION['cart']['buy'];
        return $_SESSION['cart']['buy'];
    }
    return false;
}

/////////////////////////
// tổng giá thanh toán
function total_bill()
{
    if (isset($_SESSION['cart'])) {
        return $_SESSION['cart']['info'];
    }
    return false;
}

/////////////////
# hàm này để hiển thị số lượng sp có trong giỏ hàng tại vị trí cart icon
function get_num_order_cart()
{
    if (isset($_SESSION['cart'])) {
        return $_SESSION['cart']['info']['num_order'];
        // return về value ['num_order'] trong $_SESSION['cart']['info']['num_order'];
    }
    return false;
}
////////////
#tạo hàm lấy tổng số tiền thanh toán
function get_total_cart() // hàm này lấy ra key total trong $_SESSION['cart']['info']
{
    if (isset($_SESSION['cart'])) {
        return $_SESSION['cart']['info']['total'];
    }
    return false;
}

/////////////////////////
# tạo hàm xoá sp
function delete_cart($id)
{
    if (isset($_SESSION['cart'])) {
        # case 1 xoá sp có $id
        if (!empty($id)) {
            unset($_SESSION['cart']['buy'][$id]);
            update_info_cart();
        } else { # case 2 xoá tất cả sp trong giỏ hàng
            unset($_SESSION['cart']);
        }
    }
}

/////////////////////
# tạo hàm update_cart
function update_cart($x)
{
    foreach ($x as $id => $new_qty) {
        // viết như trên có nghĩa là trong array đầu vào có key $id, value là $new_qty
        // tiếp theo là gán cho [$id]['qty'] trong $_SESSION một $new_qty lấy từ value của input
        $_SESSION['cart']['buy'][$id]['qty'] = $new_qty;
        $_SESSION['cart']['buy'][$id]['sub_total'] = $new_qty *  $_SESSION['cart']['buy'][$id]['price'];
        // cập nhật tổng giá tiền mới
    }
    # cập nhật lại giỏ hàng
    update_info_cart();
}
