<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <div class="container">
        <h1>Books</h1>

        <form action="/books" method="POST" class="book-form">

            @csrf

            <div class="form-group">
                <label for="book_name">Book Name:</label>
                <input type="text" id="book_name" name="book_name" required>
            </div>

            <div class="form-group">
                <label for="book_author">Book Author:</label>
                <input type="text" id="book_author" name="book_author" required>
            </div>

            <div class="form-group">
                <label for="book_stock">Book Stock:</label>
                <input type="number" id="book_stock" name="book_stock" required>
            </div>

            <div class="form-group">
                <label for="book_date">Book Date:</label>
                <input type="date" id="book_date" name="book_date" required>
            </div>

            <br>
            <button type="submit" class="btn-submit">Save</button>
        </form>

        <hr>

        <table class="book-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Book Name</th>
                    <th>Book Author</th>
                    <th>Book Stock</th>
                    <th>Book Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->book_name }}</td>
                    <td>{{ $item->book_author }}</td>
                    <td>{{ $item->book_stock }}</td>
                    <td>{{ $item->book_date }}</td>
                    <td>
                        <a href="/books/{{ $item->id }}/edit">Edit</a>
                        {{-- books/1/edit--}}
                        <form action="/books/{{ $item->id }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>