<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Sửa sách</title>
</head>
<body>
    <h1>✏️ Sửa thông tin sách</h1>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')
        <p>Tên sách: <input type="text" name="title" value="{{ $book->title }}" required></p>
        <p>Tác giả: <input type="text" name="author" value="{{ $book->author }}" required></p>
        <p>ISBN: <input type="text" name="isbn" value="{{ $book->isbn }}" required></p>
        <p>Nhà xuất bản: <input type="text" name="publisher" value="{{ $book->publisher }}"></p>
        <p>Năm XB: <input type="number" name="year_published" value="{{ $book->year_published }}"></p>
        <p>Thể loại: <input type="text" name="category" value="{{ $book->category }}"></p>
        <p>Tình trạng:
            <select name="status">
                <option value="Còn" {{ $book->status == 'Còn' ? 'selected' : '' }}>Còn</option>
                <option value="Đang mượn" {{ $book->status == 'Đang mượn' ? 'selected' : '' }}>Đang mượn</option>
                <option value="Hỏng" {{ $book->status == 'Hỏng' ? 'selected' : '' }}>Hỏng</option>
            </select>
        </p>
        <p>Số lượng: <input type="number" name="quantity" value="{{ $book->quantity }}"></p>
        <button type="submit">Cập nhật</button>
    </form>

    <p><a href="{{ route('books.index') }}">⬅ Quay lại</a></p>
</body>
</html>
