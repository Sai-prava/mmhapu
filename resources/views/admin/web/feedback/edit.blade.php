@extends('admin.layout.index')

@section('title')
    IQAC FEEDBACK
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Edit IQAC Feedback</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('admin.Feedback.update') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $edit->id }}">
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <label for="subject" class="form-label">Subject<span style="color: red">*</span></label>
                        <input type="text" name="subject" class="form-control" value="{{ $edit->subject }}">
                        @error('subject')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="url" class="form-label">URL<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="url" value=" {{ $edit->url }} ">
                        @error('url')
                            <span class="text-danger"> {{ $message }} </span>
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
