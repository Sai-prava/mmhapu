@extends('admin.layout.index')

@section('title')
    TEAM
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-6">
            <h3>Edit Team</h3>
        </div>
    </div>
    <div class="col-lg-12">
        <form action="{{ route('admin.Info.update', $edit->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $edit->id }}">
            <div class="row">
                <div class="col-lg-6 mb-3">
                    <label for="notice_type" class="form-label">Faculty Subcategory<span style="color: red">*</span></label>
                    <select name="faculty_subcat_id" class="form-control">
                        <option value="">Select Faculty Subcategory</option>
                        @foreach ($subcategories as $subcategory)
                            <option {{ $subcategory->id == $edit->faculty_subcat_id ? 'selected' : '' }}
                                value="{{ $subcategory->id }}"> {{ $subcategory->name }} </option>
                        @endforeach
                    </select>
                    @if ($errors->has('faculty_subcat_id'))
                        <div class="text-danger">
                            {{ $errors->first('faculty_subcat_id') }}
                        </div>
                    @endif
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="notice_type" class="form-label">Head<span style="color: red">*</span></label>
                    <input type="text" class="form-control" name="head" value="{{ $edit->head }}">
                    @error('head')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="notice_type" class="form-label">Address<span style="color: red">*</span></label>
                    <input type="text" class="form-control" name="address" value="{{ $edit->address }}">
                    @error('address')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="notice_type" class="form-label">Phone<span style="color: red">*</span></label>
                    <input type="number" class="form-control" name="phone" value="{{ $edit->phone }}">
                    @error('phone')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="notice_type" class="form-label">Email<span style="color: red">*</span></label>
                    <input type="text" class="form-control" name="email" value="{{ $edit->email }}">
                    @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="notice_type" class="form-label">Website<span style="color: red">*</span></label>
                    <input type="text" class="form-control" name="website" value="{{ $edit->website }}">
                    @error('website')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

    <script>
        $(document).ready(function() {
            $(document).on('change', '#category', function() {

                var faculty_id = $(this).val();
                $.ajax({
                    type: "POST",
                    url: '{{ route('admin.faculty.getsubcategory') }}',
                    data: {
                        'faculty_id': faculty_id,
                        _token: "{{ csrf_token() }}"
                    },
                    dataType: 'json',
                    success: function(response) {
                        $('#subcategory').empty();
                        $('#subcategory').html('<option value="">Select</option>');
                        $.each(response, function(key, value) {
                            $('#subcategory').append('<option value="' + value.id +
                                '">' + value.name + '</option>');
                        });
                    },
                });
            });
        });
    </script>
@endsection
