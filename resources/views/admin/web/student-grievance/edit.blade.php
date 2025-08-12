@extends('admin.layout.index')

@section('title')
    Student Grievance Redressal Committee
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Edit Student Grievance Redressal</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('admin.studentGrievance.update') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-12 mb-3">
                        <input type="hidden" name="id" value="{{ $edit->id }}">
                        <label for="intitution" class="form-label">Designation<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="designation" value="{{ $edit->designation }}">
                        @error('designation')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="intitution" class="form-label">Name<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="name" value="{{ $edit->name }}">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="intitution" class="form-label">Email<span style="color: red">*</span></label>
                        <input type="email" class="form-control" name="email" value="{{ $edit->email }}">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="intitution" class="form-label">Contact<span style="color: red">*</span></label>
                        <input type="number" class="form-control" name="contact" value="{{ $edit->contact }}">
                        @error('contact')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
