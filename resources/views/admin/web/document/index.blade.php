@extends('admin.layout.index')

@section('title')
    Document
@endsection

@section('content')
    <div class="main-body">
        <div class="page-wrapper">
            <div class="row">
                <div class="col-md-5">
                    <form class="needs-validation" action="{{ route('admin.document.store') }}" method="post">
                        @csrf
                        <div class="card">
                            <div class="card-header">
                                <h5>Add New Document</h5>
                            </div>
                            <div class="card-block pdng">
                                <!-- Form Start -->
                                <div class="form-group">
                                    <label for="title" class="form-label">Document<span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="name" class="form-control"
                                        placeholder="Enter Document">
                                    @error('name')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="title" class="form-label">Document Type<span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="doc_type" class="form-control"
                                        placeholder="Enter Document Type">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success"><i class="fas fa-check"></i>
                                    {{ __('btn_save') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-header">
                            <h5>Manage Document</h5>
                        </div>
                        <div class="card-block pdng">
                            <div class="table-responsive">
                                <table id="basic-table" class="display table nowrap table-striped table-hover"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Document</th>
                                            <th>Document Type</th>
                                            <th>Action</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach ($documents as $data)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>{{ $data->name }}</td>
                                                <td>{{ $data->doc_type }}</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-primary"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#editModal{{ $data->id }}">
                                                        Edit
                                                    </button>
                                                </td>
                                                <td>
                                                    <a class="btn btn-danger btn-sm"
                                                        onclick="confirmDelete('{{ route('admin.document.delete', $data->id) }}')">Delete</a>
                                                </td>
                                            </tr>

                                            <!-- Edit Modal -->
                                            <div class="modal fade" id="editModal{{ $data->id }}" tabindex="-1"
                                                aria-labelledby="editModalLabel{{ $data->id }}" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="editModalLabel{{ $data->id }}">
                                                                Edit Document</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close">X</button>
                                                        </div>
                                                        <form class="needs-validation" novalidate
                                                            action="{{ route('admin.document.update', $data->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            <input type="hidden" name="id"
                                                                value="{{ $data->id }}">
                                                            <div class="modal-body">
                                                                <div class="mb-3 form-group">
                                                                    <label for="title{{ $data->id }}"
                                                                        class="form-label">Document</label>
                                                                    <input type="text" class="form-control title"
                                                                        id="title{{ $data->id }}" name="name"
                                                                        value="{{ $data->name }}" required>
                                                                    <div class="invalid-feedback" id="title-error"
                                                                        style="display: none;">
                                                                        {{ __('required_field') }} {{ __('Document') }}
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="{{ $data->id }}"
                                                                        class="form-label">Document Type</label>
                                                                    <input type="text" class="form-control"
                                                                        id="{{ $data->id }}" name="doc_type"
                                                                        value="{{ $data->doc_type }}">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <button type="submit"
                                                                    class="btn btn-success update ">{{ __('btn_update') }}</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            @php
                                                $i++;
                                            @endphp
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function confirmDelete(deleteUrl) {
            var isConfirmed = confirm("Are you sure you want to delete this item?");
            if (isConfirmed) {
                window.location.href = deleteUrl;
            } else {
                alert("Deletion canceled");
            }
        }
    </script>
    <script>
        $(document).ready(function() {
            $(document).on('input', '.title', function() {
                var title = $(this).val().trim();
                if (title.length === 0) {
                    $(this).closest('.form-group').find('#title-error').show();
                } else {
                    $(this).closest('.form-group').find('#title-error').hide();
                }
            });
        });
    </script>
@endsection
