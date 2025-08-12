@extends('admin.layout.index')

@section('title')
    IQAC FEEDBACK
@endsection

@section('content')
    <div class="main-body">
        <div class="page-wrapper">
            <div class="row">
                <div class="col-md-5">
                    <form action="{{ route('admin.Feedback.store') }}" method="post">
                        @csrf
                        <div class="card">
                            <div class="card-header">
                                <h5>Add New IQAC Feedback</h5>
                            </div>
                            <div class="card-block pdng">
                                <!-- Form Start -->
                                <div class="form-group">
                                    <label for="subject" class="form-label">Subject <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" name="subject" placeholder="Enter Subject" value="{{ old('subject') }}">
                                    @error('subject')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="url" class="form-label">URL<span style="color: red">*</span></label>
                                    <input type="url" class="form-control" name="url" placeholder="Enter Your Form link" value="{{ old('url') }}">
                                    @error('url')
                                        <span class="text-danger"> {{ $message }} </span>
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
                            <h5>Manage IQAC Feedback</h5>
                        </div>
                        <div class="card-block pdng">
                            <div class="table-responsive">
                                <table id="basic-table" class="display table nowrap table-striped table-hover"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Subject</th>
                                            <th>URL</th>
                                            <th>Action</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach ($feedbacks as $data)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td> {{ $data->subject }} </td>
                                                <td> <a class="btn btn-sm btn-success" target="_blank" href="{{ $data->url }}">View</a> </td>
                                                <td>
                                                    <a class="btn btn-sm btn-primary"
                                                        href="{{ route('admin.Feedback.edit', $data->id) }}">Edit</a>
                                                </td>
                                                <td>
                                                    <a class="btn btn-danger btn-sm"
                                                        onclick="confirmDelete('{{ route('admin.Feedback.delete', $data->id) }}')">Delete</a>
                                                </td>
                                            </tr>
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
@endsection
