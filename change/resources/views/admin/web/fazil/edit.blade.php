@extends('admin.layout.index')

@section('title')
    FAZIL
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Edit FAZIL</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('admin.fazil.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <input type="hidden" name="id" value="{{ $fazilEdit->id }}">
                    <div class="col-lg-6 mb-3">
                        <label for="name" class="form-label">Name of the Madrasa<span
                                style="color: red">*</span></label>
                        <input type="text" class="form-control" name="name" value="{{ $fazilEdit->name }}">
                        @error('name')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="managment" class="form-label">Managment<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="managment" value="{{ $fazilEdit->managment }}">
                        @error('managment')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="regulating" class="form-label">Regulating Body<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="regulating" value="{{ $fazilEdit->regulating }}">
                        @error('regulating')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="course" class="form-label">Course Name<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="course" value="{{ $fazilEdit->course }}">
                        @error('course')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="intake" class="form-label">Intake<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="intake" value="{{ $fazilEdit->intake }}">
                        @error('intake')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="District" class="form-label">District<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="district" value="{{ $fazilEdit->district }}">
                        @error('district')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="Address" class="form-label">Address<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="address" value="{{ $fazilEdit->address }}">
                        @error('address')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" value="{{ $fazilEdit->email }}">
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="Incharge" class="form-label">Incharge of Madrasa</label>
                        <input type="text" class="form-control" name="incharge" value="{{ $fazilEdit->incharge }}">
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="contact" class="form-label">Contact</label>
                        <input type="number" class="form-control" name="contact" value="{{ $fazilEdit->contact }}">
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="Code" class="form-label">Code<span style="color: red">*</span></label>
                        <input type="number" class="form-control" name="code" value="{{ $fazilEdit->code }}">
                        @error('code')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    {{-- <div class="col-lg-6 mb-3">
                        <label for="document" class="form-label">Document<span style="color: red">*</span></label>
                        <input type="file" class="form-control" name="resume" accept=".pdf" required>
                    </div> --}}
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
