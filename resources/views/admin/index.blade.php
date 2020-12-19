<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container text-center col-3">
    <h3>ფილმის დამატება</h3>
    <form action="{{ route('store') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="name" class="w-100 mt-2">
        <input type="text" name="imdb" placeholder="IMDB" class="w-100 mt-2">
        <input type="text" name="description" placeholder="desciption" class="w-100 mt-2">
        ჟანრის არჩევა:
        <select name="genre" id="cars">
            @foreach($genres as $genre)
                <option value="{{ $genre->id }}">{{ $genre->Genre_name }}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-primary w-100 mt-2">დამატება</button>
    </form>
    <a href="{{ route('genre') }}">ჟანრის დამატება</a>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
