@extends('admin.layout.index')

@section('title')
    NOTICE
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Add Notice</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('admin.Notice.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="notice_type" class="form-label">Title<span style="color: red">*</span></label>
                    <input type="text" class="form-control" name="title" placeholder="Enter Title"
                        value="{{ old('title') }}">
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="notice_type" class="form-label">Description<span style="color: red">*</span></label>
                    <textarea class="form-control texteditor" name="description"cols="30" rows="4" placeholder="Enter Description">{{ old('description') }}</textarea>
                    @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="uploadOption" class="form-label">Type:</label>
                    <div class="d-flex">
                        <div class="form-check me-3">
                            <input class="form-check-input" type="radio" name="type" id="fileOption" value="file"
                                checked>
                            <label class="form-check-label" for="fileOption">File</label>
                        </div>
                        <div class="form-check ml-5">
                            <input class="form-check-input" type="radio" name="type" id="linkOption" value="link">
                            <label class="form-check-label" for="linkOption">Link</label>
                        </div>
                    </div>
                </div>

                <div class="mb-3" id="fileField">
                    <label for="notice_type" class="form-label">File</label>
                    <input type="file" class="form-control" name="file">
                    @error('file')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3" id="urlField" style="display:none;">
                    <label for="notice_type" class="form-label">Url</label>
                    <input type="text" class="form-control" name="url" placeholder="Enter URL">
                    @error('url')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="notice_type" class="form-label">Notice Type<span style="color: red">*</span></label>
                    <select class="form-control" name="notice_type">
                        <option value="">Select Notice Type</option>
                        @foreach ($add_notice as $notice)
                            <option value="{{ $notice->notice_type }}"
                                {{ old('notice_type') == $notice->notice_type ? 'selected' : '' }}>
                                {{ $notice->notice_type }}</option>
                        @endforeach
                    </select>
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
@section('scripts')
    <script>
        $(document).ready(function() {
            $('input[name="type"]').change(function() {
                if ($(this).val() === 'file') {
                    $('#fileField').show();
                    $('#urlField').hide();
                } else if ($(this).val() === 'link') {
                    $('#fileField').hide();
                    $('#urlField').show();
                }
            });
        });
    </script>
@endsection
