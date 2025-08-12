@extends('admin.layout.index')

@section('title')
    IQAC MINUTES
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Add IQAC Minutes</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('admin.minutes.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-12 mb-3">
                        <label for="policy" class="form-label">Minutes<span style="color: red">*</span></label>
                        <textarea class="form-control texteditor" name="iqac_minute" cols="30" rows="10" placeholder="Enter Policy"> {{ old('iqac_minute') }} </textarea>
                        @error('iqac_minute')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="document" class="form-label">Document<span style="color: red">*</span></label>
                        <input type="file" class="form-control" name="document" placeholder="Enter Document"
                            accept=".pdf">
                        @error('document')
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
