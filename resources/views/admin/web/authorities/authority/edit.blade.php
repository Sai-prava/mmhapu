@extends('admin.layout.index')

@section('title')
    UNIVERSITY AUTHORITIES
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Edit University Authorities</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('admin.authority.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <input type="hidden" name="id" value="{{ $authorityEdit->id }}">
                    <div class="col-lg-6 mb-3">
                        <label for="notice_type" class="form-label">Title<span style="color: red">*</span></label>
                        <select class="form-control" name="title_id" id="title">
                            <option value="">Choose Title</option>
                            @foreach ($titles as $data)
                                <option value=" {{ $data->id }} "
                                    {{ $data->id == $authorityEdit->title_id ? 'selected' : '' }}> {{ $data->title }}
                                </option>
                            @endforeach
                        </select>
                        @error('title_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="notice_type" class="form-label">Position<span style="color: red">*</span></label>
                        <select class="form-control" name="position_id" id="position">
                            <option value="">Choose Position</option>
                            @foreach ($edit as $position)
                                <option value=" {{ $position->id }} "
                                    {{ $position->id == $authorityEdit->position_id ? 'selected' : '' }}>
                                    {{ $position->position }} </option>
                            @endforeach
                        </select>
                        @error('position_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="name" class="form-label">Name<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Name"
                            value="{{ $authorityEdit->name }}" >
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="designation" class="form-label">Designation<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="designation" placeholder="Enter Designation"
                            value="{{ $authorityEdit->designation }}">
                            @error('designation')
                            <span class="text-danger">{{ $message }}</span>
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

<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script>
    $(document).ready(function() {
        $(document).on('change', '#title', function() {
            var title = $(this).val();
            $.ajax({
                type: "POST",
                url: '{{ route('admin.authority.getPosition') }}',
                data: {
                    'title_id': title,
                    _token: "{{ csrf_token() }}"
                },
                dataType: 'json',
                success: function(response) {
                    $('#position').empty();
                    $('#position').html(
                        '<option value="">----POSITION----</option>');
                    $.each(response, function(key, value) {
                        $('#position').append('<option value="' + value.id +
                            '">' + value.position + '</option>');
                    });
                },
            });
        });
    });
</script>
