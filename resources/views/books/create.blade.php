<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thêm sách</title>
</head>
<body>
    <h1>➕ Thêm sách mới</h1>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <p>Tên sách: <input type="text" name="title" required></p>
        <p>Tác giả: <input type="text" name="author" required></p>
        <p>ISBN: <input type="text" name="isbn" required></p>
        <p>Nhà xuất bản: <input type="text" name="publisher"></p>
        <p>Năm XB: <input type="number" name="year_published"></p>
        <p>Thể loại: <input type="text" name="category"></p>
        <p>Tình trạng:
            <select name="status">
                <option value="Còn">Còn</option>
                <option value="Đang mượn">Đang mượn</option>
                <option value="Hỏng">Hỏng</option>
            </select>
        </p>
        <p>Số lượng: <input type="number" name="quantity" value="1"></p>
        <button type="submit">Lưu sách</button>
    </form>

    <p><a href="{{ route('books.index') }}">⬅ Quay lại</a></p>
</body>
</html>
