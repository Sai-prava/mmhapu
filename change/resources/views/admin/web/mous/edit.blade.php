@extends('admin.layout.index')

@section('title')
    MOUs
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Edit MOUs</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('admin.mous.update') }}" method="post">
                @csrf
                <div class="row">
                    <input type="hidden" name="id" value="{{ $edit->id }}">
                    <div class="col-lg-12 mb-3">
                        <label for="intitution" class="form-label">Name Of The Institute<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="institute" value=" {{ $edit->institute }} ">
                        @error('institute')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="intitution" class="form-label">Collaborative Department In The University<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="collaborative" value=" {{ $edit->collaborative }} ">
                        @error('collaborative')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="intitution" class="form-label">Country<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="country" value=" {{ $edit->country }} ">
                        @error('country')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="intitution" class="form-label">Dated/ Year<span style="color: red">*</span></label>
                        <input type="date" class="form-control" name="dated" value="{{ $edit->dated }}" placeholder="Enter Dated/ Year">
                        @error('dated')
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
