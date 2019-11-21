@extends('admin.layout')
@section('title', 'List episode')

@section('content')
    <h2 class="text-center">List episode</h2>

    {{--    Edit category modal--}}
    <div class="modal fade" id="editEpisodeModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label for="inputEditName">Episode</label>
                    <input type="number" class="form-control" id="inputEditName" placeholder="Enter name">
                </div>
                <div class="modal-body">
                    <label for="inputEditUrl">Url</label>
                    <input type="text" class="form-control" id="inputEditUrl" placeholder="Enter url">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button id="btnEditEpisode" type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th>Stt</th>
                <th>Film</th>
                <th>Episode</th>
                <th>Url</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php $i = 1 ?>
            @foreach($episodes as $episode)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $episode->film->name }}</td>
                    <td>{{ $episode->name }}</td>
                    <td>{{ $episode->url }}</td>
                    <td>
                        <a class="btnEdit" href="javascript:void(0)" title="Edit" data-id="{{ $episode->id }}">
                            <span data-feather="edit"></span>
                        </a>
                        <a class="btnDelete" href="javascript:void(0)" title="Delete" data-id="{{ $episode->id }}">
                            <span data-feather="trash-2"></span>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="float-right">
            {{ $episodes->links('admin.paginator') }}
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('js/admin-episode.js') }}"></script>
@endsection
