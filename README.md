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
- vòng lặp: for , while, do...while,.. :
```php
for ($i = 0; $i < 5; $i++) {
    echo $i;
}

while ($i < 5) {
    echo $i;
    $i++;
}

do {
    echo $i;
    $i++;
} while ($i < 5);
```
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

Phân tích Project Framework

Trong dự án thực tế, PHP đóng vai trò xử lý các nghiệp vụ phía server, còn Laravel mang lại một bộ công cụ giúp tổ chức code khoa học hơn. Laravel hoạt động theo mô hình MVC (Model – View – Controller):

Model: quản lý và tương tác với cơ sở dữ liệu.

View: giao diện hiển thị cho người dùng (sử dụng Blade Template).

Controller: xử lý logic, điều hướng dữ liệu giữa Model và View.

Laravel cung cấp:

Eloquent ORM: làm việc với CSDL bằng cú pháp trực quan thay cho SQL thuần.

Artisan CLI: tạo nhanh model, controller, migration.

Blade Template: quản lý giao diện dễ đọc và tách biệt với logic.

Route Group & Name Route: tổ chức tuyến đường rõ ràng, dễ bảo trì.

Middleware: xử lý request/response trung gian, thường dùng cho xác thực và phân quyền.

Nhờ framework, project sẽ có cấu trúc rõ ràng, dễ bảo trì, dễ mở rộng, giảm rủi ro bảo mật và tăng tốc độ phát triển.
