@extends('admin.layout.index')

@section('title')
    Urgent Mode
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Add Urgent Mode</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('admin.urgentmodeStore') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                   
                    <div class="col-lg-6 mb-3">
                        <label class="form-label">Amount<span>*</span></label>
                        <input type="number" name="amount" class="form-control" placeholder="Enter Amount">
                        @error('amount')
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
