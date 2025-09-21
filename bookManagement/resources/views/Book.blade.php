<!DOCTYPE html>
<html>
<head>
    <title>Book List</title>
    <style>
        table {
            border-collapse: collapse;
            width: 70%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #333;
            padding: 8px 12px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2 style="text-align: center;">Library - Book List</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Book Name</th>
                <th>Book Code</th>
                <th>Author</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->bookName }}</td>
                    <td>{{ $book->bookCode }}</td>
                    <td>{{ $book->bookAuthor }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
