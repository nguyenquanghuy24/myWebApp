Chương 1 : Giới hiệu về php và Laravel khóa Coursera ( Khóa 1 )

https://www.coursera.org/learn/laravel-framework-and-php 

MODULE 1

1.1 Giới thiệu php 
php :ngôn ngữ lập trình sever-side 
- dùng để tạo web động: hiển thị bài viết, kết nối dữ liệu.
- dễ học , có một cộng đồng lớn hỗ trợ
1.2 Cú pháp php 

- đóng mở thẻ : 

`<?php`
        `// code`
`?>`

-in ra màn hình : 

`php`<br>
`echo "hello world";`<br>

- comment 
<br>`php`<br>
`// comment 1 dòng `<br>
`# comment 1 dòng`<br>
`/* comment nhiều dòng`<br>

-kiểu dữ liệu cơ bản: integer(42), float (42.0), string ("Hello"),boolean (true/false).

1.3 cấu trúc điều khiển

- if/ else dùng để rẽ nhánh theo điều kiện 
- toán tử logic: && , ||, !, ....
- vòng lặp: for , while, do...while,..

1.4 Hàm trong PHP

Hàm giúp tái sử dụng code, chia nhỏ chương trình.

Được khai báo bằng từ khóa function:

`function sayHello($name) {`<br>
    `return "Hello, " . $name;`<br>
`}`<br>

1.5 vai trò php 

- xử lý sever 
- làm nội dung động 
- bảo mật & xác thực 
- tích hợp flamework như laravel

1.6 laravel 
- eloquent ORM: cú pháp trực quan để làm với CSDL 
- Artisan CLI 
- blade template
- route group
- name route
- middleware 
