<?php
// Danh mục sp

// 1. id
// 2. danh mục các loại sp => cate_title
$list_product_cate = array(
    1 => array(
        'id' => 1,
        'cate_title' => 'điện thoại',
    ),
    2 => array(
        'id' => 2,
        'cate_title' => 'laptop',
    ),

);


// data sản phẩm

// 1. id
// 2. tên sp => product_name
// 3. giá sp => price
// 4. mã sp => code
// 5. mô tả sp => product_desc
// 6. ảnh đại diện => product_thumb => định dạng url
// 7. nội dung => product_content
// 8. id danh mục => cate_id
$list_product = array(
    1 => array(
        'id' => 1,
        'product_title' => 'Samsung Galaxy Z Flip4 128GB',
        'price' => 18490000,
        'sale' => 23990000,
        'code' => 'WLT#1',
        'product_desc' => 'Samsung Galaxy Z Flip4 128GB đã chính thức ra mắt thị trường công nghệ, đánh dấu sự trở lại của Samsung trên con đường định hướng người dùng về sự tiện lợi trên những chiếc điện thoại gập. Với độ bền được gia tăng cùng kiểu thiết kế đẹp mắt giúp Flip4 trở thành một trong những tâm điểm sáng giá cho nửa cuối năm 2022.',
        'product_thumb' => './public/images/dt1.jpg',
        'product_content' => '<p>Có lẽ điện thoại gập đã không còn là cái tên quá xa lạ bởi nhiều ông lớn trong ngành sản xuất thiết bị di động đã cho ra mắt khá nhiều sản phẩm có thiết kế tương tự, gần đây nhất thì có sự góp mặt của chiếc flagship đến từ nhà Samsung mang tên Galaxy Z Flip4.</p>
        <p><img class="img-fluid" alt="Samsung Galaxy Z Flip4 128GB" title="Samsung Galaxy Z Flip4 128GB" src="https://cdn2.cellphones.com.vn/x,webp,q100/media/wysiwyg/mobile/samsung/samsung-galaxy-z-flip-4-14.jpg"></p><p>Điện thoại Samsung ZFlip 4 tiếp tục là một mẫu mã sang chảnh, thời thượng của Samsung được lấy cảm hứng từ hộp trang điểm cầm tay của các chị em hay chiếc vỏ sò. Với công nghệ gập đột phá, Samsung đã tạo ra một chiếc smartphone mang đậm dấu ấn Samsung trên thị trường. Đóng lại là phụ kiện công nghệ với kích thước 4.2-inch, vừa vặn mọi ngăn túi. Mở ra là một chiếc smartphone gập phá vỡ mọi giới hạn từ trước đến nay.</p>',
        'cate_id' => 1,
    ),
    2 => array(
        'id' => 2,
        'product_title' => 'iPhone 11',
        'price' => 10490000,
        'sale' => 19990000,
        'code' => 'WLT#2',
        'product_desc' => 'iPhone 11 sở hữu hiệu năng khá mạnh mẽ, ổn định trong thời gian dài nhờ được trang bị chipset A13 Bionic. Màn hình LCD 6.1 inch sắc nét cùng chất lượng hiển thị Full HD của máy cho trải nghiệm hình ảnh mượt mà và có độ tương phản cao. Hệ thống camera hiện đại được tích hợp những tính năng công nghệ mới kết hợp với viên Pin dung lượng 3110mAh, giúp nâng cao trải nghiệm của người dùng.',
        'product_thumb' => './public/images/dt2.jpg',
        'product_content' => '<p>Thời gian gần đây, thị trường smartphone đang có những bước chuyển mình mạnh mẽ với sự ra đời của hàng loạt những sản phẩm với các công nghệ hiện đại bậc nhất như: bộ vi xử lý Snapdragon 8 Gen 2, tấm nền màn hình QLED… Đó có thể là những bước tiến lớn nhưng nó không có nghĩa là dấu chấm hết cho những thiết bị đã được ra mắt trước đó như iPhone 11.</p><p><img class="img-fluid" alt="iPhone 11" title="iPhone 11" src="https://cdn2.cellphones.com.vn/x,webp,q100/media/wysiwyg/Phone/Apple/iPhone-11/iphone-11-1.jpg"></p><p>Mặc dù không còn giữ được sức nóng và độ hot như những ngày đầu mới được ra mắt nhưng ở thời điểm hiện tại, bạn khó có thể tìm được một sản phẩm nào sở hữu hiệu năng ổn định với mức giá thành siêu rẻ như iPhone 11. Với việc được hạ giá thành xuống thấp tới mức không thể nào hấp dẫn hơn, iPhone 11 sẽ tạo nên một con sốt trên thị trường smartphone thời điểm này.</p>',
        'cate_id' => 1,
    ),
    3 => array(
        'id' => 3,
        'product_title' => 'Xiaomi Redmi Note 11',
        'price' => 4190000,
        'sale' => 4690000,
        'code' => 'WLT#3',
        'product_desc' => 'Nếu như Redmi Note 10 là một trong những điện thoại tốt nhất ở thời điểm hiện tại với camera tuyệt vời, thiết kế cao cấp cùng mức giá khá ấn tượng thì người dùng lại hi vọng vào phiên bản mới mang tên Redmi Note 11 với những nâng cấp nổi bật. Chắc chắn những thông số xung quanh mẫu điện thoại Xiaomi mới này vẫn đang là một ẩn số đối với người hâm mộ.',
        'product_thumb' => './public/images/dt3.jpg',
        'product_content' => '<p>Redmi Note 11 được Xiaomi trang bị tấm nền IPS LCD với độ phân phải FHD+ cùng khả năng hiển thị tới 16 triệu màu sẽ mang đến chất lượng hình ảnh vô cùng sống động. Người dùng có thể thoải mái tận hưởng và trải nghiệm những video giải trí hoặc những game đồ hoạ ấn tượng.</p><p><img class="img-fluid" title="Xiaomi Redmi Note 11" src="https://cdn2.cellphones.com.vn/x,webp,q100/media/wysiwyg/Phone/Xiaomi/Redmi/NOte/Redmi-Note-11-1.jpg"></p><p>Xiaomi Redmi Note 11 có khả năng chinh phục mọi khoảnh khắc khi được trang bị cụm camera vô cùng ấn tượng. Độ phân giải của ống kính lần lượt là ống kính chính 50MP và camera phụ 8MP. Cùng với đó là hai ống kính macro 2MP và cảm biến đo độ sâu trường ảnh 2MP ở mặt sau và mặt trước 13MP giúp cho mọi tấm ảnh, ngay cả ảnh chụp selfie được trở nên vô cùng sắc nét và sống động.</p>',
        'cate_id' => 1,
    ),
    4 => array(
        'id' => 4,
        'product_title' => 'Samsung Galaxy S22 Ultra 5G',
        'price' => 18490000,
        'sale' => 30990000,
        'code' => 'WLT#4',
        'product_desc' => 'Đúng như các thông tin được đồn đoán trước đó, mẫu flagship mới của gả khổng lồ Hàn Quốc được ra mắt với tên gọi là Samsung Galaxy S22 Ultra với nhiều cải tiến đáng giá. Mẫu điện thoại cao cấp đến từ Samsung này có nhiều thay đổi từ thiết kế, cấu hình cho đến camera. Vậy siêu phẩm này có gì mới, giá bao nhiêu và có nên mua không? Hãy cùng tìm hiểu chi tiết ngay bên dưới nhé!',
        'product_thumb' => './public/images/dt4.jpg',
        'product_content' => '<p>Trước khi chính thức ra mắt cộng đồng những chiếc điện thoại Samsung S22 Series đã có thời gian được thai nghén khá dài để đảm bảo có những tính năng thực sự vượt trội so với phiên bản tiền nhiệm. Để có thể hình dung rõ ràng ta xét đến 2 mẫu Samsung S22 Ultra và S21 Ulta xem dòng flagship mới nhà Samsung có những nâng cấp nổi trội nào nhé!</p><p><img class="img-fluid" src="https://cdn2.cellphones.com.vn/800x,webp,q100/media/wysiwyg/Phone/Samsung/samsung_s/S22/samsung-galaxy-s22-ultra-4.jpg" alt="Samsung Galaxy S22 Ultra 5G" title="Samsung Galaxy S22 Ultra 5G"></p><p>Thiết bị được trang bị khả năng chụp ảnh chân dung ban đêm, trong điều kiện thiếu sáng ấn tượng với bộ xử lý hình ảnh AI kết hợp với camera góc rộng 108MP mang lại bức ảnh ban đêm sáng rõ. Với không gian không quá tối, chỉ với thao tác sử dụng chế độ tự động, AI sẽ tự xử lý cho ra hình ảnh sáng, đầy đủ chi tiết và không bị nhiễu. Trường hợp thiếu sáng, chế độ chụp đêm là sự lựa chọn hoàn hảo.</p>',
        'cate_id' => 1,
    ),
    5 => array(
        'id' => 5,
        'product_title' => 'MacBook Air M1 2020 7-core GPU',
        'price' => 23290000,
        'sale' => 27490000,
        'code' => 'WLT#5',
        'product_desc' => 'Là dòng sản phẩm có thiết kế mỏng nhẹ, sang trọng và tinh tế cùng với đó là giá thành phải chăng nên MacBook Air đã thu hút được đông đảo người dùng yêu thích và lựa chọn. Một trong những phiên bản mới nhất mà khách hàng không thể bỏ qua khi đến với CellphoneS đó là MacBook Air M1. Dưới đây là chi tiết về thiết kế, cấu hình của máy.',
        'product_thumb' => './public/images/lt1.jpg',
        'product_content' => '<p>MacBook Air M1 256GB 2020 được trang bị màn hình Retina IPS 13.3 inch mang đến nhiều màu sắc hơn lên đến 48% so với những thế hệ trước đó. Bên cạnh đó, màn hình tráng gương tràn viền khiến viền giúp mỏng hơn 50% so với trước đây.</p><p><img class="img-fluid" title="MacBook Air M1 2020 7-core GPU" src="https://cdn2.cellphones.com.vn/x,webp,q100/media/wysiwyg/laptop/macbook/Macbook-air-m1-256gb-2020-1.jpg"></p><p>Điểm nhấn của MacBook Air M1 256GB 2020 chính là con chip M1. CPU của chip M1 sẽ có 8 nhân, bao gồm 4 nhân hiệu suất cao và 4 nhân hiệu suất thấp mang đến sức mạnh vượt trội cho thiết bị rất. Sức mạnh trên M1 256GB hơn 98% so với các laptop Windows và hiệu năng vượt trội hơn so với các phiên bản Air sử dụng chip Intel.</p>',
        'cate_id' => 2,
    ),

    6 => array(
        'id' => 6,
        'product_title' => 'Laptop HP 15S-FQ5080TU 6K7A0PA ',
        'price' => 15590000,
        'sale' => 17290000,
        'code' => 'WLT#6',
        'product_desc' => 'Laptop HP 15S-FQ5080TU 6K7A0PA là thiết bị điện tử được phân phối và sản xuất bởi thương hiệu HP mới được ra mắt thời gian gần đây. Với thiết kế gọn nhẹ, chuyên dụng cùng hiệu năng đỉnh cao được hỗ trợ bởi con chip Intel core i5, chiếc laptop HP này là một sản phẩm hoàn toàn phù hợp với học sinh và nhân viên văn phòng.',
        'product_thumb' => './public/images/lt2.jpg',
        'product_content' => '<p>Màn hình laptop có kích thước lớn - 15.6 inch, màn hình tràn viền hấp dẫn mang lại cho người dùng sự tập trung trong công việc và những trải nghiệm giải trí thú vị. Đặc biệt, máy được trang bị công nghệ fliker-free giúp bảo vệ đôi mắt bạn khỏi những tác động xấu tới từ màn hình máy tính.</p><p><img class="img-fluid" src="https://cdn2.cellphones.com.vn/x,webp,q100/media/wysiwyg/laptop/HP/laptop-hp-15s-fq5080tu-6k7a0pa-2.jpg" title="Laptop HP 15s fq2662TU i3 1115G4/4GB/256GB/Win11 (6K795PA)"></p><p>Với thiết kế mỏng nhẹ, siêu di động cùng hiệu năng mạnh mẽ được nâng cấp từ phiên bản tiền nhiệm, HP 15S-FQ5080TU 6K7A0PA là một lựa chọn hoàn hảo dành cho nhân viên văn phòng và học sinh sinh viên trong xử lý công việc và nhu cầu giải trí. Để có thể sở hữu ấn phẩm công nghệ này với mức giá ưu đãi, bạn có thể tham khảo tại hệ thống cửa hàng CellphoneS. Tại đây, chúng tôi chuyên cung cấp những sản phẩm công nghệ chất lượng, chính hãng với mức giá vô cùng phải chăng cùng chính sách bảo hành uy tín.</p>',
        'cate_id' => 2,
    ),
    7 => array(
        'id' => 7,
        'product_title' => 'MacBook Air M2 2022 16GB',
        'price' => 37590000,
        'sale' => 46990000,
        'code' => 'WLT#7',
        'product_desc' => 'Cũng như những dòng sản phẩm khác của nhà “Táo”, MacBook Air M2 13.6 inch 2022 256GB chính hãng Apple Việt Nam nổi bật với vẻ đẹp sang trọng nhờ các cạnh vuông vức của lớp vỏ kim loại nguyên khối. So với thế hệ trước, MacBook Air M2 2022 lấy cảm hứng thiết kế từ các mẫu MacBook Pro khiến diện mạo của máy trông cao cấp, mạnh mẽ hơn.',
        'product_thumb' => './public/images/lt3.jpg',
        'product_content' => '<p>Điểm khác biệt thứ hai so với dòng MacBook Air cũ đó là bàn phím Magic Key. Các hàng phím chức năng F được gia tăng kích thước, cho phép người dùng thao tác nhanh chóng, chính xác hơn kể cả khi gõ phím mà không nhìn. Bên dưới bàn phím được trang bị đèn nền hỗ trợ người dùng làm việc trong những điều kiện thiếu sáng. MacBook Air M2 13.6 inch 2022 256GB chính hãng tích hợp các cổng kết nối bao gồm 2 cổng Thunderbolt 3 để truyền dữ liệu và Jack cắm tai nghe 3.5mm tiện lợi. Ngoài ra máy có sạc nam châm MagSafe 3 nhỏ nhắn. Người dùng sẽ không cần sử dụng để các loại dây cáp dài khi cần sạc điện đồng thời khiến cho máy trông tối giản hơn.</p><p><img class="img-fluid"  src="https://cdn.hoanghamobile.com/i/content/Uploads/2022/06/28/air-m2-3.png"></p><p>Nếu bạn đã từng sử dụng iPhone thì không còn lạ gì với “tai thỏ” quen thuộc. Giờ đây, Apple đã mang thiết kế độc đáo này lên màn hình của những chiếc MacBook Air M2 13.6 inch 2022 256GB chính hãng. Với thiết kế này, màn hình 13.6 inch của máy sẽ được tối ưu không gian hiển thị. Ngoài ra tấm nền Liquid Retina với độ phân giải 2.560 x 1.664 pixel có thể hỗ trợ hiển thị 1 tỷ màu trên mỗi điểm ảnh và độ sáng 500 nit. Người dùng sẽ có trải nghiệm thị giác mãn nhãn không giới hạn bất kể khi đang xem phim hay làm việc trên chiếc MacBook này. </p>',
        'cate_id' => 2,
    ),

    8 => array(
        'id' => 8,
        'product_title' => 'Asus Zenbook 17 Fold OLED UX9702AA i7 1250U (MD014W)',
        'price' => 88990000,
        'sale' => 0,
        'code' => 'WLT#8',
        'product_desc' => 'Laptop Asus Zenbook 17 Fold OLED UX9702AA-MD014W hứa hẹn mang đến cho bạn những trải nghiệm thú vị. Sản phẩm sở hữu phong cách độc lạ với màn hình gập cùng màu sắc độc đáo. Chiếc laptop Asus Zenbook sẽ giúp bạn khám phá nhiều chức năng thú vị.',
        'product_thumb' => './public/images/lt4.jpg',
        'product_content' => '<p>Laptop Asus Zenbook 17 Fold OLED UX9702AA-MD014W sở hữu màn hình cảm ứng OLED kích thước 17.3 inch, độ phân giải 2560 x1920 với tỷ lệ 4:3, tần số làm mới 60Hz. Đặc biệt, màn hình có thể gập xuống chỉ còn 12.5 inch (độ phân giải 1920x1280) tỷ lệ 3:2 nhỏ gọn, dễ dàng mang theo mọi nơi. </p><p><img class="img-fluid" src="https://cdn2.cellphones.com.vn/x,webp,q100/media/wysiwyg/laptop/Asus/Zenbook/Laptop-Asus-Zenbook-17-Fold-OLED-UX9702AA-MD014W-2.jpg" alt="Asus Zenbook 17 Fold OLED UX9702AA i7 1250U (MD014W))" title="Asus Zenbook 17 Fold OLED UX9702AA i7 1250U (MD014W)"></p><p>Hệ thống âm thanh của Asus Zenbook 17 Fold là Dolby Atmos tích hợp 4 loa nhằm điều khiển bộ khuếch đại (đạt chứng nhận Harman Kardon) để tối đa hóa chất lượng âm thanh to rõ hơn. Bộ khuếch đại của loa tối đa hoá âm lượng gấp đến 3.5 lần so với bộ khuếch đại tiêu chuẩn. Nhờ vậy, sẽ giảm thiểu sự biến dạng nhằm đảm bảo âm thanh trong trẻo khi thực hiện các cuộc gọi video hay xem phim, nghe nhạc.</p>',
        'cate_id' => 2,
    ),
);
