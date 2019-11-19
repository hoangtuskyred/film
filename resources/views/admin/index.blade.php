<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css?family=Pridi|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <title>Document</title>
</head>
<body>
<a href="/admin-film/create">+Create</a>
<h2>List Film</h2>
<div class="fluid-container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">name</th>
                <th scope="col">poster</th>
                <th scope="col">thumbnail</th>
                <th scope="col">year</th>
                <th scope="col">duration</th>
                <th scope="col">description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($films as $film)
            <tr>
                <th scope="row">{{ $film->id }}</th>
                <td>{{ $film->name }}</td>
                <td>{{ $film->poster }}</td>
                <td>{{ $film->thumbnail }}</td>
                <td>{{ $film->year }}</td>
                <td>{{ $film->duration }}</td>
                <td>{{ $film->description }}</td>
                <td>
                    <a href="/admin-film/{{ $film->id }}/edit">Edit</a>
                    <a class="btnDelete" data-id="{{ $film->id }}" href="javascript:void(0)">Delete</a>
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<script src="{{ asset('/js/jquery-3.4.1.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.btnDelete').click(function () {
            var id = $(this).attr('data-id');

            $.ajax({
                url: 'admin-film/' + id,
                type: 'DELETE',
                data: {
                    id: id
                }
            }).done(function (res) {
                location.reload();
            }).fail(function (error) {
                console.log(error);
            })
        })
    })
</script>
</body>
</html>
