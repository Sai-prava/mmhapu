@extends('admin.layout.index')

@section('title')
    COMMITTEES
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Add Committees</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('admin.committees.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-12 mb-3">
                        <label for="intitution" class="form-label">Name & Address<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="name_address" placeholder="Enter Name & Address">
                        @error('name_address')
                            <span class="text-danger"> {{ 'Name & Address field is required' }} </span>
                        @enderror
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="intitution" class="form-label">Designation<span style="color: red">*</span></label>
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
