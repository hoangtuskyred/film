@extends('admin.layout')
@section('title', 'List category')

@section('content')
    <h2 class="text-center">List category</h2>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addCategoryModal">+ Add category</button>

{{--    Add category modal--}}
    <div class="modal fade" id="addCategoryModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label for="inputName">Name</label>
                    <input type="text" class="form-control" id="inputName" placeholder="Enter name">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button id="btnAddCategory" type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>

{{--    Edit category modal--}}
    <div class="modal fade" id="editCategoryModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label for="inputEditName">Name</label>
                    <input type="text" class="form-control" id="inputEditName" placeholder="Enter name">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button id="btnEditCategory" type="button" class="btn btn-primary">Save changes</button>
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
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php $i = 1 ?>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a class="btnEdit" href="javascript:void(0)" title="Edit" data-id="{{ $category->id }}">
                            <span data-feather="edit"></span>
                        </a>
                        <a class="btnDelete" href="javascript:void(0)" title="Delete" data-id="{{ $category->id }}">
                            <span data-feather="trash-2"></span>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="float-right">
            {{ $categories->links('admin.paginator') }}
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('js/admin-category.js') }}"></script>
@endsection
