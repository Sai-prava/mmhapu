@extends('admin.layout.index')

@section('title')
    NOTICE TYPE
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h4 class="card-title">Edit Notice Type</h4>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('admin.NoticeType.update') }}" method="post">
                @csrf
                <div class="mb-3">
                    <input type="hidden" name="id" value="{{ $edit_noticetype->id }}">
                    <label for="notice_type" class="form-label">Notice Type</label>
                    <input type="text" class="form-control" id="notice_type" name="notice_type"
                        value="{{ $edit_noticetype->notice_type }}" required>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
