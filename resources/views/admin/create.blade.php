<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Create Admin</title>
</head>
<body>
<h2>Create Film</h2>
<div class="container">
    <form>
        <div class="form-group">
            <label for="inputName">Name</label>
            <input type="text" class="form-control" id="inputName" placeholder="Enter name">
        </div>

        <div class="form-group">
            <label for="inputPoster">Poster</label>
            <input type="text" class="form-control" id="inputPoster" placeholder="Enter poster">
        </div>

        <div class="form-group">
            <label for="inputThumbnail">Thumbnail</label>
            <input type="text" class="form-control" id="inputThumbnail" placeholder="Enter thumbnail">
        </div>

        <div class="form-group">
            <label for="inputYear">Year</label>
            <input type="number" class="form-control" id="inputYear" placeholder="Enter year">
        </div>

        <div class="form-group">
            <label for="inputDuration">Duration</label>
            <input type="text" class="form-control" id="inputDuration" placeholder="Enter duration">
        </div>

        <div class="form-group">
            <label for="Description">Description</label>
            <input type="text" class="form-control" id="inputDescription" placeholder="Enter description">
        </div>

        <button type="submit" class="btn btn-primary" id="btnSubmit">Submit</button>
    </form>
</div>
<script src="{{ asset('/js/jquery-3.4.1.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#btnSubmit').click(function (e) {
            e.preventDefault();
            var name = $('#inputName').val();
            var poster = $('#inputPoster').val();
            var thumbnail = $('#inputThumbnail').val();
            var year = $('#inputYear').val();
            var duration = $('#inputDuration').val();
            var description = $('#inputDescription').val();
            $.ajax({
                url:'/admin-film',
                type: 'POST',
                data:{
                    name:name,
                    poster:poster,
                    thumbnail:thumbnail,
                    year:year,
                    duration:duration,
                    description:description,
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
