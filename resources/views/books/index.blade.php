<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>📚 Danh sách sách</title>
    <style>
        body { font-family: Arial; margin: 40px; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        a { text-decoration: none; padding: 4px 8px; background: #008CBA; color: #fff; border-radius: 4px; }
        a.delete { background: #e74c3c; }
        a.edit { background: #f39c12; }
        .top { margin-bottom: 10px; }
    </style>
</head>
<body>
    <h1>Quản lý sách</h1>

    <div class="top">
        <a href="{{ route('books.create') }}">➕ Thêm sách</a>
    </div>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    @if($books->isEmpty())
        <p>Chưa có sách nào trong thư viện.</p>
    @else
        <table>
            <tr>
                <th>ID</th>
                <th>Tên sách</th>
                <th>Tác giả</th>
                <th>ISBN</th>
                <th>Tình trạng</th>
                <th>Hành động</th>
            </tr>
            @foreach($books as $book)
            <tr>
                <td>{{ $book->id }}</td>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->isbn }}</td>
                <td>{{ $book->status }}</td>
                <td>
                    <a class="edit" href="{{ route('books.edit', $book->id) }}">Sửa</a>
                    <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="background:#e74c3c; color:white; border:none; padding:4px 8px; border-radius:4px;">Xóa</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    @endif
</body>
</html>
