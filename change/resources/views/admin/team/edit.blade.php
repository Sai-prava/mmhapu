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
        <form action="{{ route('admin.Team.update', $edit_team->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <input type="hidden" name="id" value="{{ $edit_team->id }}">
                <div class="col-lg-6 mb-3">
                    <label for="notice_type" class="form-label">Faculty Category<span style="color: red">*</span></label>
                    <select name="faculty_cat_id" class="form-control" id="category">
                        <option value="">Select Faculty Category</option>
                        @foreach ($categories as $category)
                            <option {{ $category->id == $edit_team->faculty_cat_id ? 'selected' : '' }}
                                value="{{ $category->id }}"> {{ $category->name }} </option>
                        @endforeach
                    </select>
                    @error('faculty_cat_id')
                        <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="notice_type" class="form-label">Faculty Subcategory<span style="color: red">*</span></label>
                    <select name="faculty_subcat_id" class="form-control" id="subcategory">
                        <option value="">Select Faculty Subcategory</option>
                        @foreach ($subcategories as $subcategory)
                            <option {{ $subcategory->id == $edit_team->faculty_subcat_id ? 'selected' : '' }}
                                value="{{ $subcategory->id }}"> {{ $subcategory->name }} </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="notice_type" class="form-label">Name<span style="color: red">*</span></label>
                    <input type="text" class="form-control" name="name" value="{{ $edit_team->name }}">
                    @error('name')
                        <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="notice_type" class="form-label">Designation<span style="color: red">*</span></label>
                    <input type="text" class="form-control" name="designation" value="{{ $edit_team->designation }}">
                    @error('designation')
                        <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="notice_type" class="form-label">Qualification<span style="color: red">*</span></label>
                    <input type="text" class="form-control" name="qualification" value="{{ $edit_team->qualification }}"
                        placeholder="Enter Qualification">
                    @error('qualification')
                        <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="notice_type" class="form-label">Email<span style="color: red">*</span></label>
                    <input type="text" class="form-control" name="email" value="{{ $edit_team->email }}"
                        placeholder="Enter Email">
                    @error('email')
                        <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="notice_type" class="form-label">Phone<span style="color: red">*</span></label>
                    <input type="number" class="form-control" name="phone" value="{{ $edit_team->phone }}"
                        placeholder="Enter Phone">
                    @error('phone')
                        <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="notice_type" class="form-label">Photo<span style="color: red">*</span></label>
                    <input type="file" class="form-control" name="photo">
                    <img src="{{ asset('Team/' . $edit_team->photo) }}" alt="" width="70">
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="notice_type" class="form-label">Facebook ID<span style="color: red">*</span></label>
                    <input type="text" class="form-control" name="facebook" value="{{ $edit_team->facebook }}">
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="notice_type" class="form-label">Instagram ID<span style="color: red">*</span></label>
                    <input type="text" class="form-control" name="instagram" value="{{ $edit_team->instagram }}">
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="notice_type" class="form-label">X ID<span style="color: red">*</span></label>
                    <input type="text" class="form-control" name="x" value="{{ $edit_team->x }}">
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="notice_type" class="form-label">Resume<span style="color: red">*</span></label>
                    <input type="file" class="form-control" name="resume" accept=".pdf">
                    <a href=" {{ asset('Team/'. $edit_team->resume) }} " target="_blank" class="text-warning">{{ $edit_team->resume }}</a>
                </div>
                <div class="col-lg-12 mb-3">
                    <label for="notice_type" class="form-label">Short description<span
                            style="color: red">*</span></label>
                    <input type="text" class="form-control" name="s_description"
                        value="{{ $edit_team->s_description }}">
                </div>
            </div>
            <div class="mb-3">
                <label for="notice_type" class="form-label">Details<span style="color: red">*</span></label>
                <textarea class="form-control" id="Editor" name="details"cols="30" rows="4">{{ $edit_team->details }}</textarea>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Update</button>
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
    <script type="text/javascript" src="{{ asset('web/js/ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('Editor');
    </script>
@endsection
