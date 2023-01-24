<?php
function get_header($version = '')
{
    // dựa vào tham số $version từ các trang trong folder modules
    // chuyển hướng đến các trang header khác trong folder inc
    // trong các trang đó sẽ thêm class vào cho ul#menu
    // dựa vào class đó để tuỳ chỉnh color trong file css
    if (!empty($version)) {
        $path_header = "inc/header_$version.php";
    } else {
        $path_header = "inc/header.php";
    }

    if (file_exists($path_header)) {
        require $path_header;
    } else {
        echo "$path_header không tồn tại";
    }
}



function get_footer()
{

    $path_footer = "inc/footer.php";
    if (file_exists($path_footer)) {
        require $path_footer;
    } else {
        echo "$path_footer không tồn tại";
    }
}

function get_sidebar()
{
    $path_sidebar = "inc/sidebar.php";
    if (file_exists($path_sidebar)) {
        require $path_sidebar;
    } else {
        echo "$path_sidebar không tồn tại";
    }
}

function redirect($url)
{
    if (!empty($url)) {
        header("location: $url");
    }
}

function show_array($data)
{
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}
