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

{{--    Modal addEpisode--}}
    <div class="modal fade" id="addEpisodeModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add episode</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="container-fluid">
                        <h6 id="listEpisode"></h6>
                        <p>Add new an episode</p>
                        <form class="row">
                            <div class="form-group col-6">
                                <label for="inputEpisodeName">Episode</label>
                                <input type="number" class="form-control" id="inputEpisodeName" placeholder="Enter name">
                            </div>
                            <div class="form-group col-6">
                                <label for="inputEpisodeUrl">Url</label>
                                <input type="text" class="form-control" id="inputEpisodeUrl" placeholder="Enter url">
                            </div>
                        </form>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button id="btnSaveEpisode" type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
{{--    End modal addEpisode--}}

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
                        <a class="btnAddEpisode" href="javascript:void(0)" title="Add episode" data-id="{{ $film->id }}">
                            <span data-feather="plus-square"></span>
                        </a>
                        <a class="btnEdit" href="javascript:void(0)" title="Edit" data-id="{{ $film->id }}">
                            <span data-feather="edit"></span>
                        </a>
                        <a class="btnDelete" href="javascript:void(0)" title="Delete" data-id="{{ $film->id }}">
                            <span data-feather="trash-2"></span>
                        </a>
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
    <script src="{{ asset('js/libs/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('js/admin-film.js') }}"></script>
@endsection
