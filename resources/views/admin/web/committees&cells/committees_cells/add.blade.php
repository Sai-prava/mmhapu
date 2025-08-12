@extends('admin.layout.index')

@section('title')
    IQAC COMMITTEES & CELLS
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Add IQAC Committees & Cells</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('admin.committesCells.store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <label for="type" class="form-label">Type<span style="color: red">*</span></label>
                        <select name="type" id="type_id" class="form-control">
                            <option value="">Select Type</option>
                            <option value="committees" {{ old('type') == 'committees' ? 'selected' : '' }}>Committees
                            </option>
                            <option value="cells" {{ old('type') == 'cells' ? 'selected' : '' }}>Cells</option>
                        </select>
                        @error('type')
                            <span class="text-danger"> {{ 'Type field is required' }} </span>
                        @enderror
                    </div>

                    <div class="col-lg-6 mb-3">
                        <label for="title" class="form-label">Title<span style="color: red">*</span></label>
                        <select name="title_id" id="title_id" class="form-control">
                            <option value="">Ttile</option>
                        </select>
                        @error('title_id')
                            <span class="text-danger"> {{ 'Title field is required' }} </span>
                        @enderror
                    </div>

                    <div class="col-lg-6 mb-3">
                        <label for="name" class="form-label">Name & Address<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Name & Address">
                        @error('name')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>

                    <div class="col-lg-6 mb-3">
                        <label for="designation" class="form-label">Designation<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="designation" placeholder="Enter Designation">
                        @error('designation')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $(document).on('change', '#type_id', function() {
                var type = $(this).val();
                $.ajax({
                    type: "POST",
                    url: '{{ route('admin.getTitle') }}',
                    data: {
                        'type': type,
                        _token: "{{ csrf_token() }}"
                    },
                    dataType: 'json',
                    success: function(response) {
                        $('#title_id').empty();
                        $('#title_id').html(
                            '<option value="">Select Title</option>');
                        $.each(response, function(key, value) {
                            $('#title_id').append('<option value="' + value.id +
                                '">' + value.title + '</option>');
                        });
                    },
                });
            });
        });
    </script>
@endsection
