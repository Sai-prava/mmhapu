@extends('admin.layout.index')

@section('title')
    Degree Certificate
@endsection

@section('content')
    <div class="main-body">
        <div class="page-wrapper">
            <div class="row">
                <div class="col-md-5">
                    <form class="needs-validation" action="{{ route('admin.certificate.store') }}" method="post">
                        @csrf
                        <div class="card">
                            <div class="card-header">
                                <h5>Add New Degree Certificate</h5>
                            </div>
                            <div class="card-block pdng">
                                <!-- Form Start -->
                                <div class="form-group">
                                    <label class="form-label">Degree<span>*</span></label>
                                    <input type="text" name="degree" class="form-control" placeholder="Enter Degree">
                                    @error('degree')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Price<span>*</span></label>
                                    <input type="number" name="price" class="form-control" placeholder="Enter Price">
                                    @error('price')
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
                            <h5>Manage Attendance Title</h5>
                        </div>
                        <div class="card-block pdng">
                            <div class="table-responsive">
                                <table id="basic-table" class="display table nowrap table-striped table-hover"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Degree</th>
                                            <th>Price</th>
                                            <th>Action</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach ($certificates as $data)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>{{ $data->degree }}</td>
                                                <td>{{ $data->price }}</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-primary"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#editModal{{ $data->id }}">
                                                        Edit
                                                    </button>
                                                </td>
                                                <td>
                                                    <a class="btn btn-danger btn-sm"
                                                        onclick="confirmDelete('{{ route('admin.certificate.delete', $data->id) }}')">Delete</a>
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
                                                            action="{{ route('admin.degree.update', $data->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            <input type="hidden" name="id"
                                                                value="{{ $data->id }}">
                                                            <div class="modal-body">
                                                                <div class="mb-3 form-group">
                                                                    <label for="degree{{ $data->id }}"
                                                                        class="form-label">Degree</label>
                                                                    <input type="text" class="form-control degree"
                                                                        id="degree{{ $data->id }}" name="degree"
                                                                        value="{{ $data->degree }}" required>
                                                                    <div class="invalid-feedback" id="degree-error"
                                                                        style="display: none;">
                                                                        {{ __('required_field') }}
                                                                        {{ __('Degree') }}
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3 form-group">
                                                                    <label for="price{{ $data->id }}"
                                                                        class="form-label">Price</label>
                                                                    <input type="text" class="form-control price"
                                                                        id="price{{ $data->id }}" name="price"
                                                                        value="{{ $data->price }}" required>
                                                                    <div class="invalid-feedback" id="price-error"
                                                                        style="display: none;">
                                                                        {{ __('required_field') }} {{ __('field_price') }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Save
                                                                    changes</button>
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
            // Validate degree input
            $(document).on('input', '.degree', function() {
                var degree = $(this).val().trim();
                if (degree.length === 0) {
                    $(this).closest('.form-group').find('#degree-error').show();
                } else {
                    $(this).closest('.form-group').find('#degree-error').hide();
                }
            });

            // Validate price input
            $(document).on('input', '.price', function() {
                var price = $(this).val().trim();
                if (price.length === 0) {
                    $(this).closest('.form-group').find('#price-error').show();
                } else {
                    $(this).closest('.form-group').find('#price-error').hide();
                }
            });
        });
    </script>
@endsection
