<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>

    <div class="container">
        <h1>Edit Book</h1>

        <form action="/books/{{ $items->id }}" method="post">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="book_name">Book Name:</label>
                <input type="text" id="book_name" name="book_name" value="{{ $items->book_name }}" required>
            </div>

            <div class="form-group">
                <label for="book_author">Book Author:</label>
                <input type="text" id="book_author" name="book_author" value="{{ $items->book_author }}" required>
            </div>

            <div class="form-group">
                <label for="book_stock">Book Stock:</label>
                <input type="number" id="book_stock" name="book_stock" value="{{ $items->book_stock }}" required>
            </div>

            <div class="form-group">
                <label for="book_date">Book Date:</label>
                <input type="date" id="book_date" name="book_date" value="{{ $items->book_date }}" required>
            </div>

            <br>
            <button type="submit" class="btn-submit">Update</button>
        </form>

        <br>
        <a href="/books">Back</a>
    </div>

    <br>
    

</body>

</html>