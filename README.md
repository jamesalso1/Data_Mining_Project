<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Điều kiện cần cho dự án
- phiên bản node: v24.0.0
- phiên bản php: v8.3.9
## Cài đặt dự án lần đầu
- cài thư viện: npm install && npm run build
- migrate database: php artisan migrate (Bước này thì nhớ xem cấu hình cơ sở dữ liệu trong file .env nhe)
## Chạy dự án
- chạy lệnh: composer run dev
## cấu hình thư mục 
### Cấu hình thư mục

Dự án này sử dụng cấu trúc thư mục chuẩn của Laravel. Dưới đây là một số thư mục quan trọng cần chú ý:

- **app/**: Chứa mã nguồn chính của ứng dụng, bao gồm các controller, model, và logic xử lý.
- **bootstrap/**: Chứa tệp `app.php` để khởi tạo ứng dụng.
- **config/**: Chứa các tệp cấu hình của ứng dụng.
- **database/**: Chứa các tệp migration, seeders, và cơ sở dữ liệu SQLite (nếu sử dụng).
- **public/**: Thư mục gốc của ứng dụng, chứa tệp `index.php` và các tài nguyên công khai như CSS, JS, và hình ảnh.
- **resources/**: Chứa các tệp view, ngôn ngữ, và tài nguyên frontend như CSS và JS.
- **routes/**: Chứa các tệp định tuyến của ứng dụng.
- **storage/**: Chứa các tệp log, cache, và các tệp được tạo ra trong quá trình chạy ứng dụng.
- **tests/**: Chứa các tệp kiểm thử của ứng dụng.
- **vendor/**: Chứa các thư viện bên thứ ba được cài đặt thông qua Composer.

Hãy đảm bảo rằng các thư mục này được thiết lập đúng quyền truy cập, đặc biệt là thư mục `storage/` và `bootstrap/cache/`, để tránh lỗi trong quá trình chạy ứng dụng.
