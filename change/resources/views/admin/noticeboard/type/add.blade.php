@extends('admin.layout.index')

@section('title')
    NOTICE TYPE
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h4 class="card-title">Add Notice Type</h4>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('admin.NoticeType.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="notice_type" class="form-label">Notice Type<span style="color: red">*</span></label>
                    <input type="text" class="form-control" id="notice_type" name="notice_type"
                        placeholder="Enter Notice Type"  value="{{ old('notice_type') }}">
                        @error('notice_type')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>


        </div>
    </div>
@endsection
