# Lập trình WP với child theme Polestar 

1. Các thiết lập ban đầu:
Setup maximum dung lượng file được upload:

## .htaccess

`php_value upload_max_filesize 200M
php_value post_max_size 200M
php_value memory_limit 256M
php_value max_execution_time 300
php_value max_input_time 300
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteBase /
RewriteRule ^index\.php$ - [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . /index.php [L]
</IfModule>`

---
***
___

wp-config.php

`define( 'FS_METHOD', 'direct' ); // Dùng để cài đặt plugin trên local

// Các option tương tự để tănt dung lượng
@ini_set( 'upload_max_filesize' , '200M' );
@ini_set( 'post_max_size', '128M');
@ini_set( 'memory_limit', '256M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );
`

2. Cài đặt theme polestar

- Tạo child theme cho polestar và chọn child thme

3. Cài các plugin cần thiết:

- Sideorigin (2 plugin yêu cầu của theme)

- WOOCOMMERCE

- WOOCOMMERCE SERVICE

- SEO RANK MATH

- CLASSIC EDITOR

- CONTACT-FORM-7


4. Tạo 2 MENU

- Một menu chính

- Một menu cho sitebar

- Add menu WIDGET vào SIDEBAR trái hoặc phải

5. Custom Woocommerce

- Chép các file từ plugin Woo và thêm vào thư mục Wocommerce để custom lại các page của woo

5. Bố trí lại layout

- Có thể dùng builder của theme để tạo các post

- Contact form 7 dùng để gửi mail, copy source code để vào phần editor của trang liên hệ.

