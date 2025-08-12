@extends('admin.layout.index')

@section('title')
    University Authorities Position
@endsection

@section('content')
    <div class="main-body">
        <div class="page-wrapper">
            <div class="row">
                <div class="col-md-5">
                    <form class="needs-validation" action="{{ route('admin.position.store') }}" method="post">
                        @csrf
                        <div class="card">
                            <div class="card-header">
                                <h5>Add New University Authority Position</h5>
                            </div>
                            <div class="card-block pdng">
                                <!-- Form Start -->
                                <div class="form-group">
                                    <label for="title" class="form-label">Title<span>*</span></label>
                                    <select name="title_id" class="form-control">
                                        <option value="">---Select---</option>
                                        @foreach ($titles as $data)
                                            <option value="{{ $data->id }}"
                                                {{ old('title_id') == $data->id ? 'selected' : '' }}>{{ $data->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('title_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="title" class="form-label">Position<span>*</span></label>
                                    <input type="text" name="position" class="form-control" placeholder="Enter Position"
                                        value="{{ old('position') }}">
                                    @error('position')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
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
                            <h5>Manage University Authorities</h5>
                        </div>
                        <div class="card-block pdng">
                            <div class="table-responsive">
                                <table id="basic-table" class="display table nowrap table-striped table-hover"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Position</th>
                                            <th>Action</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach ($positionList as $data)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>{{ $data->getTitle->title }}</td>
                                                <td>{{ $data->position }}</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-primary"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#editModal{{ $data->id }}">
                                                        Edit
                                                    </button>
                                                </td>
                                                <td>
                                                    <a class="btn btn-danger btn-sm"
                                                        onclick="confirmDelete('{{ route('admin.position.delete', $data->id) }}')">Delete</a>
                                                </td>
                                            </tr>

                                            <!-- Edit Modal -->
                                            <div class="modal fade" id="editModal{{ $data->id }}" tabindex="-1"
                                                aria-labelledby="editModalLabel{{ $data->id }}" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="editModalLabel{{ $data->id }}">
                                                                Edit Title</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close">X</button>
                                                        </div>
                                                        <form class="needs-validation" novalidate
                                                            action="{{ route('admin.position.update', $data->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            <input type="hidden" name="id"
                                                                value="{{ $data->id }}">
                                                            <div class="modal-body">
                                                                <!-- Title Dropdown -->
                                                                <div class="mb-3 form-group">
                                                                    <label for="title{{ $data->id }}"
                                                                        class="form-label">Title</label>
                                                                    <select name="title_id"
                                                                        class="form-control title-dropdown" required>
                                                                        <option value="">---Select---</option>
                                                                        @foreach ($titles as $title)
                                                                            <option value="{{ $title->id }}"
                                                                                {{ $data->title_id == $title->id ? 'selected' : '' }}>
                                                                                {{ $title->title }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                    <div class="invalid-feedback" id="title-dropdown-error"
                                                                        style="display: none;">
                                                                        {{ __('required_field') }} {{ __('field_title') }}
                                                                    </div>
                                                                </div>

                                                                <!-- Position Field -->
                                                                <div class="mb-3 form-group">
                                                                    <label for="title{{ $data->id }}"
                                                                        class="form-label">Position</label>
                                                                    <input type="text" class="form-control position"
                                                                        id="title{{ $data->id }}" name="position"
                                                                        value="{{ $data->position }}" required>
                                                                    <div class="invalid-feedback" id="position-error"
                                                                        style="display: none;">
                                                                        {{ __('required_field') }}
                                                                        {{ __('Position') }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <button type="submit"
                                                                    class="btn btn-success">Update</button>
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
            // Validate the title dropdown
            $(document).on('change', '.title-dropdown', function() {
                var selectedValue = $(this).val().trim();

                // Show or hide the error based on the dropdown selection
                if (selectedValue === '') {
                    $(this).closest('.form-group').find('#title-dropdown-error').show();
                } else {
                    $(this).closest('.form-group').find('#title-dropdown-error').hide();
                }
            });

            // Validate the position input field
            $(document).on('input', '.position', function() {
                var position = $(this).val().trim();

                // Show or hide the error based on the input value
                if (position.length === 0) {
                    $(this).closest('.form-group').find('#position-error').show();
                } else {
                    $(this).closest('.form-group').find('#position-error').hide();
                }
            });
        });
    </script>
@endsection
