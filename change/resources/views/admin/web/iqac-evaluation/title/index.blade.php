@extends('admin.layout.index')

@section('title')
    IQAC EVALUATION OF REPORT
@endsection

@section('content')
    <div class="main-body">
        <div class="page-wrapper">
            <div class="row">
                <div class="col-md-5">
                    <form class="needs-validation" action="{{ route('admin.Evaluation.store') }}" novalidate method="post">
                        @csrf
                        <div class="card">
                            <div class="card-header">
                                <h5>Add New Evaluation of Report</h5>
                            </div>
                            <div class="card-block pdng">
                                <!-- Form Start -->
                                <div class="form-group">
                                    <label for="title" class="form-label">Title<span>*</span></label>
                                    <input type="text" name="title" class="form-control" placeholder="Enter Title" required>
                                    <div class="invalid-feedback">
                                        {{ __('required_field') }} {{ __('field_title') }}
                                    </div>
                                    {{-- @error('title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror --}}
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
                            <h5>Manage Evaluation of Report</h5>
                        </div>
                        <div class="card-block pdng">
                            <div class="table-responsive">
                                <table id="basic-table" class="display table nowrap table-striped table-hover"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Action</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach ($evaluations as $data)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>{{ $data->title }}</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-primary"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#editModal{{ $data->id }}">
                                                        Edit
                                                    </button>
                                                </td>
                                                <td>
                                                    <a class="btn btn-danger btn-sm"
                                                        onclick="confirmDelete('{{ route('admin.Evaluation.delete', $data->id) }}')">Delete</a>
                                                </td>
                                            </tr>

                                            <!-- Edit Modal -->
                                            <div class="modal fade" id="editModal{{ $data->id }}" tabindex="-1"
                                                aria-labelledby="editModalLabel{{ $data->id }}" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="editModalLabel{{ $data->id }}">
                                                                Edit Evaluation Title</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close">X</button>
                                                        </div>
                                                        <form class="needs-validation" novalidate action="{{ route('admin.Evaluation.update', $data->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            <input type="hidden" name="id"
                                                                value="{{ $data->id }}">
                                                            <div class="modal-body">
                                                                <div class="mb-3 form-group">
                                                                    <label for="title{{ $data->id }}"
                                                                        class="form-label">Evaluation Title</label>
                                                                    <input type="text" class="form-control title"
                                                                        id="title{{ $data->id }}" name="title"
                                                                        value="{{ $data->title }}" required>
                                                                        <div class="invalid-feedback" id="title-error"
                                                                        style="display: none;">
                                                                        {{ __('required_field') }} {{ __('field_title') }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Update</button>
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
