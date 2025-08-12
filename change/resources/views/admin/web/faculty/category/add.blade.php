@extends('admin.layout.index')

@section('title')
    FACULTY-CATEGORY
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Add Faculty Category</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('admin.faculty.category.store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <label for="name" class="form-label">Name<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Name"
                            value="{{ old('name') }}">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="icon" class="form-label">Icon<span style="color: red">*</span></label>
                            <div class="input-group">
                                <input type="text" class="form-control" autocomplete="off" name="icon"
                                    placeholder="Icon" value="{{ old('icon') }}">
                                <span class="input-group-text  input-group-addon" data-icon="las la-home"
                                    role="iconpicker"></span>
                                @error('icon')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="phone" class="form-label">Phone<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="phone" placeholder="Enter Phone Number"
                            value="{{ old('phone') }}">
                        @error('phone')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="email" class="form-label">Email<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="email" placeholder="Enter Email"
                            value="{{ old('email') }}">
                        @error('email')
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

    <script src="{{ asset('web/js/fontawesome-iconpicker.js') }}"></script>
    <script>
        (function($) {
            "use strict";

            $('.iconPicker').iconpicker().on('iconpickerSelected', function(e) {
                $(this).closest('.form-group').find('.iconpicker-input').val(
                    `<i class="${e.iconpickerValue}"></i>`);
            });
        })(jQuery);
    </script>
@endsection
