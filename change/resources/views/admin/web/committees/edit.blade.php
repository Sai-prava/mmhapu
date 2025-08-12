@extends('admin.layout.index')

@section('title')
    COMMITTEES
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Edit Committees</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('admin.committees.update') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $edit->id }}">
                <div class="row">
                    <div class="col-lg-12 mb-3">
                        <label for="intitution" class="form-label">Name & Address<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="name_address" value="{{ $edit->name_address }}">
                        @error('name_address')
                            <span class="text-danger"> {{ 'Name & Address field is required' }} </span>
                        @enderror
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="intitution" class="form-label">Designation<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="designation" value="{{ $edit->designation }}">
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
