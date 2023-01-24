$(document).ready(function() {
    $(".num_order").change(function() {
        var id = $(this).attr("data-id"); // lấy id của input chọn số lượng, thêm thuộc tính data-id cho nó để thao tác
        var qty = $(this).val(); // lấy số lượng cũng bằng $(this)

        var data = { id: id, qty: qty };
        // khai báo data kiểu json key: value

        $.ajax({
            url: "?mod=cart&act=process", // trang xử lý data
            method: "POST", // POST hoặc GET mặc định GET phải viết trong ""
            data: data, // dữ liệu truyền lên server kiểu json { key1: value1 }
            dataType: "json", // data trả về có thể ở dạng hrml, text, script hoặc json
            success: function(data) {
                $("#sub-total-" + id).text(data.sub_total);
                $("#total-price span").text(data.total);
                // console.log(data);
            },
            // code in lỗi
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            },
        });
    });
});