@extends('admin.layout')
@section('title', 'List film')

@section('content')
    <h2 class="text-center">List film</h2>
    <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#addFilmModal">
        + Add film
    </button>

    <div class="modal fade" id="addFilmModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add film</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body row">

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
                            <label for="inputThumbnail">Categories</label>
                            <select id="inputCategories" class="selectpicker" multiple data-live-search="true">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
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

                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button id="btnAddFilm" type="button" class="btn btn-primary">Add film</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editFilm" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add film</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body row">

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
                            <label for="inputThumbnail">Categories</label>
                            <select id="inputCategories" class="selectpicker" multiple data-live-search="true">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
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

                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button id="btnAddFilm" type="button" class="btn btn-primary">Add film</button>
                </div>
            </div>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>Stt</th>
                    <th>Name</th>
                    <th>Poster</th>
                    <th>Thumbnail</th>
                    <th>Year</th>
                    <th>Duration</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php $i = 1 ?>
            @foreach($films as $film)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $film->name }}</td>
                    <td><img src="{{ $film->poster }}" alt="{{ $film->name }}" width="70px" height="100px"></td>
                    <td><img src="{{ $film->thumbnail }}" alt="{{ $film->name }}" width="180px" height="100px"></td>
                    <td>{{ $film->year }}</td>
                    <td>{{ $film->duration }} tập</td>
                    <td>{{ $film->description }}</td>
                    <td>
                        <button href="/admin/films/{{ $film->id }}/edit">Edit</button>
                        <button class="btn btn-danger btnDelete" value="{{ $film->id }}">Delete</button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="float-right">
            {{ $films->links('admin.paginator') }}
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#btnAddFilm').click(function () {
                var data = {
                     name: $('#inputName').val(),
                     categories: $('#inputCategories').val(),
                     poster: $('#inputPoster').val(),
                     thumbnail: $('#inputThumbnail').val(),
                     year: $('#inputYear').val(),
                     duration: $('#inputDuration').val(),
                     description: $('#inputDescription').val()
                };

                $.ajax({
                    url: '/films',
                    method: 'POST',
                    data: data
                }).done(function (res) {
                    location.href = '/admin/films?message=Add film success!';
                }).fail(function (err) {
                    console.log(err);
                })
            });

            // Foreach option of select tag
            // $('select#id').find('option').each(function() {
            //     alert($(this).val());
            // });

            $('.btnDelete').click(function () {
                var id = $(this).val();

                $.ajax({
                    url: '/films/' + id,
                    method: 'DELETE'
                }).done(function (res) {
                    location.href = '/admin/films?message=Deleted film!';
                }).fail(function (err) {
                    console.log(err);
                })
            })
        })
    </script>
@endsection
