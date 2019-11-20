@extends('admin.layout')
@section('title', 'List film')

@section('content')
    <h2 class="text-center">List film</h2>
    <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#addFilmModal">
        + Add film
    </button>

{{--    Modal addFilm--}}
    <div class="modal fade" id="addFilmModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add film</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form class="row">
                        <div class="form-group col-6">
                            <label for="inputName">Name</label>
                            <input type="text" class="form-control" id="inputName" placeholder="Enter name">
                        </div>

                        <div class="form-group col-6">
                            <label for="inputPoster">Poster</label>
                            <input type="text" class="form-control" id="inputPoster" placeholder="Enter poster">
                        </div>

                        <div class="form-group col-6">
                            <label for="inputThumbnail">Thumbnail</label>
                            <input type="text" class="form-control" id="inputThumbnail" placeholder="Enter thumbnail">
                        </div>

                        <div class="form-group col-6">
                            <label for="inputCategories">Categories</label>
                            <div class="row">
                                <select id="inputCategories" class="selectpicker col-12" multiple data-live-search="true">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group col-6">
                            <label for="inputYear">Year</label>
                            <input type="number" class="form-control" id="inputYear" placeholder="Enter year">
                        </div>

                        <div class="form-group col-6">
                            <label for="inputDuration">Duration</label>
                            <input type="text" class="form-control" id="inputDuration" placeholder="Enter duration">
                        </div>

                        <div class="form-group col-12">
                            <label for="inputDescription">Description</label>
                            <textarea id="inputDescription" class="form-control" rows="3"></textarea>
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
{{--    End modal addFilm--}}

{{--    Modal editFilm--}}
    <div class="modal fade" id="editFilmModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit film</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form class="row">
                        <div class="form-group col-6">
                            <label for="inputEditName">Name</label>
                            <input type="text" class="form-control" id="inputEditName" placeholder="Enter name">
                        </div>

                        <div class="form-group col-6">
                            <label for="inputEditPoster">Poster</label>
                            <input type="text" class="form-control" id="inputEditPoster" placeholder="Enter poster">
                        </div>

                        <div class="form-group col-6">
                            <label for="inputEditThumbnail">Thumbnail</label>
                            <input type="text" class="form-control" id="inputEditThumbnail" placeholder="Enter thumbnail">
                        </div>

                        <div class="form-group col-6">
                            <label for="inputEditCategories">Categories</label>
                            <div class="row">
                                <select id="inputEditCategories" class="selectpicker col-12" multiple data-live-search="true">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group col-6">
                            <label for="inputEditYear">Year</label>
                            <input type="number" class="form-control" id="inputEditYear" placeholder="Enter year">
                        </div>

                        <div class="form-group col-6">
                            <label for="inputEditDuration">Duration</label>
                            <input type="text" class="form-control" id="inputEditDuration" placeholder="Enter duration">
                        </div>

                        <div class="form-group col-12">
                            <label for="inputEditDescription">Description</label>
                            <textarea id="inputEditDescription" class="form-control" rows="3"></textarea>
                        </div>

                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button id="btnEditFilm" type="button" class="btn btn-primary">Save change</button>
                </div>
            </div>
        </div>
    </div>
{{--    End modal editFilm--}}

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
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editFilmModal" data-id="{{ $film->id }}">Edit</button>
                        <button type="button" class="btn btn-danger btnDelete" value="{{ $film->id }}">Delete</button>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <script>
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // Add film
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

            // Edit film modal
            $('#editFilmModal').on('show.bs.modal', function (event) {
                $('#inputEditCategories option:selected').removeAttr('selected');

                var modal = $(this);
                var button = $(event.relatedTarget);
                var id = button.data('id');

                modal.find('#btnEditFilm').attr('data-id', id);

                $.ajax({
                    url: '/films/' + id,
                    method: 'GET'
                }).done(function (res) {
                    modal.find('.modal-title').text(res.name);
                    modal.find('#inputEditName').val(res.name);
                    modal.find('#inputEditPoster').val(res.poster);
                    modal.find('#inputEditThumbnail').val(res.thumbnail);
                    modal.find('#inputEditYear').val(res.year);
                    modal.find('#inputEditDuration').val(res.duration);
                    modal.find('#inputEditDescription').text(res.description);

                    $.each(res.categories, function(key, value) {
                        $('#inputEditCategories').find('option').each(function() {
                            if ($(this).val() == value.id) {
                                $(this).attr('selected', 'selected');
                                return false;
                            }
                        });
                    });

                    $('.selectpicker').selectpicker('refresh');

                    toastr.success('Load data success! Start editing...', res.name);
                }).fail(function (err) {
                    toastr.error('No data!');
                })
            });

            // Edit film
            $('#btnEditFilm').click(function () {
                toastr.warning('Save change...');
                var id = $(this).attr('data-id');
                var data = {
                    name: $('#inputEditName').val(),
                    categories: $('#inputEditCategories').val(),
                    poster: $('#inputEditPoster').val(),
                    thumbnail: $('#inputEditThumbnail').val(),
                    year: $('#inputEditYear').val(),
                    duration: $('#inputEditDuration').val(),
                    description: $('#inputEditDescription').val()
                };

                $.ajax({
                    url: '/films/' + id + '/edit',
                    method: 'PUT',
                    data: data
                }).done(function (res) {
                    location.href = '/admin/films?message=Saved change!';
                }).fail(function (err) {
                    console.log(err);
                    toastr.error(err.message);
                })
            });

            // Delete film
            $('.btnDelete').click(function () {
                var c = confirm('Do you want to delete this film?');
                if (c) {
                    var id = $(this).val();
                    toastr.warning('Deleting this film...');
                    $.ajax({
                        url: '/films/' + id,
                        method: 'DELETE'
                    }).done(function (res) {
                        location.href = '/admin/films?message=Deleted film!';
                    }).fail(function (err) {
                        console.log(err);
                    })
                }
            });
        })
    </script>
@endsection
