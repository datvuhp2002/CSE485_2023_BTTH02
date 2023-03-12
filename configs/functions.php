<?php

// FORMATTING FUNCTIONS
function html_escape($text): string
{
    // Next line is an update for PHP 8.1 see https://phpandmysql.com/updates/passing-null-to-string-functions/
    $text = $text ?? ''; // If the value passed into function is null set $text to a blank string

    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8', false); // Return escaped string
}

function format_date(string $string): string
{
    $date = date_create_from_format('Y-m-d H:i:s', $string);    // Convert to DateTime object
    return $date->format('F d, Y');                             // Return in format Jan 31, 2030
}

// ERROR AND EXCEPTION HANDLING FUNCTIONS
// Convert errors to exceptions
set_error_handler('handle_error');
function handle_error($error_type, $error_message, $error_file, $error_line)
{
    throw new ErrorException($error_message, 0, $error_type, $error_file, $error_line); // Turn into ErrorException
}

// Handle exceptions - log exception and show error message (if server does not send error page listed in .htaccess)
set_exception_handler('handle_exception');
function handle_exception($e)
{
    error_log($e);                        // Log the error
    http_response_code(500);              // Set the http response code
    echo "<h1>Sorry, a problem occurred</h1>   
          The site's owners have been informed. Please try again later.";
}

// Handle fatal errors
register_shutdown_function('handle_shutdown');
function handle_shutdown()
{
    $error = error_get_last();            // Check for error in script
    if ($error !== null) {                // If there was an error next line throws exception
        $e = new ErrorException($error['message'], 0, $error['type'], $error['file'], $error['line']);
        handle_exception($e);             // Call exception handler
    }
}
function func_get_img($item){
    $filename = "images/songs/" . html_escape($item) . ".jpg";
    if (file_exists($filename)) {
        $img_src = $filename;
    } else{
        $img_src = $item;
    }
    return $img_src;
}
function process_data_article($str){
    switch($str){
        case 'tieude': 
            return 'Mã tiêu đề';
            break;
        case 'ten_bhat': 
            return 'Tên bài hát';
            break;
        case 'ma_tloai':
            return 'Mã thể loại';
            break;
        case 'tomtat':
            return 'Tóm tắt';
            break;
        case 'noidung':
            return 'Nội dung';
            break;
        case 'ma_tgia':
            return 'Mã tác giả';
            break;
        case 'ngayviet':
            return 'Ngày viết';
            break;
        case 'hinhanh':
            return "Hình ảnh";
            break;
        default:
            return 'none';
            break;
    }
};
// administrator
function validate($data){

    $data = trim($data);

    $data = stripslashes($data);

    $data = htmlspecialchars($data);

    return $data;
 }
function process_data_admin($str){
    switch($str){
        case 'baiviet': 
            return 'Bài viết';
            break;
        case 'tacgia': 
            return 'Tác giả';
            break;
        case 'theloai':
            return 'Thể loại';
            break;
        case 'users':
            return 'Người dùng';
            break;
        default:
            return 'none';
            break;
    }
};


function process_data_author($str){
    switch($str){
        case 'ten_tgia':
            return 'Tên Tác giả';
            break;
        case 'hinh_tgia':
            return "Hình ảnh tác giả";
            break;
        default:
            return 'none';
            break;
    }
};
?>